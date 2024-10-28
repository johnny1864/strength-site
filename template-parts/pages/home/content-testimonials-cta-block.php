<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data = get_field('testimonials_with_cta_block');


$section_header = $data['section_header'];
$bg_image = $data['background_image'];
$sec_preheading  = $section_header['preheading'];
$sec_heading  = $section_header['heading'];
$sec_heading_featured_rating = $section_header['featured_rating'];
$sec_heading_rating_author = $section_header['featured_rating_author'];
$sec_heading_copy = $section_header['copy'];

$testimonials = $data['testimonials'];

$cta_block = $data['cta_block'];
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

<section 
class="section section-bg testimonials-cta-block"
<?php if( !empty($bg_image) ) : ?>
style="background-image: url(<?php echo $bg_image['url']; ?>)"
<?php endif; ?>
>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <?php if( !empty($sec_preheading) ) : ?>
                    <span data-aos="fade-up" data-aos-delay='0' class="preheading">
                        <?php echo $sec_preheading; ?>
                    </span>
                <?php endif; ?>

                <?php if( !empty($sec_heading) ) : ?>
                    <h2 class="section-title" data-aos="fade-up" data-aos-delay='0'>
                        <?php echo $sec_heading; ?>
                    </h2>
                <?php endif; ?>

                <?php if( !empty($sec_heading_featured_rating) ) : ?>
                    <div class="featured-rating" data-aos="fade-up" >
                        <?php echo $sec_heading_featured_rating; ?>
                    </div>
                <?php endif; ?>

                <?php if( !empty($sec_heading_rating_author) ) : ?>
                    <div data-aos="fade-up"  class="">
                        <?php echo $sec_heading_rating_author; ?>
                    </div>
                <?php endif; ?>

                <div class="section-header__text" data-aos="fade-up" >
                <?php echo $sec_heading_copy; ?>
                </div>

            </div>

        </div>

        <div class="testimonials__slider" data-aos="fade-up" >
          <?php 
            foreach($testimonials as $testimonial) : 

                $num_stars = intval($testimonial['stars']);
          ?>

            <div class="testimonial__slide">
                <h6 class="testimonial__featured-text"><?php echo $testimonial['featured_text']; ?></h6>
                <?php if ($num_stars > 0) : ?>
                    <span class="testimonial__stars <?php echo $testimonial['stars'] . $num_stars; ?>">
                        <?php for($i = 0; $i<$num_stars; $i++) : ?>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.684 0.0229492L11.0964 5.82308L17.3581 6.32507L12.5874 10.4117L14.0449 16.5221L8.684 13.2477L3.32309 16.5221L4.78064 10.4117L0.00986671 6.32507L6.27159 5.82308L8.684 0.0229492Z" fill="#FEC02E"/>
                            </svg>
                        <?php endfor; ?>
                    </span>
                <?php endif; ?>
                <div class="testimonial__slide-quote">
                    <?php echo $testimonial['quote']; ?>
                </div>
            </div>

          <?php endforeach; ?>
        </div>
    </div>

    <div class=" cta-block" >
        <div class="container text-center">
            <?php if(!empty($cta_block['preheading'])) : ?>
                <span class="preheading" data-aos="fade-up"><?php echo $cta_block['preheading']; ?></span>
            <?php endif; ?>
            <?php if(!empty($cta_block['heading'])) : ?>
                <h2 class="section-title" data-aos="fade-up"><?php echo $cta_block['heading']; ?></h1>
            <?php endif; ?>
            
            <?php if(!empty($cta_block['cta_text'])) : ?>
                <div class="copy" data-aos="fade-up"><?php echo $cta_block['cta_text']; ?></div>
            <?php endif; ?>

            <?php if( !empty($cta_html) ) : ?>
			<div class="cta-wrap">
				<?php echo $cta_html; ?>
			</div>
		<?php endif; ?>
        </div>
    </div>
</section>