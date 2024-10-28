<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('text_with_list_block');

?>

<section class="text-list-block">

	<div class="container">

		<?php if(!empty($data['section_title_image']['url'])): ?>
		<img src="<?php echo $data['section_title_image']['url']; ?>" class="section-title-image" data-aos="fade-up">
		<?php endif; ?>

		<?php if(!empty($data['section_description'])): ?>
		<div class="section-description" data-aos="fade-up">
            <p><?php echo $data['section_description']; ?></p>
        </div>
		<?php endif; ?>

		<?php foreach($data['list'] as $index => $list_item) : ?>
			<div class="d-flex justify-content-space-betwen list-item" data-aos="fade-up">
				<p class="list-copy"><?php echo $list_item['copy']; ?></p>
				<p class="right-copy"><?php echo $list_item['right_copy']; ?></p>
			</div>
		<?php endforeach; ?>

	</div>
</section>
