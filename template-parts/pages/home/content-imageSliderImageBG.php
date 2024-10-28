<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data = get_field('image_slider_with_image_bg');

$section_content = $data['section_content'];
$sec_preheading  = $section_content['preheading'];
$sec_heading  = $section_content['heading'];
$sec_heading_text_block = $section_content['text_block'];
$bg_image = $data['background_image'];
$slider_images = $data['slider_images'];
?>

<section 
    class="imageSliderImageBG imageSlider-section section section-bg"
    <?php if( !empty($bg_image) ) : ?>
    style="background-image: url(<?php echo $bg_image['url']; ?>)"
    <?php endif; ?>
>
    <div class="container">
        <div class="row align-items-center">
            
            <div class="imageSliderImageBG__content col-md-8" data-aos="fade-left" >
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

                <div class="section-header__text">
                <?php echo $sec_heading_text_block; ?>
                </div>
            </div>

            <div class="imageSliderImageBG__images slider col-md-4" data-aos="fade-right">
                <?php foreach( $slider_images as $image ): ?>
                    <figure>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </figure>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>