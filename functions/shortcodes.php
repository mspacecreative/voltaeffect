<?php 
// BLOG SIDEBAR RECENT POSTS
function recentPosts() {
	ob_start();
		get_template_part('includes/sidebar-blog-loop');
	return ob_get_clean();
}
add_shortcode( 'sidebar_posts', 'recentPosts' );

// BLOG SIDEBAR RECENT POSTS 2
function recentPosts2() {
	ob_start();
		get_template_part('includes/loops/loop-sidebar-blog');
	return ob_get_clean();
}
add_shortcode( 'sidebar_recent_posts', 'recentPosts2' );

// RELATED POSTS
function relatedPosts() {
	ob_start();
		get_template_part('includes/related-posts');
	return ob_get_clean();
}
add_shortcode( 'related_posts', 'relatedPosts' );

// RELATED POSTS 2
function relatedPosts2() {
	ob_start();
		get_template_part('includes/related-posts-2');
	return ob_get_clean();
}
add_shortcode( 'related_posts_2', 'relatedPosts2' );

// CURRENT RESIDENTS POSTS LOOP
function currentResidents() {
	ob_start();
		get_template_part('includes/loops/loop-residents');
	return ob_get_clean();
}
add_shortcode( 'residents_loop', 'currentResidents' );

// COHORT RESIDENTS POSTS LOOP
function cohortResidents() {
	ob_start();
		get_template_part('includes/loops/loop-cohort');
	return ob_get_clean();
}
add_shortcode( 'cohort_loop', 'cohortResidents' );

// VOLTA GEAR RESIDENTS POSTS LOOP
function gearResidents() {
	ob_start();
		get_template_part('includes/loops/loop-gear');
	return ob_get_clean();
}
add_shortcode( 'gear_loop', 'gearResidents' );

// VOLTA GEAR RESIDENTS POSTS LOOP
function boardMembers() {
	ob_start();
		get_template_part('includes/loops/loop-board-members');
	return ob_get_clean();
}
add_shortcode( 'board_members_loop', 'boardMembers' );

// CORPORATE INNOVATION OUTPOSTS LOOP
function corporateInnovationResidents() {
	ob_start();
		get_template_part('includes/loops/loop-corporate-innovation-outpost');
	return ob_get_clean();
}
add_shortcode( 'corporate_innovation_loop', 'corporateInnovationResidents' );

// ALUMNI COMPANY POSTS LOOP
function alumniCompanies() {
	ob_start();
		get_template_part('includes/loops/loop-alumni');
	return ob_get_clean();
}
add_shortcode( 'alumni_loop', 'alumniCompanies' );

// CURRENT RESIDENTS POSTS LOOP
function teamMembers() {
	ob_start();
		get_template_part('includes/loops/loop-team');
	return ob_get_clean();
}
add_shortcode( 'volta_team', 'teamMembers' );

// PRICING TABLE
function pricingTable() {
	ob_start();
		get_template_part('includes/pricing-table');
	return ob_get_clean();
}
add_shortcode( 'pricing_table', 'pricingTable' );

// PRICING TABLE
function pricingTable2() {
	ob_start();
		get_template_part('includes/pricing-table-acf');
	return ob_get_clean();
}
add_shortcode( 'pricing_table_acf', 'pricingTable2' );

// PARTNERS CPT LOOP
function partnersLoop() {
	ob_start();
		get_template_part('includes/loops/loop-partners');
	return ob_get_clean();
}
add_shortcode( 'partners_loop', 'partnersLoop' );

// POSTS LOOP IN FOOTER
function recentPosts3() {
	ob_start();
		get_template_part('includes/footer-blog-loop');
	return ob_get_clean();
}
add_shortcode( 'recent_posts_3', 'recentPosts3' );

// MAILCHIMP FORM
function mailChimpForm() {
	ob_start();
		get_template_part('includes/mailchimp-form');
	return ob_get_clean();
}
add_shortcode( 'mailchimp_form', 'mailChimpForm' );