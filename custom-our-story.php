<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 /** * Template Name: Our Story  */

get_header();
?>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/blocks/core', 'hero' ); ?>

                <?php get_template_part( 'template-parts/pages/our-story/text', 'basic' ); ?>

                <?php get_template_part( 'template-parts/pages/our-story/media', 'image-strip' ); ?>

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



