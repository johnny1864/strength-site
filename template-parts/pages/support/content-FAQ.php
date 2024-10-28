<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('faq_fields');

?>

<section class="faq-section">
	<div class="container">
		<?php if(!empty($data['faq_title'])) : ?>
			<h2 class="h1"><?php echo $data['faq_title'];?></h2>
		<?php endif; ?>
		<?php if(!empty($data['faq_subtitle'])) : ?>
			<div class="subtitle h2"><?php echo $data['faq_subtitle'];?></div>
		<?php endif; ?>
		<?php if(!empty($data['faq_description'])) : ?>
			<div class="copy"><?php echo $data['faq_description']; ?></div>
		<?php endif; ?>

		<div class="faq-accordion accordion" id="faq-accordion">
			<?php foreach($data["faqs"] as $index => $thisFaq) : ?>
				<div class="accordion-item">
					<div class="accordion-header" id="fa-heading<?php echo $index; ?>">
						<button class="accordion-button<?php if($index !== 0 ) { echo " collapsed"; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#fa-collapse<?php echo $index; ?>" aria-expanded="<?php if($index === 0 ) { echo "true"; } else { echo "false"; } ?>" aria-controls="fa-collapse<?php echo $index; ?>">
							<span><?php echo $thisFaq['question']; ?></span>
						</button>
					</div>
					<div id="fa-collapse<?php echo $index; ?>" class="accordion-collapse collapse<?php if($index === 0){ echo " show"; } ?>" aria-labelledby="fa-heading<?php echo $index; ?>" data-bs-parent="#faq-accordion">
						<div class="accordion-body">
							<?php echo $thisFaq['answer']; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>

	</div>
</section>
