<?php /** * Template Name: Submission Page  */ ?>

<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/blocks/core', 'hero' ); ?>
                <?php get_template_part( 'template-parts/pages/submission/content', 'pageBlock' ); ?>

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
