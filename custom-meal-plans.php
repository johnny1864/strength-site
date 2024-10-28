<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 /* Template Name: Meal Plans  */

get_header();

$g_hero 	= get_field('page_hero');
$hero_image = $g_hero['image'];
$overlay 	= $g_hero['darken_image'] / 100;
$headline	= $g_hero['headline'];
$desc 		= $g_hero['description'];
$cta 		= get_field('meal_plan_cta_button');
$content	= get_field('page_content');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

        <?php if ( ! post_password_required( $post ) ) : ?>

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/pages/meal-plan/content', 'meal-plans' ); ?>

                <?php endwhile; ?>
            <?php endif; ?>

        <?php else : ?>

            <div class="pwd-protected">
                <div class="container py-5">

                    <?php echo get_the_password_form(); ?>

                </div>
            </div>

        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>
