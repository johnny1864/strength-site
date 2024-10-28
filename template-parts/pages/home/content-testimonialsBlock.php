<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('testimonials_block');

$quote_img     = get_theme_file_uri( 'assets/images/quote-outline.png' );
$quote_img_2x  = get_theme_file_uri( 'assets/images/quote-outline-2x.png' );

?>

<section class="testimonials-block">
	<div class="container" >
		<?php if(!empty($data['title'])) : ?>
			<h2 class="h1" data-aos="fade-up"><?php echo $data['title']; ?></h1>
		<?php endif; ?>
		<?php if(!empty($data['subtitle'])) : ?>
			<div class="h2 subtitle" data-aos="fade-up"><?php echo $data['subtitle']; ?></div>
		<?php endif; ?>
		<?php if(!empty($data['description_copy'])) : ?>
			<div class="copy" data-aos="fade-up"><?php echo $data['description_copy']; ?></div>
		<?php endif; ?>

		<div class="testimonial-slides" data-aos="fade-up">
			<?php foreach($data['testimonials'] as $index => $slide) : ?>
				<div>
					<div class="quote-container" style="background-image: url('<?php echo $slide['image']['url']; ?>');">
						
						<div class="quotemark">
							<img src="<?php echo $quote_img ?>"
								srcset="<?php echo $quote_img_2x ?> 2x"
								alt=""
							/>
						</div>

						<div class="copy-container">
						<?php if(!empty($slide['quote'])) : ?>
								<div class="testimonial-quote"><div class="centered-vertically"><?php echo $slide['quote']; ?></div></div>
							<?php endif; ?>
							<?php if(!empty($slide['attribution_name'])) : ?>
								<div class="attribution"><?php echo $slide['attribution_name']; ?></div>
							<?php endif; ?>
							<?php if(!empty($slide['attribution_title'])) : ?>
								<div class="attribution"><?php echo $slide['attribution_title']; ?></div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>



	</div>
</section>