<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('hero_fields');
$hero_style = $data['hero_style'];

if( $hero_style !== 'hero-disabled' ) :
?>

    <section class="hero-block style-<?php echo $hero_style; ?>">

        <?php
        switch( $hero_style ) :

            case 'hero-default' :
                get_template_part(
                    'template-parts/blocks/hero', 'default',
                    ['data' => $data['hero_default']]
                );
                break;

        endswitch;
        ?>

    </section>

<?php endif; ?>
