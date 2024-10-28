import 'bootstrap';
import AOS from 'aos';
import { debounce } from 'underscore'; // https://underscorejs.org
import 'slick-carousel';
import { ScrollHandler } from './includes/scroll-handler';
import inView from 'in-view';



// custom jquery below
jQuery(function ($) {
    'use strict';

    // FADE IN CONTENT ON PAGE LOAD
    setTimeout(function () {
        $('body').addClass('delayfade');
    }, 300);


    // HEADER TICKER TAPE
    // credit - https://codepen.io/grahamperich/pen/mgQejy
    if( $('#hrl-ticker-tape').length ) {
        const ticker = document.querySelector('#hrl-ticker-tape');
        const list = document.querySelector('#hrl-ticker-tape .ticker-list');

        let gg = false

        setTimeout(() => {
            gg = true

            while(gg) {

            }

        }, 2000);

        setTimeout(() => {

            gg = false

        }, 3000);
    }



    /*********************** SCROLL FUNCTIONS **********************/

    // header bg fade in, add back to top button on appropriate template
    const headerScroll = {
        selectors: {
            body: 'body'
        },

        config: {
            scrollHeader: 90
        },

        cache: {
            $body: null
        },

        init: function() {
            this.cache.$body = $(this.selectors.body);

            ScrollHandler.addCallback(this.onScroll, true);
        },

        onScroll: function(scrollY) {
            headerScroll.cache.$body
                .toggleClass('scrolled', scrollY >= headerScroll.config.scrollHeader);
        }
    };

    headerScroll.init();
    /******************** END SCROLL FUNCTIONS *******************/


    /******************************************************************/
    /**************************** HAMBURGER ***************************/
    /******************************************************************/


    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        // Do something else, like open/close menu
        $(".col-menu").toggleClass("d-none");
        $(".overlay-tint").toggleClass("d-none");
    });
    /************************* END HAMBURGER *************************/



    /****************************************************************/
    /**************************** SLIDERS ***************************/
    /****************************************************************/
    /* reference Slick Slider - https://kenwheeler.github.io/slick/ */


    var initializeCopySlidesBlock = function( $block ) {
        var $slider = $('.copy-slides');
        var $progressBar = $('.progress');

        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          var calc = ( (nextSlide+1) / (slick.slideCount) ) * 100;

          $progressBar
            .css('background-size', calc + '% 100%')
            .attr('aria-valuenow', calc );
        });

        $block.find('.copy-slides').slick({
			autoplay: true,
			autoplaySpeed: 7000,
			adaptiveHeight: true,
            lazyLoad: 'none',
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev">Back</button>',

	  });
    }

    var intializeTestimonialSlidesBlock = function ($block ) {
        $block.find('.testimonial-slides').slick({
			autoplay: true,
			autoplaySpeed: 7000,
			adaptiveHeight: false,
            lazyLoad: 'none',
            cssEase: 'linear',
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                  slidesToShow: 1,
                  centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                  slidesToScroll: 1
                  }
                }
               ]
	  });

    }

    var initializeQuoteSlidesBlock = function ($block) {
        $block.find('.quote-slides').slick({
			autoplay: true,
			autoplaySpeed: 7000,
			adaptiveHeight: false,
            lazyLoad: 'none',
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows : false,
	  });

    }

    // Initialize Slick Sliders on each block on page load (front end).
    $(function(){

        $('.imageCopySlides').each(function(){
            initializeCopySlidesBlock( $(this) );
        });

        $('.testimonials-block').each(function(){
            intializeTestimonialSlidesBlock( $(this) );
        });

        $('.slider-quote').each(function(){
            initializeQuoteSlidesBlock( $(this) );
        });

    });
    /************************** END SLIDERS *************************/


    var vSrc;
    $(".hero-block .video-play-btn i").on('click', ()=> {
        var $vIframe = $("#videoPopModal iframe");

        vSrc = $vIframe.prop("src");
        $vIframe.prop("src", "").prop("src", vSrc + "&autoPlay=true");
    });

    $("#videoPopModal").on("hide.bs.modal", function () {
        $(this).find("iframe").attr("src", vSrc);
    });

    /*************************************************************************/
    /********** ODOMETER / TICKING FUNCTIONALITY FOR STATISTIC COLS **********/
    /*************************************************************************/
    if( $('.hrl-counter').length ) {

        inView('.hrl-counter').on('enter', function() {

            $('.counter-value').each(function() {

                $(this).html( $(this).data('count') );

            });

        }).on('exit', function() {

            $('.counter-value').each(function() {

                $(this).html( '0' );

            });

        });
    }
    /*********************** END ODOMETER ***********************/

    /***************************************************************************/
    /****************** KEEP THESE FUNCTIONS BELOW NEAR BOTTOM *****************/
    /***************************************************************************/

    // Prevent text widows on targetted elements
    //https://matmartin.co.uk/blog/code-prevent-widows-and-orphans-web-layouts/
    $('.no-orphans, .no-child-orphans p, .no-child-orphans a').each(function() {
        var string = $(this).html();
        string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
        $(this).html(string);
    });


    // AOS (animate on scroll) INIT - https://michalsnik.github.io/aos/
    // (must call after any slick sliders to prevent conflicts)
    AOS.init();



});

