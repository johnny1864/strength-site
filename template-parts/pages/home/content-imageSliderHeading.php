<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data = get_field('image_slider_with_header');

$section_content = $data['section_content'];
$section_title = $data['heading'];
$sec_preheading  = $section_content['preheading'];
$sec_heading  = $section_content['heading'];
$sec_heading_text_block = $section_content['text_block'];
$sec_CTA_text =  $section_content['cta_text'];
$slider_images = $data['slider_images'];


/* CTA  */
$g_apps         = get_field('general_app_buttons', 'option');

$apple_url      = $g_apps['app_store_url'] ?? null;
$apple_img      = get_theme_file_uri( 'assets/images/logo-app-store.png' );
$apple_img_2x   = get_theme_file_uri( 'assets/images/logo-app-store-2x.png' );

$google_url     = $g_apps['google_play_url'] ?? null;
$google_img     = get_theme_file_uri( 'assets/images/logo-google-play.png' );
$google_img_2x  = get_theme_file_uri( 'assets/images/logo-google-play-2x.png' );

$cta_html = "";

if( !empty($apple_url) ) {

	$cta_html   .= '
		<span class="btn-wrap">
			<a href="'.$apple_url.'" target="_blank" class="img-btn">
				<img src="'.$apple_img_2x.'"
					srcset="'.$apple_img_2x.' 2x"
					alt="Apple App Store Logo"
				/>
			</a>
		</span>
	';

}

if( !empty($google_url) ) {

	$cta_html   .= '
		<span class="btn-wrap">
			<a href="'.$google_url.'" target="_blank" class="img-btn">
				<img src="'.$google_img_2x.'"
					srcset="'.$google_img_2x.' 2x"
					alt="Google Play Store Logo"
				/>
			</a>
		</span>
	';

}

?>

<style>

.imageSliderHeading .section-header__text {
    padding-right: 5rem;
}

@media screen and (max-width: 767px){
    .imageSliderHeading__content {
        display: flex;
        flex-direction: column-reverse;
    }

    .cta-box {
        margin-bottom: 1rem;
    }

    .cta-box .preheading {
        margin-top: 0;
    }

    .imageSliderHeading__content {
        margin-bottom: 0.75rem;
    }

}
</style>

<section 
    class="imageSliderHeading imageSlider-section section section-bg"
    <?php if( !empty($bg_image) ) : ?>
    style="background-image: url(<?php echo $bg_image['url']; ?>)"
    <?php endif; ?>
>
    <div class="container">
        <?php if( !empty($section_title) ) : ?>
            <h2 data-aos="fade-up" class="h1 text-center">
            <?php echo $section_title; ?>
            </h2>
        <?php endif; ?>
        <div class="row">
            
            <div class="imageSliderHeading__content col-md-8" data-aos="fade-left" data-aos-delay="50" >

                <div class="heading-box"> 
                    <?php if( !empty($sec_preheading) ) : ?>
                        <span class="preheading">
                            <?php echo $sec_preheading; ?>
                        </span>
                    <?php endif; ?>

                    <?php if( !empty($sec_heading) ) : ?>
                        <h2 class="section-title">
                            <?php echo $sec_heading; ?>
                        </h2>
                    <?php endif; ?>

                    <div class="section-header__text d-none d-md-block">
                    <?php echo $sec_heading_text_block; ?>
                    </div>
                </div>

                <div class="cta-box"> 
                    <?php if( !empty($sec_CTA_text) ) : ?>
                        <span class="preheading cta-text">
                            <?php echo $sec_CTA_text; ?>
                        </span>
                    <?php endif; ?>

                    <?php if( !empty($cta_html) && $section_content['add_app_buttons'] ) : ?>
                        <div class="cta-wrap">
                            <?php echo $cta_html; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="imageSliderHeading__images slider col-md-4" data-aos="fade-right" data-aos-delay="100" >
                <?php foreach( $slider_images as $image ): ?>
                    <figure>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </figure>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>