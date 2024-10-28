<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('final_cta_block');


//This is a fix for situations where the block is presented in a clone of another block
if(!empty($data['final_cta_block'])){
	$data = $data['final_cta_block'];
}

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
<section class="final-cta-block" data-aos="zoom-in-up">
	<div class="container">
	<?php if(!empty($data['title'])) : ?>
			<h2 class="h1"><?php echo $data['title']; ?></h1>
		<?php endif; ?>
		<?php if(!empty($data['description_copy'])) : ?>
			<div class="copy"><?php echo $data['description_copy']; ?></div>
		<?php endif; ?>
		<?php if(!empty($data['subtitle'])) : ?>
			<div class="h2 subtitle"><?php echo $data['subtitle']; ?></div>
		<?php endif; ?>

		<?php if( !empty($cta_html) ) : ?>
			<div class="cta-wrap">
				<?php echo $cta_html; ?>
			</div>
		<?php endif; ?>

	</div>
</section>