<?php
// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

function strip_shortcode_from_excerpt( $content ) {
  $content = strip_shortcodes( $content );
  return $content;
}
add_filter('the_excerpt', 'strip_shortcode_from_excerpt');

// Define the custom excerpt length
$wpse_40574_custom_excerpt_length = 15;

add_filter( 'wp_insert_post_data', 'wpse_40574_populate_excerpt', 99, 2 );

/** 
 * Checks if the the post has excerpt or not
 * Code reference: https://wordpress.stackexchange.com/a/52897/12615
 */
// 
function wpse_40574_populate_excerpt( $data, $postarr ) 
{   
    global $wpse_40574_custom_excerpt_length;

    // check if it's a valid call
    if ( !in_array( $data['post_status'], array( 'draft', 'pending', 'auto-draft' ) ) && 'post' == $data['post_type'] ) 
    {
        // if the except is empty, call the excerpt creation function
        if ( strlen($data['post_excerpt']) == 0 ) 
            $data['post_excerpt'] = wpse_40574_create_excerpt( $data['post_content'], $wpse_40574_custom_excerpt_length );
    }

    return $data;
}

/** 
 * Returns the original content string if its word count is lesser than $length, 
 * or a trimed version with the desired length.
 * Reference: see this StackOverflow Q&A - http://stackoverflow.com/q/11521456/1287812
 */
function wpse_40574_create_excerpt( $content, $length = 20 )
{
    $the_string = preg_replace( '#\s+#', ' ', $content );
    $words = explode( ' ', $the_string );

    /**
     * The following is a more efficient way to split the $content into an array of words
     * but has the caveat of spliting Url's into words ( removes the /, :, ., charachters )
     * so, not very useful in this context, could be improved though.
     * Note that $words[0] has to be used as the array to be dealt with (count, array_slice)
     */
    //preg_match_all( '/\b[\w\d-]+\b/', $content, $words );

    if( count($words) <= $length ) 
        $result = $content;
    else
        $result = implode( ' ', array_slice( $words, 0, $length ) );

    return $result;
}