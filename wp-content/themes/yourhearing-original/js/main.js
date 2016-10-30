(function() {

		jQuery(document).ready(function(){
			jQuery("#sidebar").sticky({topSpacing:30, bottomSpacing:440});
		});

		// jQuery('.headline--blog__sub em').textillate();

		var msnry = new Masonry( '.grid', {
		  // options
		  	fitWidth: true,	
		  	gutter: 30,
    	  	// isInitLayout: false,
		  	itemSelector: '.grid-item',
		  	percentPosition: true
		});		

		  	// msnry._isLayoutInited = true;
  			// msnry.layout();


		// jQuery('.grid-item').css({
		// 	opacity: 0,
		// 	transform: 'translateY(4rem)'
		// });

  //       jQuery('.grid-item').each( function( i ) {
  //           new Waypoint({
  //               element: jQuery(this),
  //               handler: function(direction) {
  //                   jQuery(this.element).addClass('animate');                	
  //               },
  //               offset: 600
  //           });            
  //       });


		// new AnimOnScroll( document.getElementById( 'grid' ), {
		// 	minDuration : 0.4,
		// 	maxDuration : 0.7,
		// 	viewportFactor : 0.2
		// } );





        jQuery('.field-dark').on('focus', function() {
        	jQuery(this).attr('placeholder', 'Enter Zip Code');
        });
        jQuery('.field-dark').on('blur', function() {
        	jQuery(this).val("");
        	jQuery(this).attr('placeholder', 'Find a Clinic');
        });
        jQuery('.icon-search').click(function() {
       		jQuery('.field-dark').focus();	
        });

    //     $grid = jQuery('.grid');

    //     $grid.isotope({
    //     	itemSelector: '.grid-item',
    //     	masonry: {
				// fitWidth: true,
				// itemSelector: '.grid-item',
				// percentPosition: true,
				// gutter: 30,
    //     	}
    //     });

		// jQuery('.select--filter').on( 'change', function() {

		// 	// var filterValue = this.value;
		// 	var val = jQuery('.select--filter option:selected').text().replace(/\s+/g, '-').toLowerCase();

		// 	if (val === 'all') {
		// 		var filterValue = '*';
		// 	}
		// 	else {
		// 		var filterValue = '.' + val;
		// 	}

		// 	$grid.isotope({ filter: filterValue });			

		// });


		// jQuery('.post').wrap("<a href='<?php the_permalink(); ?>' rel='bookmark' title='Permanent Link to <?php the_title_attribute(); ?>'></a>");

		var getUrlParameter = function getUrlParameter(sParam) {
		    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		        sURLVariables = sPageURL.split('&'),
		        sParameterName,
		        i;

		    for (i = 0; i < sURLVariables.length; i++) {
		        sParameterName = sURLVariables[i].split('=');

		        if (sParameterName[0] === sParam) {
		            return sParameterName[1] === undefined ? true : sParameterName[1];
		        }
		    }
		};

		if(getUrlParameter('category')) {
			jQuery('#FilterSelect').val(getUrlParameter('category'));
		}				

		jQuery('#FilterSelect').on('change', function () {

			var param = jQuery(this).val()
			
			if (param === 'all') {
				window.location = 'http://localhost:8888/yourhearing/';
				return false;
			}
			else {
				var url = 'http://localhost:8888/yourhearing/?category=' + param; // get selected value
				if (url) { // require a URL
					window.location = url; // redirect
				}
				return false;
			}
		});		


		// var $filterSelect = jQuery('#FilterSelect'),
		// $container = jQuery('#Container');

		// $container.mixItUp({
		// 	controls: {
		// 		enable: true
		// 	},
		// 	load: {
		// 		page: 1
		// 	},
		// 	pagination: {
		// 		limit: 10
		// 	},		
		// });

		// $filterSelect.on('change', function(){
		// 	$container.mixItUp('filter', this.value);
		// });


		jQuery('.social-media-share').click(function(e) {
			jQuery(this).siblings('.social-media-dropdown').css({
				opacity: 1,
				transform: 'translateY(-108%)'
			});
		});

		jQuery('body').click(function(evt){    
		       if(jQuery(evt.target).attr('class') == "social-media-share")
		          return;
		       //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
		       if(jQuery(evt.target).closest('.social-media-share').length)
		          return;             

		      //Do processing of click event here for every element except with id menu_content

			jQuery('.social-media-dropdown').css({
				opacity: 0,
				transform: 'translateY(-100%)'
			});

		});		
		

})(jQuery, window , document);
