/*
 *
 *		Omni v1.2 - omni.js
 *		Custom JavaScript and jQuery scripts for Omni HTML Theme that is being sold on ThemeForest.
 *		One Page VERSION		
 *
 */


	/*	==================================================
		# Check if website is viewed on a mobile & tablet
		================================================== */
		(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|android|ipad|playbook|silk|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
		

jQuery(document).ready(function() {
	
	
	/*	==================================================
		# One Page Navigation
		================================================== */
		jQuery('#main-nav').onePageNav({
			currentClass: 'current-menu-item',
			scrollSpeed: 800,
			scrollOffset: 28,
			scrollThreshold: 0.5
		});

	/*	==================================================
		# Safari 6.1/7 Parallax Fix
		================================================== */
		if ( jQuery.browser.safari ) {
			if (jQuery('.parallax').length > 0) {
   				jQuery('.parallax').css('zIndex', '0');
   			}
   		}
	
	/*	==================================================
		# AJAX Posts Navigation
		================================================== */	
		if (jQuery('.ajaxed').length > 0) {
		jQuery(document).on('click', '#paging-links a', function(event){
			event.preventDefault();
			var post_id = jQuery(this).attr('href');
			
			jQuery('.ajaxed').fadeTo(500, 0.1);
			jQuery.scrollTo( jQuery('#blog'), 800, {offset:-28} );
			
			jQuery('.ajaxed').load(post_id+' .ajaxed', function(){
				jQuery('.ajaxed').fadeTo(500, 1);
			});
		}); 
		}
		
	
	/*	==================================================
		# Scroll To
		================================================== */
		jQuery('.scroll-to').click(function(e){
			var href = jQuery(this).attr('href');
			jQuery.scrollTo( jQuery(href), 800, {offset:-28} );
			e.preventDefault();
		});
	
	/*	==================================================
		# Page Header Slogan FadeIn
		================================================== */
		jQuery('#page-header .slogan').each(function(){
			jQuery(this).css('opacity', 0);
			jQuery(this).delay(800).fadeTo(800, 1);
		});
		
	
	/*	==================================================
		# Isotope Portfolio
		================================================== */
		jQuery( '.portfolio' ).each(function(){
				
				var $this = jQuery(this);
				var $container = $this.find( '.portfolio-items' );
				var $filter = $this.find( '.filter' )
				
				$container.imagesLoaded( function(){
					
					// Add Isotope plugin to portfolio-items
					$container.isotope({
						itemSelector: '.item',
						masonry: {
							columnWidth: $container.width() / 12
						}
					});
					
					// update columnWidth on window resize
					jQuery(window).smartresize(function(){
						$container.isotope({
							masonry: { columnWidth: $container.width() / 12 }
						});
					});
					
					// Filter the portfolio items by data filter attribute
					$filter.on('click', 'a', function(e) {
						var selector = jQuery(this).data( 'filter' );
						$container.isotope({
							filter: selector
						});
						jQuery(this).closest( 'li' ).addClass( 'active' ).siblings( 'li' ).removeClass( 'active' );
						
						e.preventDefault();
					});
					
					// Add class 'active' to 'All'
					$filter.find( 'li' ).each(function() {
						var filterData = jQuery(this).find( 'a' ).data( 'filter' );
						if ( filterData === '*' ) {
							jQuery(this).addClass('active');
						}
					});
					
					// Add Magnific Popup Images Gallery
					$container.find( '.item-zoom' ).magnificPopup({
						type: 'image',
						gallery: {
							enabled: true
						}
					});
					
					// Add Magnific Popup for the Item Details
					$container.find( '.item-link' ).magnificPopup({
						type: 'ajax',
						ajax: {
							settings: {
								cache: false
							}
						}, 
						alignTop: true,
						overflowY: 'scroll',
						removalDelay: 300,
						mainClass: 'mfp-zoom-in',
						callbacks: {
							updateStatus: function(data) {
								if(data.status === 'ready') {
									jQuery('.item-media.flexslider').flexslider({
										animation: "fade",
										slideshow: false,
										controlNav: false,
										useCSS: false
									});
									jQuery('.item-media.video').fitVids();
								}
							}
						}
					});
					
					// Add Direction Aware Hover
					$container.find( '.item' ).each( function() {
						jQuery(this).hoverdir({
							hoverDelay : 0
						});
					});
					
				});
			
		});
	
	
	/*	==================================================
		# HEADING PARALLAX: Full Screen Height
		================================================== */
		function headerParallaxHeight() {
			var parallaxHeight = jQuery(window).height() - jQuery('#top').outerHeight();
			if ( jQuery('#main-nav').length > 0 ) {
				var parallaxHeight = jQuery(window).height() - jQuery('#top').outerHeight() - jQuery('#main-nav').outerHeight();
			}
			jQuery( '.home-type.parallax-type, .home-type.parallax-type .parallax' ).css('height', parallaxHeight);
		}
		jQuery(window).resize(headerParallaxHeight);
		headerParallaxHeight();


	/*	==================================================
		# jQuery Plugins only for Desktop and Tablets
		================================================== */
		if ( jQuery(window).width() > 1024 ) {
			if ( jQuery.browser.mobile === false ) {
			
			
			/*	==================================================
				# Parallax
				================================================== */
				jQuery( '.parallax' ).each(function(){
					jQuery(this).parallax("50%", 0.3);
				});
				
			/*	==================================================
				# Pricing Animation - since v1.2
				================================================== */	
				var css = jQuery("<link>");
				css.attr( { rel: 'stylesheet', type: 'text/css', href: templateDir + '/assets/css/animate.css' } );
				jQuery('head').append(css);
				
				jQuery( '.price-package' ).hover( function() {
						jQuery(this).removeClass( 'normalize' ).addClass( 'animated enlarge' );	
					}, function() {
						jQuery(this).removeClass( 'enlarge' ).addClass( 'normalize' );
				});
				
			}
		}
		
	/*	==================================================
		# Parallax Fix for Tablet Landscape View
		================================================== */
		if ( jQuery.browser.mobile === true ) {
			jQuery( '.parallax' ).each(function(){
				jQuery(this).addClass( 'parallax-mobile' );
			});
		}
	
	
	/*	==================================================
		# jQuery Plugins only for Desktop
		================================================== */
		if ( jQuery(window).width() > 979 ) {
			if ( jQuery.browser.mobile === false ) {
			
			/*	==================================================
				# Hover Directions
				================================================== */
				jQuery( '.services > [class*="span"]' ).each( function() {
					jQuery(this).hoverdir({
						hoverDelay : 0
					});
				});
			
			}
			if ( jQuery.browser.mobile === true ) {
				jQuery( '.service .back' ).css({
					'top': '0px',
					'display': 'none'
				})
				jQuery( '.services > [class*="span"]' ).hover(
					function () {
						jQuery(this).find('.back').css('display', 'block');
					},
					function () {
						jQuery(this).find('.back').css('display', 'none');
					}
				);
			}	
		}
	

	/*	==================================================
		# Home Element Fader
		================================================== */
		var elementFader = function() {
			jQuery( '.element-fader' ).each( function() {
				
				var $container = jQuery(this),
					elementLength = jQuery(this).find( '.fade-element' ).length;
				
				// Function for each fade element
				$container.find( '.fade-element' ).delay(1400).each(function(index) {
					jQuery(this).delay(3000 * index).fadeIn(1000, function() {
						
						// If fade element is not last element detach the element
						if ( index != elementLength - 1 ) {
							jQuery(this).detach().appendTo($container).delay(800).fadeOut(800);
						}
						
					});
				});
				
			});
		};
		elementFader();
		

	/*	==================================================
		# Skills Percentage Marker
		================================================== */	
		jQuery( '.progress .bar' ).each(function() {
			var percentage = jQuery(this).data( 'percentage' );
			jQuery(this).append('<span class="percentage-marker">' + percentage + '&#37;</span>');
		});	
		
		
	/*	==================================================
		# Tooltip
		================================================== */
		jQuery( 'body' ).tooltip({
			selector: "a[data-toggle=tooltip]"
		});
	
	
	/*	==================================================
		# HEADING VIDEO: Load FitVids
		================================================== */
		jQuery( '.video-bg' ).fitVids();
		jQuery( '.blog-thumb.video' ).fitVids();
		
	
	/*	==================================================
		# Twitter Feed
		================================================== */
		jQuery( '.tweet' ).each(function() {
			var username = jQuery(this).data( 'twitter-username' );
			var count = jQuery(this).data( 'count' );
			jQuery(this).tweet({
				modpath: templateDir + '/assets/php/twitter/',
				username: username,
				avatar_size: 0,
				count: count,
				template: '{text}{time}',
			});
		});
		
	
	/*	=========================================================
		# Add Superfish for Dropdown Main Nav - since v1.1
		========================================================= */
		jQuery('ul.sf-menu').superfish({
				delay:		300,
				cssArrows:	false,
				disableHI: true
		});
		
		
	/*	=========================================================
		# Add Mobile Menu for Main-Navigation
		========================================================= */
		jQuery('.main-menu').mobileMenu();
	
	
	/*	=========================================================
		# Add Flexslider and FitVids to Blog Thumb
		========================================================= */
		jQuery('.blog-thumb.flexslider').flexslider({
			animation: "fade",
			slideshow: false,
			controlNav: false,
			useCSS: false
		});
	
});


/*	==================================================
	# Carousels (one function) - Since v1.2
	================================================== */
	if ( jQuery( profileCarouselIds ).length > 0 )
	{
		// store the slider in a local variable
		var $window = jQuery(window),
			flexslider_testimonials,
			flexslider_team,
			flexslider_clients;
		
		// tiny helper function to add breakpoints
		function getGridSize() {
			return	((window.innerWidth || document.documentElement.clientWidth) < 480) ? 1 :
					((window.innerWidth || document.documentElement.clientWidth) > 479 && (window.innerWidth || document.documentElement.clientWidth) < 768) ? 2 :
					((window.innerWidth || document.documentElement.clientWidth) > 767 && (window.innerWidth || document.documentElement.clientWidth) < 980) ? 4 : 4;
			}
		
		// tiny helper function to add breakpoints
		function getGridSizeSecond() {
			return	((window.innerWidth || document.documentElement.clientWidth) < 480) ? 1 :
					((window.innerWidth || document.documentElement.clientWidth) > 479 && (window.innerWidth || document.documentElement.clientWidth) < 768) ? 1 :
					((window.innerWidth || document.documentElement.clientWidth) > 767 && (window.innerWidth || document.documentElement.clientWidth) < 980) ? 3 : 3;
			}
		
		/*$(function() {
			SyntaxHighlighter.all();
		});*/
		
		$window.load(function()
		{
			jQuery( '.profile-carousel' ).each(function(){
				jQuery( this ).flexslider({
					animation: "slide",
					slideshow: false,
					itemWidth: 230,
					itemMargin: 10,
					useCSS: false,
					minItems: getGridSize(), // use function to pull in initial value
					maxItems: getGridSize(), // use function to pull in initial value
					start: function(slider){
						flexslider_testimonials = slider;
					}
				});
			});
			
			jQuery( '.clients.carousel' ).each(function(){
				jQuery( this ).flexslider({
					animation: "slide",
					slideshow: false,
					controlNav: false,
					itemWidth: 230,
					itemMargin: 45,
					useCSS: false,
					minItems: getGridSizeSecond(), // use function to pull in initial value
					maxItems: getGridSizeSecond(), // use function to pull in initial value
					start: function(slider){
						flexslider_clients = slider;
					}
				});
			});
		});
		
		// check grid size on resize event
		$window.resize(function()
		{
			var gridSize = getGridSize();
			
			if(flexslider_testimonials)
			{
				flexslider_testimonials.vars.minItems = gridSize;
				flexslider_testimonials.vars.maxItems = gridSize;
			}

			if(flexslider_team)
			{
				flexslider_team.vars.minItems = gridSize;
				flexslider_team.vars.maxItems = gridSize;
			}

			if(flexslider_clients)
			{
				gridSize = getGridSizeSecond();

				flexslider_clients.vars.minItems = gridSize;
				flexslider_clients.vars.maxItems = gridSize;
			}
		});
	}


/*	==================================================
	# Mobile Navigation
	================================================== */
	function scrollTo(target){
		jQuery.scrollTo( jQuery(target), 800 );
	}


jQuery(window).load(function() {
	
	
	/*	==================================================
		# Portfolio Slider
		================================================== */
		jQuery( '.portfolio-slider' ).flexslider({
			animation: "fade",
			slideshow: false,
			controlNav: false,
			useCSS: false
		});

	
	/*	==================================================
		# Google Maps
		================================================== */
		(function() {
				var gm = document.createElement('script');
				gm.src = 'http://maps.google.com/maps/api/js?v=3&sensor=false&language=en&callback=gmaps_loaded';
				gm.type = 'text/javascript';
				gm.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gm, s);
				
					window.gmaps_loaded = function() {
						jQuery( '.google-maps' ).each(function() {
							var options = {
								map: {
									address: jQuery(this).data( 'map-address' ),
									options: {
										zoom: jQuery(this).data( 'zoom' ) || 14,
										styles: [ {
												stylers: [
													{ hue: jQuery(this).data( 'hue' ) },
													{ saturation: jQuery(this).data( 'saturation' ) || -30 }
												]
										} ],
										scrollwheel: false,
										mapTypeControl: false,
										streetViewControl: false,
									}
								},
								marker: {
									values:[
										{address: jQuery(this).data( 'marker-address' ), options:{icon: jQuery(this).data( 'marker-img' )}}
									],
								}
							};
							jQuery(this).gmap3(options);
						});
					}
		})();
		
		
	/*	==================================================
		# HEADING TILED ITEMS: Tiled Portfolio
		================================================== */
		jQuery('.tiled-container').each(function(){
			
			var $tiledContainer = jQuery(this);
			
			/* Add tiledItems plugin for tiledContainer
			   The amount of rows can be easily changed */
			$tiledContainer.tiledItems({
				rows: tiledItemsRows
			});
			
			// If the variable showTiledOverlay exists
			if ( $tiledContainer.find('.tiled-items .overlay').length > 0 ) {
			$tiledContainer.find( '.item img' ).addClass( 'grayscale' );
			}
			
			// On #hide-overlay click do this
			$tiledContainer.on('click', '#hide-overlay, #hide-overlay-phone', function(e){
				$tiledContainer.find( '.overlay' ).fadeOut();
				$tiledContainer.find( '.item img' ).removeClass( 'grayscale' );
				if (!jQuery('#show-overlay').length) {
				jQuery( '#top' ).find( '.adds' ).stop().append( '<li><a id="show-overlay" class="icon-arrows-ccw" href="#" data-placement="bottom" data-toggle="tooltip" title="Show Overlay"></a></li>' );
				}	
				e.preventDefault();
			});
				
			// On #show-overlay click do this
			jQuery( '#top' ).find( '.adds' ).on('click', '#show-overlay', function(e){
				$tiledContainer.find( '.overlay' ).fadeIn();
				$tiledContainer.find( '.item img' ).addClass( 'grayscale' );
				jQuery(this).closest( 'li' ).remove();
				
				e.preventDefault();
			});
		
		});
	
	/*	==============================================================
		# HEADING TILED ITEMS: Load the homepage - since v1.1
		============================================================== */
		jQuery( '.tiled-items' ).fadeIn();
		
	
	/*	==================================================
		# Add affix to One Page Main Navigation
		================================================== */
		if (jQuery('.one-page-nav').length > 0) {
		var offsetTopNav = jQuery( '.one-page-nav' ).offset().top;
		jQuery('.one-page-nav').sticky({ topSpacing: 0 });
		
		jQuery(window).scroll(function(){
			if ( jQuery(document).scrollTop() >= offsetTopNav ) {
				jQuery( '.nav-container' ).css('z-index', 'inherit');
			} else if ( jQuery(document).scrollTop() <= offsetTopNav ) {
				jQuery( '.nav-container' ).css('z-index', 200);
			}
		});
		}
		
	/*	==================================================
		# HEADING TILED ITEMS: Add affix to Home Overlay 
		================================================== */
		if ( jQuery('#home-header.tiled-container').length > 0 ) { 
		if ( jQuery(window).width() > 1024 ) {
			if ( jQuery.browser.mobile === false ) {
				var offsetTopOverlay = jQuery( '#home-header.tiled-container' ).offset().top;
				var offsetMainNav = jQuery( '#main-nav' ).offset().top;
				jQuery( '#home-header.tiled-container .overlay, #home-header.tiled-container .items-container' ).affix({
					offset: {
							top: function() {
							return offsetTopOverlay;
						}
					}
				});
				if ( jQuery(document).scrollTop() >= offsetMainNav ) {
					jQuery( '#home-header.tiled-container .items-container' ).css('zIndex', '-10');
					jQuery( '#home-header.tiled-container .overlay' ).css('zIndex', '-10');
				}
				
				jQuery(window).scroll(function(){
					if ( jQuery(document).scrollTop() >= (offsetTopOverlay +  jQuery( '#home-header.tiled-container' ).outerHeight()) || jQuery(document).scrollTop() <= offsetTopOverlay )  {
						jQuery( '#home-header.tiled-container .items-container' ).css('position', 'relative');
						jQuery( '#home-header.tiled-container .overlay' ).css('position', 'absolute');
					} else if ( jQuery(document).scrollTop() <= (offsetTopOverlay +  jQuery( '#home-header.tiled-container' ).outerHeight()) ) {
						jQuery( '#home-header.tiled-container .items-container' ).css('position', 'fixed');
						jQuery( '#home-header.tiled-container .overlay' ).css('position', 'fixed');
					}
					if ( jQuery(document).scrollTop() <= offsetMainNav ) {
						jQuery( '#home-header.tiled-container .items-container' ).css('zIndex', '0');
						jQuery( '#home-header.tiled-container .overlay' ).css('zIndex', '0');
					}
				});
				
			}
		}
		}
		
	
});