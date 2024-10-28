<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('image_strip');

$banner     = $data['image_banner'];

if( !empty($banner) ) :
?>
<section class="media-image-strip" data-aos="fade-up">

    <?php echo wp_get_attachment_image( $banner['ID'], 'full' ); ?>

</section>
<?php endif; ?>
