<?php
/**
 * Template part for displaying meal plan page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SFX_Athletes
 */

$g_hero 	= get_field('page_hero');
$hero_image = $g_hero['image'];
$overlay 	= $g_hero['darken_image'] / 100;
$headline	= $g_hero['headline'];
$desc 		= $g_hero['description'];
$cta 		= get_field('meal_plan_cta_button');
$content	= get_field('page_content');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( !empty($hero_image) || !empty($headline) || !empty($desc) ) : ?>
	<section class="menu-plan-hero">

		<?php if( !empty($hero_image) ) : ?>
		<div class="img-wrap">
			<?php echo wp_get_attachment_image( $hero_image['ID'], 'full' ); ?>

			<div class="overlay" style="opacity: <?php echo $overlay; ?>"></div>
		</div>
		<?php endif; ?>

		<?php if( !empty($headline) || !empty($desc) ) : ?>
		<div class="text-wrap">
			<div class="container-lg">

				<?php if( !empty($headline) ) : ?>
				<h1 class="headline"><?php echo $headline; ?></h1>
				<?php endif; ?>

				<?php if( !empty($desc) ) : ?>
				<div class="description">
					<?php echo $desc; ?>
				</div>
				<?php endif; ?>

			</div>
		</div>
		<?php endif; ?>


	</section>
	<?php endif; ?>

	<section class="meal-plan-page-content">

		<div class="bg-top"></div>

		<div class="container-lg">
			<div class="row">

				<div class="col-md-3 nav-col">
					<div class="menu">

						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-meal-plans',
							'menu_id'        => 'meal-plan-menu',
						) );
						?>

					</div>
				</div>

				<div class="col-md-9 main-content-col">
					<div class="innerwrap">

						<h2 class="page-title"><?php echo get_the_title(); ?></h2>

						<?php if( !empty($cta) ) : ?>
						<div class="cta-wrap">
							<a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="btn btn-primary"><?php echo $cta['title']; ?></a>
						</div>
						<?php endif; ?>

						<div class="user-content">

							<?php echo $content; ?>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="bg-bottom"></div>

	</section>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'sfx-athletes' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
