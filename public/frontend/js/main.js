/*

[Main Script]

Project     : JD - Responsive Personal vCard / CV / Resume Template
Version     : 1.0
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $document = $(document),
        $body = $('body'),
        isRTL = $('html').attr('dir') === 'rtl' ? true : false;
    
    /* ------------------------------------------------------------------------- *
     * CHECK DATA
     * ------------------------------------------------------------------------- */
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');

        $bgImg.css('background-image', function () {
            return 'url("' + $(this).data('bg-img') + '")';
        }).addClass('bg--img').removeAttr('data-bg-img').attr('data-rjs', 2);
        
        /* ------------------------------------------------------------------------- *
         * BACKGROUND PARALLAX
         * ------------------------------------------------------------------------- */
        var $parallaxBgImg = $('[data-bg-parallax]');
        
        $parallaxBgImg.each(function () {
            var $t = $(this);
            
            $t.parallax({ imageSrc: $t.data('bg-parallax') }).addClass('bg--img');
        });

        /* ------------------------------------------------------------------------- *
         * RETINAJS
         * ------------------------------------------------------------------------- */
        $('img').attr('data-rjs', 2);

        retinajs();

        /* ------------------------------------------------------------------------- *
         * POPUP
         * ------------------------------------------------------------------------- */
        var $galleryPopup = $('[data-trigger="gallery_popup"]');
        
        if ( $galleryPopup.length ) {
            $galleryPopup.magnificPopup({
                delegate: 'a',
                type: 'image',
                mainClass: 'mfp-no-margins mfp-with-zoom',
                gallery: {
                    enabled: true
                }
            });
        }

        /* ------------------------------------------------------------------------- *
         * PROGRESS BAR
         * ------------------------------------------------------------------------- */
        var $progressBar = $('[data-trigger="progress_bar"]');

        $progressBar.each(function () {
            var $t = $(this),
                width = $t[0].style.width;

            $t.css('width', 0);

            $t.waypoint(function () {
                $t.css('width', width);
            }, {
                triggerOnce: true,
                offset: 'bottom-in-view'
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $formValidation = $('[data-form="validate"] form');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function () {
                    return true;
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * AJAX FORM
         * ------------------------------------------------------------------------- */
        var $ajaxForm = $('[data-form="ajax"] form');
        
        $ajaxForm.each(function () {
            var $form = $(this),
                $formStatus = $form.find('.status');
            
            $form.validate({
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function (el) {
                    var $form = $(el),
                        formUrl = $form.attr('action'),
                        formData = $form.serialize();

                    $.post(formUrl, formData, function (res) {
                        $formStatus.show().html(res).delay(6000).fadeOut('show');
                    });
                }
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * SCROLL
         * ------------------------------------------------------------------------- */
        var $scroll = $('[data-trigger="scroll"]');

        $scroll.on('click', function (e) {
            e.preventDefault();

            e.$target = $(this).attr('href');

            $( e.$target ).animatescroll({
                padding: 80,
                easing: 'easeInOutExpo',
                scrollSpeed: 2000
            });
        });
        
        /* -------------------------------------------------------------------------*
         * COUNTDOWN
         * -------------------------------------------------------------------------*/
        var $countDown = $('[data-countdown]');
            
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown'), function(e) {
                $(this).html( '<ul>' + e.strftime('<li><strong>%D</strong><span>DAYS</span></li><li><strong>%H</strong><span>HOURS</span></li><li><strong>%M</strong><span>MINUTES</span></li><li><strong>%S</strong><span>SECONDS</span></li>') + '</ul>' );
            });
        });

        /* ------------------------------------------------------------------------- *
         * OWL CAROUSEL
         * ------------------------------------------------------------------------- */
        var $owlCarousel = $('.owl-carousel');
        
        $owlCarousel.each(function () {
            var $t = $(this);
            
            $t.owlCarousel({
                rtl: isRTL,
                items: checkData( $t.data('owl-items'), 1 ),
                margin: checkData( $t.data('owl-margin'), 0 ),
                loop: checkData( $t.data('owl-loop'), true ),
                smartSpeed: 2500,
                autoplay: checkData( $t.data('owl-autoplay'), true ),
                autoplayTimeout: checkData( $t.data('owl-speed'), 8000 ),
                center: checkData( $t.data('owl-center'), false ),
                animateOut: checkData( $t.data('owl-animate'), false ),
                nav: checkData( $t.data('owl-nav'), false ),
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                dots: checkData( $t.data('owl-dots'), false ),
                responsive: checkData( $t.data('owl-responsive'), {} )
            }).addClass( 'owl-dots--' + checkData( $t.data('owl-dots-style'), '1' ) );
        });

        /* ------------------------------------------------------------------------- *
         * HEADER SECTION
         * ------------------------------------------------------------------------- */
        var $headerNav = $('#headerNav');

        $headerNav.on('click', 'a[data-trigger="scroll"]', function () {
            $headerNav.collapse('hide');
        });

        /* ------------------------------------------------------------------------- *
         * BANNER SECTION
         * ------------------------------------------------------------------------- */
        var $banner = $('.banner--section'),
            bannerMinHeight = function () {
                $banner.css('min-height', function () {
                    var $t = $(this);

                    return $t.find('.banner--content').outerHeight();
                });
            };

        bannerMinHeight(0);
        $wn.on('resize', bannerMinHeight);

        /* ------------------------------------------------------------------------- *
         * 404 SECTION
         * ------------------------------------------------------------------------- */
        var $f0f = $('.f0f--section'),
            f0fMinHeight = function () {
                $f0f.css('min-height', function () {
                    var $t = $(this);

                    return $t.find('.f0f--content').outerHeight();
                });
            };

        f0fMinHeight(0);
        $wn.on('resize', f0fMinHeight);

        /* ------------------------------------------------------------------------- *
         * Coming Soon SECTION
         * ------------------------------------------------------------------------- */
        var $comingSoon = $('.coming-soon--section'),
            comingSoonMinHeight = function () {
                $comingSoon.css('min-height', function () {
                    var $t = $(this);

                    return $t.find('.cs--content').outerHeight();
                });
            };

        comingSoonMinHeight(0);
        $wn.on('resize', comingSoonMinHeight);

        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        var $backToTop = $('#backToTop');

        $backToTop.on('click', 'a', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 1200);
        });
    });
    
    $wn.on('load', function () {
        /* ------------------------------------------------------------------------- *
         * BODY SCROLLING
         * ------------------------------------------------------------------------- */
        var isBodyScrolling = function () {
            if ( $wn.scrollTop() > 1 ) {
                $body.addClass('isScrolling');
            } else {
                $body.removeClass('isScrolling');
            }
        };

        isBodyScrolling();
        $wn.on('scroll', isBodyScrolling);

        /* ------------------------------------------------------------------------- *
         * ADJUST ROW
         * ------------------------------------------------------------------------- */
        var $adjustRow = $('.AdjustRow');
        
        if ( $adjustRow.length ) {
            $adjustRow.isotope({
                originLeft: isRTL ? false : true,
                layoutMode: 'fitRows'
            });

            $adjustRow.isotope('on', 'arrangeComplete', function () {
                // Recalculate parallax dimensions
                $wn.trigger('resize.px.parallax');
            });
        }

        /* ------------------------------------------------------------------------- *
         * Masonry ROW
         * ------------------------------------------------------------------------- */
        var $masonryRow = $('.MasonryRow');
        
        if ( $masonryRow.length ) {
            $masonryRow.isotope({
                originLeft: isRTL ? false : true
            });

            $masonryRow.isotope('on', 'arrangeComplete', function () {
                // Recalculate parallax dimensions
                $wn.trigger('resize.px.parallax');
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * PORTFOLIO ITEMS
         * ------------------------------------------------------------------------- */
        var $portfolioFilterMenu = $('.portfolio--filter-menu');

        $portfolioFilterMenu.on('click', 'li', function (e) {
            e.preventDefault();

            var $t = $(this),
                f = $t.data('target'),
                s = (f !== '*') ? '[data-cat~="'+ f +'"]' : f,
                $portfolioItems = $t.parents('.portfolio--filter-menu').siblings('.portfolio--items');

            if ( $portfolioItems.length ) {
                $portfolioItems.isotope({
                    filter: s
                });
            }
            
            $t.addClass('active').siblings().removeClass('active');
        });

        /* ------------------------------------------------------------------------- *
         * PRELOADER
         * ------------------------------------------------------------------------- */
        var $preloader = $('#preloader');

        if ( $preloader.length ) {
            $preloader.fadeOut('slow');
        }

        /* ------------------------------------------------------------------------- *
         * SCROLLING ANIMATIONS
         * ------------------------------------------------------------------------- */
        var $scrollRevealGroup = $('[data-scroll-reveal="group"]'),
            scrollReveal = '';

        if ( typeof ScrollReveal === "function" ) {
            scrollReveal = ScrollReveal();

            scrollReveal
                .reveal('[data-scroll-reveal="left"]', {origin: 'left', mobile: false, duration: 800})
                .reveal('[data-scroll-reveal="right"]', {origin: 'right', mobile: false, duration: 800})
                .reveal('[data-scroll-reveal="bottom"]', {duration: 800});

            $scrollRevealGroup.each(function () {
                scrollReveal.reveal($(this).children(), {duration: 800}, 150);
            });
        }
    });

})(jQuery);