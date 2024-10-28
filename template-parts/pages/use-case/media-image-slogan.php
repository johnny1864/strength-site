<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('slogan_with_background_image_block');

$bg_media = $data['image_options']['background_image']['sizes']['2048x2048'] ?? null;
$overlay = $data['image_options']['dark_overlay'];

?>

<section class="media-image-slogan">

	<div class="slogan" data-aos="fade-up"><h2 class="h1 headline"><?php echo $data['slogan']; ?></h2></div>

	<?php if( !empty($bg_media) ) : ?>
    	<div class="background" style="background-image: url('<?php echo $bg_media; ?>');"></div>
    <?php endif; ?>
	<?php if( $overlay > 0 ) : ?>
    	<div class="hrl-overlay" style="opacity: <?php echo $overlay / 100; ?>"></div>
    <?php endif; ?>


</section>
