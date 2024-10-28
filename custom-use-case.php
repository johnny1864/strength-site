<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 /** * Template Name: Use Case  */

get_header();
?>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/blocks/core', 'hero' ); ?>

                <?php get_template_part( 'template-parts/pages/use-case/text', 'two-column'); ?>

                <?php get_template_part( 'template-parts/pages/use-case/media', 'image-slogan'); ?>

                <?php get_template_part( 'template-parts/pages/use-case/cta', 'image-copy-columns' ); ?>

                <?php get_template_part( 'template-parts/pages/use-case/text', 'list-block' ); ?>

                <?php get_template_part( 'template-parts/pages/use-case/text', 'three-column-percentages' ); ?>

                <?php get_template_part( 'template-parts/pages/use-case/slider', 'quote' ); ?>

                <?php get_template_part( 'template-parts/blocks/content', 'finalCTABlock' ); ?>

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

<?php get_footer(); ?>
