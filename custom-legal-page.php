<?php /** * Template Name: Legal Page  */ ?>

<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$page_content       = get_field('page_content');

get_header();
?>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/blocks/core', 'hero' ); ?>

                <div class="container hero-spacer">
                    <h1><?php echo get_the_title(); ?></h1>
                    <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                    <div><?php echo $page_content; ?></div>



                </div>

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
