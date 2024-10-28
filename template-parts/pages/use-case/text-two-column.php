<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('two_column_text_block');
$left_column = $data['left_column'];
$right_column = $data['right_column'];

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

<section class="two_column_text_block" >
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 left-column" data-aos="fade-right">
				<?php if(!empty($left_column['title'])) : ?>
					<h2 class="h1"><?php echo $left_column['title'];?></h2>
				<?php endif; ?>
				<?php if(!empty($left_column['subtitle'])) : ?>
					<div class="subtitle h2"><?php echo $left_column['subtitle'];?></div>
				<?php endif; ?>
				<?php if(!empty($left_column['copy'])) : ?>
					<div class="copy"><?php echo$left_column['copy'];?></div>
				<?php endif; ?>
				<?php if( !empty($cta_html) ) : ?>
					<div class="cta-wrap">
						<?php echo $cta_html; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-12 col-lg-6 right-column" data-aos="fade-left">
				<?php if(!empty($right_column['label'])) : ?>
					<div class="h2 label"><?php echo $right_column['label'];?></div>
				<?php endif; ?>
				<?php foreach($right_column['text_blocks'] as $index => $text_block) : ?>
					<div class="right-column-block">
					<?php if(!empty($text_block['heading'])) : ?>
							<div class="tb_heading"><?php echo $text_block['heading']; ?></div>
						<?php endif; ?>
						<?php if(!empty($text_block['copy'])) : ?>
							<div class="tb_copy"><?php echo $text_block['copy']; ?></div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
