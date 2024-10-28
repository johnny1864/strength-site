<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data           = get_field('text_block');

$section_title  = $data['section_title'];
$text           = $data['text'];

if( !empty($section_title) || !empty($text) ) :
?>

<section class="text-basic">
	<div class="container">
        <div class="innerwrap" data-aos="fade-up">

            <?php if( !empty($section_title) ) : ?>
            <h2 class="section-title"><?php echo $section_title; ?></h2>
            <?php endif; ?>

            <?php if( !empty($text) ) : ?>
            <div class="text">
                <?php echo $text; ?>
            </div>
            <?php endif; ?>

        </div>
	</div>
</section>
<?php endif; ?>
