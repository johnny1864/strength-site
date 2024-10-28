<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<style>


    .section {
        overflow: hidden;
        background-color: #1E1E1E;
        color: #fff;
        padding: 1.5rem 0;
    }

    .section-bg {
        padding: 3rem 2rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .section .h1 {
        font-size: 3.25rem;
        margin-bottom: 0.5em;
    }

    .section .slick-dots li {
        margin: 0 2px;
    }

    .section .slick-nav {
        position: relative;
    }

    .section .slick-dots {
        bottom: 0;
    }

    .section .slick-dots li,
    .section .slick-dots li button,
    .section .slick-dots li button::before,
    .section .slick-dots li.slick-active button::before {
        height: 2.5px;
        width: 50px;
    }

    .section .slick-dots li button::before{
        content: "";
        background-color: #ECECEC;
    }
    .section .slick-dots li.slick-active button::before {
        background-color: #004EF8;
    }

    .section .section-title {
        font-size: 1.75rem;
    }

    .preheading{
        display: block;
        font-size: 1rem;
        font-weight: 800;
        color: #fec02e;
        line-height: 1.2;
    }

    .section .section-title{
        color: #fff;
    }

    .imageSlider-section .slider{
        margin: 0 -1rem;
    }

    .imageSlider-section .slick-slide {
        margin: 0 1rem;
    }

    .textIconBlocks__blocks .row > * {
        padding-bottom: 1.5rem;
    }

    .textIconBlocks__block {
        padding: 0.5rem;
    }

    .textIconBlocks__blocks .block-title {
        color: #fec02e;
        margin: 1rem 0;
    }

    .textIconBlocks__blocks .block-text {
        line-height: 1.5;
    }

    .imageBlocks__block {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        width: 100%;
        aspect-ratio: 12/17 auto;
    }

    .imageBlocks__block .block-text {
        position: absolute;
        display: block;
        width: 65%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #004FE5;
        color: #fff;
        font-weight: 600;
        border-radius: 5px;
        padding: 0.75rem;
        text-align: center;
        z-index: 2;
    }

    .imageBlocks__block img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .imageSlider-section .cta-wrap img {
        max-width: 120px;
    }

    .preheading.cta-text {
        font-weight: 700;
        margin: 1rem 0;
    }

    .testimonials-cta-block {
        background-position: bottom center;
    }

    .testimonials-cta-block .testimonials__slider {
        padding: 1.5rem 0; 
        margin: -0.25rem;
    }

    .testimonials-cta-block .cta-block{
        padding: 1.5rem 2rem
    }

    .testimonial__slide {
        background-color: #373737;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }

    .testimonial__featured-text {
        font-size: 1rem;
        margin: 0;
    }

    .testimonials-cta-block .slick-slide {
        margin: 0 0.25rem;
    }

    @media screen and (min-width: 576px) {
        .textIconBlocks__block {
            border: .75px solid #505050;
            border: 0.5px solid #505050;
            border-radius: 10px;
            
        }

        .block-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        .preheading{
            font-size: calc(1.375rem + 1.5vw);
            color: #fec02e;
        }
    }

    @media screen and (min-width: 768px) {
       .imageSlider-section .row{
        flex-direction: row-reverse;
       }

       .imageBlocks__blocks {
            display: flex;
            justify-content: space-between;
        }

        .imageBlocks__block {
            width: calc(33% - 1rem);
            aspect-ratio: 5/7;
        }

        .imageBlocks__block .block-text {
            font-size: 1.3rem;
        }

        .testimonials-cta-block .cta-block {
            max-width: 650px;
            margin: 0 auto;
        }


    }

    @media screen and (min-width: 992px) {

        .section-bg {
            padding: 5rem 0;
        }

        .section .section-title {
            font-size: 3rem;
        }

        .section .h1 {
            font-size: 4rem;
        }

        .preheading.cta-text {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .imageSlider-section .h1 {
            margin: 1em 0;
        }

        .textIconBlocks__block {
            padding: 3rem 2rem 4rem;
        }

        
        .imageSlider-section .cta-wrap img {
            max-width: 145px;
        }

        .testimonials-cta-block .testimonials__slider {
            padding: 3rem 0;
            margin: 0 -0.75rem;
        }

        .featured-rating {
            font-weight: 800;
        }

        .testimonials-cta-block .slick-slide {
            margin: 0 0.75rem;
        }

        .testimonial__slide {
            padding: 1.5rem 1rem;
        }
    }

    @media screen and (min-width: 1200px) {
        .section .h1 {
            font-size: 5.5rem;
        }
    }

    @media screen and (max-width: 767px) {
        .section {
            text-align: center;
        }

        .hamburger--squeeze:not(.is-active) .hamburger-inner::after {
            width: 70%;
            right: 0;
        }

        header .col-menu {
            padding-top: 5px;
            top: 85px;
        }

        header .col-menu ul.menu {
            margin: 0;
            text-align: center;
            border-top: 1px solid #A3A3A3;
            margin-bottom: 2rem;
        }

        header .col-menu ul.menu .sub-menu {
            display: none;
        }

        header .col-menu ul.menu li {
            margin-bottom: 0;
            padding: 0.4rem;
            border-bottom: 0.25px solid #A3A3A3; 
        }

        header .col-menu .img-btn img {
            width: 120px;
            margin-right: 5px;
        }

        header .header-cta-box .preheading {
            margin: 0.5rem 0 1rem;
        }

        header .social-links {
            margin-top: 1.25rem;
        }

        header .social-links li a{
            display: inline-block;
            padding: 0 0.5rem;
        }

        .imageBlocks__blocks {
            max-width: 250px;
        }

        .imageBlocks__blocks .slick-slide {
            margin: 0 1.5rem;
        }

        .imageBlocks__blocks .slick-list {
            overflow: visible;
        }
    }
    
</style>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/blocks/core', 'hero' ); ?>

                <?php get_template_part( 'template-parts/pages/home/content', 'imageSliderHeading' ); ?>

                <?php get_template_part( 'template-parts/pages/home/content', 'textIconBlocks' ); ?>

                <?php get_template_part( 'template-parts/pages/home/content', 'imageSliderImageBG' ); ?>

                <?php get_template_part( 'template-parts/pages/home/content', 'imageBlocks' ); ?>

                <?php get_template_part( 'template-parts/pages/home/content', 'testimonials-cta-block' ); ?>

                <?php // get_template_part( 'template-parts/pages/home/content', 'trainingCards' ); ?>

                <?php // get_template_part( 'template-parts/pages/home/content', 'copyImageCols' ); ?>

                <?php // get_template_part( 'template-parts/pages/home/content', 'imageCopySlider' ); ?>

                <?php // get_template_part( 'template-parts/pages/home/content', 'testimonialsBlock' ); ?>
                
                <?php // get_template_part( 'template-parts/blocks/content', 'finalCTABlock' ); ?>

            <?php endwhile; ?>
        <?php endif; ?>

    <?php else : ?>

        <div class="pwd-protected">
            <div class="container py-5">

                <?php echo get_the_password_form(); ?>

            </div>
        </div>

    <?php endif; ?>

</main>

<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        jQuery(document).ready(function($){


            var ImageBlocksSlider = (function() {

            var  $section = $('.imageBlocks');
            var slider = $section.find('.imageBlocks__blocks');

                function initSlick() {
                    if (window.innerWidth < 768) { 
                        if (!slider.hasClass('slick-initialized')) {
                            slider.slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            infinite: false,
                            arrows: false,
                            dots: true,
                            appendDots: $section.find('.slick-nav')
                            });
                        }
                    } else {
                        if (slider.hasClass('slick-initialized')) {
                            slider.slick('unslick');
                        }
                    }
                }

            // Initialize the slider on document ready and window resize
            initSlick();
                $(window).on('resize', function() {
                    initSlick();
                });
            }())

            var ImageSlider = (function() {

                $section = $('.imageSlider-section');

                $section.each(function(){
                    $(this).find('.slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        infinite: false,
                        arrows: false,
                        dots: true
                    });
                });

            }());

            


            var TestimonialsSlider = (function(){

                var $section = $('.testimonials-cta-block');
                var testimonialsSlider = $section.find('.testimonials__slider');

                testimonialsSlider.slick({
                    mobileFirst: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    dots: true,
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 994,
                            settings: {
                                slidesToShow: 3
                            }
                        }
                    ]
                });

            }())

        });
    });
</script>

<?php get_footer(); ?>
