<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('cta_block_with_image');

$image = $data['image']['url'] ?? null;
$text_options = $data['text_options'];

?>

<section class="cta-image-copy-columns">

	<div class="container">	
		<div class="row position-relative">

			<div class="col-12 col-lg-5" data-aos="fade-right">

				<?php if(!empty($image)) : ?>
				<div class="left-image">

                    <img src="<?php echo $image; ?>">

                </div>
				<?php endif;?> 

			</div>

			<div class="col-12 col-lg-7" data-aos="fade-left">

				<?php if(!empty($text_options['pre_title'])) : ?>
					<p class="pretitle"><?php echo $text_options['pre_title']; ?></p>
				<?php endif;?>

				<?php if(!empty($text_options['title'])) : ?>
					<h2 class="title"><?php echo $text_options['title']; ?></h2>
				<?php endif;?>

				<?php if(!empty($text_options['sub_title'])) : ?>
					<p class="subtitle"><?php echo $text_options['sub_title']; ?></p>
				<?php endif;?>

				<?php if(!empty($text_options['copy'])) : ?>
					<div class="copy">
                        <?php echo $text_options['copy']; ?>
                    </div>
				<?php endif;?>

				<?php if(!empty($text_options['cta_button_copy']) && !empty($text_options['cta_button_link'])) : ?>
					<a class="icc_cta" href="<?php echo $text_options['cta_button_link']; ?>"><?php echo $text_options['cta_button_copy']; ?></a>
				<?php endif; ?>

			</div>
		</div>
	</div>

</section>
