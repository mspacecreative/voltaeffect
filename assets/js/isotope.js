(function ($) {
	    
	var grid = $('.iso-grid').isotope( {
		itemSelector: ".grid-item",
		percentPosition: true,
		masonry: {
		    columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
		}
	});
		
	$(window).load(function () {
		grid.imagesLoaded().progress( function() {
			grid.isotope('layout');
		});
	});
	
	$('.mobile-filter button').click(function() {
	    $(this).parent().siblings('.filters-button-group').slideToggle();
		$(this).toggleClass('open');
			
		if ( $('.mobile-filter button').hasClass('open') ) {
			$(this).html('Close');
		} else {
			$(this).html('Filter by category');
		}
	});
	
})(jQuery);