<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('three_column_text_block');


?>

<section class="text-three-column-percentages">

	<div class="container">
		<?php if(!empty($data['label'])): ?>
			<div class="section-label" data-aos="fade-up"><?php echo $data['label']; ?></div>
		<?php endif; ?>

		<div class="d-flex flex-wrap percentage-table hrl-counter">
			<div class="col-12 col-md-4 percentage-column" data-aos="fade-up">
				<?php if(!empty($data['left_column']['percentage'])): ?>
					<div class="percentage"><span class="odometer counter-value" data-count="<?php echo $data['left_column']['percentage']; ?>">0</span>%
						<?php if(!empty($data['left_column']['copy'])): ?>
							<div class="copy"><?php echo $data['left_column']['copy']; ?></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-12 col-md-4 percentage-column" data-aos="fade-up" data-aos-delay="100">
				<?php if(!empty($data['center_column']['percentage'])): ?>
					<div class="percentage"><span class="odometer counter-value" data-count="<?php echo $data['center_column']['percentage']; ?>">0</span>%
						<?php if(!empty($data['center_column']['copy'])): ?>
							<div class="copy"><?php echo $data['center_column']['copy']; ?></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-12 col-md-4 percentage-column" data-aos="fade-up" data-aos-delay="200">
				<?php if(!empty($data['right_column']['percentage'])): ?>
					<div class="percentage"><span class="odometer counter-value" data-count="<?php echo $data['right_column']['percentage']; ?>">0</span>%
						<?php if(!empty($data['right_column']['copy'])): ?>
							<div class="copy"><?php echo $data['right_column']['copy']; ?></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

		</div>

	</div>
</section>