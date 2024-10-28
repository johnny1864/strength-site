<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('submission_page_options');
$overlay	= $data['overlay'];

?>

<section class="submission-page-section" style="background:url('<?php echo $data['background_image']['url']; ?>')">
	<div class="content-wrap">
		<div class="container-lg">

			<h1 class="submission-title"><?php echo $data['page_title']; ?></h1>

			<?php if(!empty($data['subtitle'])) : ?>
			<h2 class="submission-subtitle"><?php echo $data['subtitle']; ?></h2>
			<?php endif; ?>

			<?php if(!empty($data['description_copy'])) : ?>
			<div class="copy-wrapper">
                <?php echo $data['description_copy']; ?>
            </div>
			<?php endif; ?>

            <div class="form-wrap">
			<?php echo do_shortcode($data['form_shortcode']); ?>
            </div>

		</div>
	</div>

	<?php if( $overlay > 0 ) : ?>
 	   <div class="hrl-overlay" style="opacity: <?php echo $overlay / 100; ?>"></div>
    <?php endif; ?>


	</div>
</section>
