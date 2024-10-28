<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('image_copy_slides_fields');

?>

<section class="imageCopySlides">
	<div class="container">
		<div class="row position-relative">
			<?php if(!empty($data['section_title_image'])) : ?>
				<div class="position-absolute section-title" style="background-image: url('<?php echo $data['section_title_image']['url']; ?>');"></div>
			<?php endif; ?>

			<div class="col-12 col-lg-5" data-aos="fade-right">
			<?php if(!empty($data['image_options']['image'])) : ?>
					<div class="phone-image"><img src="<?php echo $data['image_options']['image']['url']; ?>"></div>
				<?php endif;?> 
			</div>
			<div class="col-12 col-lg-5 position-relative" data-aos="fade-left">
				<div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
			    	<span class="slider__label sr-only"></span>
			  	</div>

				<div class="copy-slides">
					<?php foreach($data['slides'] as $index => $slide) : ?>
						<div>
						<?php if(!empty($slide['slide_title'])) : ?>
								<div class="slide-title"><?php echo $slide['slide_title']; ?></div>
							<?php endif; ?>
							<?php if(!empty($slide['slide_headline'])) : ?>
								<div class="slide-headline h2"><?php echo $slide['slide_headline']; ?></div>
							<?php endif; ?>
							<?php if(!empty($slide['slide_copy'])) : ?>
								<div class="slide-copy"><?php echo $slide['slide_copy']; ?></div>
							<?php endif; ?>

						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

</section>
