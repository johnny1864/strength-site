<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>

    <?php if ( ! post_password_required( $post ) ) : ?>

        <div class="container-lg">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>

                    <div class="content-wrap">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    <?php else : ?>

        <div class="pwd-protected">
            <div class="container py-5">

                <?php echo get_the_password_form(); ?>

            </div>
        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>

