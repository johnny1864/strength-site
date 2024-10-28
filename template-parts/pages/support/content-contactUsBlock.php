<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('contact_us_fields');

?>

<section class="contact-us-section">
	<div class="container">

	<div class="copy-wrapper"><?php echo $data['above_form_copy']; ?></div>

	<?php echo do_shortcode($data['form_shortcode']); ?>


	</div>
</section>