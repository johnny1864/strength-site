<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$footer_data = get_field('footer_settings', 'option');


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
    <?php if ( !empty($footer_data['overflow_copy_image'])): ?>
        <div class="container">
            <img src="<?php echo $footer_data['overflow_copy_image']['url']; ?>" class="overflow-copy-image">
        </div>
    <?php endif; ?>

<footer>


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php if( !empty($footer_data["column_1"]["column_1_label"] ) ): ?>
                    <p class="footer-heading"> <?php echo $footer_data["column_1"]["column_1_label"] ?>
                <?php endif;?>
                <?php if( !empty($footer_data["column_1"]["column_1_links"] ) ): ?>
                    <div class="row"><div class="col-6">
                    <?php foreach($footer_data["column_1"]["column_1_links"] as $index => $link ) : ?>
                            <p><a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>"><?php echo $link['link']['title']; ?></a></p>

                            <?php if($index + 1 == ceil( count($footer_data["column_1"]["column_1_links"]) / 2 ) ): ?>
                                </div>
                                <div class="col-6">
                            <?php endif;?>
                    <?php endforeach; ?>
                    </div></div>
                <?php endif;?>
            </div>

            <div class="col-12 col-lg-4">
                <?php if( !empty($footer_data["column_2"]["column_2_label"] ) ): ?>
                    <p class="footer-heading"> <?php echo $footer_data["column_2"]["column_2_label"] ?>
                <?php endif;?>
                <?php if( !empty($footer_data["column_2"]["column_2_links"] ) ): ?>
                    <?php foreach($footer_data["column_2"]["column_2_links"] as $index => $link ) : ?>
                            <p><a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>"><?php echo $link['link']['title']; ?></a></p>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>

            <div class="col-12 col-lg-4">
                <?php if( !empty($footer_data["column_3"]["column_3_label"] ) ): ?>
                    <p class="footer-heading"> <?php echo $footer_data["column_3"]["column_3_label"] ?>
                <?php endif;?>
                <?php if( !empty($footer_data["column_3"]["column_3_copy"] ) ): ?>
                    <p class="footer-copy"> <?php echo $footer_data["column_3"]["column_3_copy"] ?>
                <?php endif;?>
                <?php if( !empty($cta_html) ) : ?>
                    <div class="cta-wrap">
                        <?php echo $cta_html; ?>
                    </div>
	        	<?php endif; ?>


            </div>


        </div>

        <?php if( !empty($footer_data["cta_button"]) ) : ?>
        <a href="<?php echo esc_attr($footer_data["cta_button"]["url"]); ?>" class="footer-cta" target="<?php echo $footer_data["cta_button"]["target"]; ?>"><?php echo $footer_data["cta_button"]["title"]; ?></a>
        <?php endif; ?>

        <div class="copyright">Copyright &copy; <?php echo date('Y'); ?> SFX StrengthFarm Training LLC, DBA STRENGTHAPP All Rights Reserved</div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
