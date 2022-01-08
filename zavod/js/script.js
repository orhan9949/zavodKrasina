
jQuery(document).ready(function() {
	jQuery("a.scrollto").click(function () {
		elementClick = jQuery(this).attr("href")
		destination = jQuery(elementClick).offset().top;
		jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1000);
		return false;
	});
	/* Прокручивает страницу вверх при нажатии на кнопку */
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});
	$(document).ready(function() {
		$("#toTop").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});
	var swiper = new Swiper(".mySwiper", {
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		}
	});





	/* Menu animation */
	function cryoutMenuAnimate() {
		jQuery( '#access > .menu ul li > a:not(:only-child)' ).attr( 'aria-haspopup', 'true' );/* IE10 mobile Fix */

		jQuery( '#access li' ).on( 'mouseenter', function() {
			jQuery( this ).addClass( 'menu-hover' );
		} ).on( 'mouseleave', function() {
			jQuery( this ).removeClass( 'menu-hover' );
		} );

		jQuery( '#access ul' ).find( 'a' ).on( 'focus', function() {
			jQuery( this ).parents( '.menu-item, .page_item' ).addClass( 'menu-hover' );
		} );

		jQuery( '#access ul' ).find( 'a' ).on( 'blur', function() {
			jQuery( this ).parents( '.menu-item, .page_item' ).removeClass( 'menu-hover' );
		} );
	} /* cryoutMenuAnimate() */

	/* Back to top button animation */
	function cryoutBackToTop() {
		jQuery( window ).on( 'scroll', function() {
			if ( jQuery( this ).scrollTop() > 500 ) {
				jQuery( '#toTop' ).addClass( 'toTop-show' );
			} else {
				jQuery( '#toTop' ).removeClass( 'toTop-show' );
			}

			if ( jQuery( this ).scrollTop() > 200 ) {
				jQuery( '.roseta-fixed-menu .site-header-bottom' ).addClass( 'header-fixed' );
			} else {
				jQuery( '.roseta-fixed-menu .site-header-bottom' ).removeClass( 'header-fixed' );
			}
		} );

		jQuery( '#toTop' ).on( 'click', function( event ) {
			event.preventDefault();
			jQuery( 'html, body' ).animate( { scrollTop: 0 }, 500 );
			return false;
		} );

	} /* cryoutBackToTop() */

	/* Search form animation */
	function cryoutSearchFormAnimation() {
		var searchIcon = jQuery( '#access .menu-search-animated > a' ),
			searchForm = jQuery( '.menu-search-animated .searchform, .menu-main-search .icon-cancel' ),
			searchInput = jQuery( '#access .menu-search-animated .s' );

		searchIcon.on( 'click focus', function( event ) {
			event.preventDefault();
			searchForm.fadeIn( 200, function() {
				searchInput.trigger( 'focus' );
				searchInput.css( 'outline', 'none' );
			} );
			searchInput.addClass( 'is-active' );
			event.stopPropagation();
		} );

		searchForm.on( 'click', function( event ){
			event.stopPropagation();
		} );

		searchInput.on( 'blur', function() {
			searchInput.removeClass( 'is-active' );
			searchForm.fadeOut( 200 );
		} );

	} /* cryoutSearchFormAnimation() */

	/* Mobile Menu */
	function cryoutMobileMenuInit() {

		jQuery( 'body' ).on( 'click', '#nav-toggle', function( e ) {
			e.stopPropagation();
			jQuery( '#site-wrapper' ).addClass( 'is-active' );
			jQuery( '#mobile-menu' ).show( 0 ).addClass( 'mobile-show' );
			jQuery( 'body' ).addClass( 'noscroll' );
		} );

		jQuery( 'body' ).on( 'click', '#nav-cancel', function( e ) {
			e.stopPropagation();
			jQuery( '#mobile-menu' ).removeClass( 'mobile-show' ).hide( 500 );
			jQuery( '#site-wrapper' ).removeClass( 'is-active' );
			jQuery( 'body' ).removeClass( 'noscroll' );
		} );

		/* Remove animated class from mobile menu */
		jQuery( '#mobile-menu .menu-main-search' ).removeClass( 'menu-search-animated' );

		jQuery( 'mobile-menu > div' ).append( jQuery( '#top-section-widget' ).clone() );
		jQuery( '#mobile-menu #top-section-widget' ).attr( 'id', 'smobile' );

		jQuery( '#mobile-menu > div' ).append( jQuery( '#branding' ).clone() );
		jQuery( '#mobile-menu #branding' ).attr( 'id', 'bmobile' );

	} /* cryoutMobileMenuInit() */

	/* Menu animation */
	function cryoutMenuAnimate() {
		jQuery( '#access > .menu ul li > a:not(:only-child)' ).attr( 'aria-haspopup', 'true' );/* IE10 mobile Fix */

		jQuery( '#access li' ).on( 'mouseenter', function() {
			jQuery( this ).addClass( 'menu-hover' );
		} ).on( 'mouseleave', function() {
			jQuery( this ).removeClass( 'menu-hover' );
		} );

		jQuery( '#access ul' ).find( 'a' ).on( 'focus', function() {
			jQuery( this ).parents( '.menu-item, .page_item' ).addClass( 'menu-hover' );
		} );

		jQuery( '#access ul' ).find( 'a' ).on( 'blur', function() {
			jQuery( this ).parents( '.menu-item, .page_item' ).removeClass( 'menu-hover' );
		} );
	} /* cryoutMenuAnimate() */

	/* Add submenus toggles to the primary navigation */
	function cryoutInitNav( selector ) {

		container = jQuery( selector );

		/* Add dropdown toggle that display child menu items. */
		container.find( '.menu-item-has-children > a' )
			.after( '<button class="dropdown-toggle" aria-expanded="false"></button>' );
		container.find( '.page_item_has_children > a' )
			.after( '<button class="dropdown-toggle" aria-expanded="false"></button>' );

		/* Toggle buttons and submenu items with active children menu items. */
		container.find( '.current-menu-ancestor > button, .current-page-ancestor > button' )
			.addClass( 'toggle-on' );
		container.find( '.current-menu-ancestor > .sub-menu, .current-page-ancestor > .sub-menu,' +
			' .current-menu-ancestor .children, .current-page-ancestor .children' )
			.show( 0 ).addClass( 'toggled-on' );

		container.find( '.dropdown-toggle' ).on( 'click', function( e ) {
			var _this = jQuery( this );
			e.preventDefault();
			_this.toggleClass( 'toggle-on' );
			if ( _this.hasClass( 'toggle-on') ) {
				_this.next( '.children, .sub-menu' ).show( 0 ).addClass( 'toggled-on' );
				_this.prev( 'a' ).addClass( 'toggled-on' );
			}
			else {
				_this.next( '.children, .sub-menu' ).removeClass( 'toggled-on' );
				_this.next( '.children, .sub-menu' ).find( '.children, .sub-menu' ).removeClass( 'toggled-on' );
				_this.next( '.children, .sub-menu' ).find( 'a' ).removeClass( 'toggled-on' );
				_this.next( '.children, .sub-menu' ).find( '.dropdown-toggle' ).removeClass( 'toggled-on' );
				_this.prev( 'a' ).removeClass( 'toggled-on' );

				setTimeout( function() {
					_this.next( '.children, .sub-menu' ).hide( 0 );
					_this.next( '.children, .sub-menu' ).find( '.children, .sub-menu' ).hide( 0 );
				}, 600 );
			}

			/* _this.parent().find( 'a' ).toggleClass( 'toggled-on' ); */
			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		} );

		/* Close mobile menu on click/tap */
		jQuery( 'body' ).on( 'click', '#mobile-nav a', function() {
			jQuery( '#nav-cancel i' ).trigger( 'click' );
		} );

	} /* cryoutInitNav() */
	cryoutInitNav();
	cryoutMobileMenuInit();
	cryoutSearchFormAnimation();
	cryoutMenuAnimate();
});


