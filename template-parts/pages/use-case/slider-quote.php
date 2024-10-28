<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('quote_slider');

$quote_img     = get_theme_file_uri( 'assets/images/quote-outline.png' );
$quote_img_2x  = get_theme_file_uri( 'assets/images/quote-outline-2x.png' );


?>

<section class="slider-quote">

	<div class="container" data-aos="fade-up">

		<div class="quote-slides">
			<?php foreach($data as $index => $quote_slide) : ?>
				<div>
					<div class="d-flex flex-wrap flex-lg-nowrap">
						<div class="quote-portrait" style='background:url(<?php echo $quote_slide['portrait']['url']?>)'> </div>

						<div class="quote-main">
						<?php if(!empty($quote_slide['quote_options']['quote'])) : ?>
								<div class="quote-text">&quot;<?php echo $quote_slide['quote_options']['quote'] ?>&quot;</div>
							<?php endif; ?>
							<?php if(!empty($quote_slide['quote_options']['attribution_name'])) : ?>
								<div class="attribution"><?php echo $quote_slide['quote_options']['attribution_name'] ?></div>
							<?php endif; ?>
							<?php if(!empty($quote_slide['quote_options']['attribution_title'])) : ?>
								<div class="attribution"><?php echo $quote_slide['quote_options']['attribution_title'] ?></div>
							<?php endif; ?>

							<div class="quotemark">
							<img src="<?php echo $quote_img ?>"
								srcset="<?php echo $quote_img_2x ?> 2x"
								alt=""
							/>
						</div>

						</div>

					</div>
				</div>
			<?php endforeach; ?>
		</div>


	</div>
</section>