<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('copy_image_block_fields');

?>

<section class="copyImageCols">
	<div class="content-container container">
		<div class="row">

			<div class="col-12 col-lg-7 order-2 order-lg-1 left-column" data-aos="fade-right">
				<?php if(!empty($data['text_options']['title'])) : ?>
					<h2 class="h1"><?php echo $data['text_options']['title'];?></h2>
				<?php endif; ?>
				<?php if(!empty($data['text_options']['subtitle'])) : ?>
					<div class="subtitle h2"><?php echo $data['text_options']['subtitle'];?></div>
				<?php endif; ?>
				<?php if(!empty($data['text_options']['copy'])) : ?>
					<div class="copy"><?php echo $data['text_options']['copy'];?></div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-5 order-1 order-lg-2" data-aos="fade-left">
				<?php if(!empty($data['image_options']['image'])) : ?>
					<div class="phone-image"><img src="<?php echo $data['image_options']['image']['url']; ?>"></div>
				<?php endif;?> 
			</div>
		</div>
	</div>

    <div class="hrl-overlay"></div>
</section>
