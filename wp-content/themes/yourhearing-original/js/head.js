(function() {

    $grid = jQuery('.grid');

    $grid.isotope({
    	itemSelector: '.grid-item',
    	masonry: {
    		fitWidth: true,
    		itemSelector: '.grid-item',
    		percentPosition: true,
    		gutter: 30,
    	}
    });
    
})(jQuery, window , document);
