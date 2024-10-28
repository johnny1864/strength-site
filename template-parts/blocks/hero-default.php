<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = $args['data'];

// hero background options
$g_bg       = $data['background_options'];
$bg_style   = $g_bg['background_style'];
$bg_media   = null;
$overlay    = $g_bg['overlay'];
$video_pop  = $g_bg['add_video_pop_up'] ?? false;

if( $bg_style == 'image' ) {

    $bg_media = $g_bg['image']['sizes']['2048x2048'] ?? null;

}

if( $bg_style == 'video' ) {

    $bg_media = $g_bg['video'] ?? null;

}
// end hero background options

// text options
$g_text     = $data['text_options'];
$txt_align  = $g_text['text_align'];
$pretext    = $g_text['pretext'];
$title      = $g_text['title'];
$subtitle   = $g_text['subtitle'];
$text       = $g_text['text'];
$cta_style  = $g_text['cta_style'];
$cta_html   = '';

if( $cta_style == 'apps' ) {

    $g_apps         = get_field('general_app_buttons', 'option');

    $apple_url      = $g_apps['app_store_url'] ?? null;
    $apple_img      = get_theme_file_uri( 'assets/images/logo-app-store.png' );
    $apple_img_2x   = get_theme_file_uri( 'assets/images/logo-app-store-2x.png' );

    $google_url     = $g_apps['google_play_url'] ?? null;
    $google_img     = get_theme_file_uri( 'assets/images/logo-google-play.png' );
    $google_img_2x  = get_theme_file_uri( 'assets/images/logo-google-play-2x.png' );

    if( !empty($apple_url) ) {

        $cta_html   .= '
            <span class="btn-wrap">
                <a href="'.$apple_url.'" target="_blank" class="img-btn">
                    <img src="'.$apple_img.'"
                        srcset="'.$apple_img_2x.' 2x"
                        alt="Apple App Store Logo"
                    />
                </a>
            </span>
        ';

    }

    if( !empty($google_url) ) {

        $cta_html   .= '
            <span class="btn-wrap">
                <a href="'.$google_url.'" target="_blank" class="img-btn">
                    <img src="'.$google_img.'"
                        srcset="'.$google_img_2x.' 2x"
                        alt="Google Play Store Logo"
                    />
                </a>
            </span>
        ';

    }
}

if( $cta_style == 'standard' ) {
    $cta        = $g_text['standard_cta_button'];
    $cta_html   = '
        <span class="btn-wrap">
            <a href="'.esc_attr($cta['url']).'" target="'.$cta['target'].'" class="btn btn-primary">
                '.$cta['title'].'
            </a>
        </span>
    ';
}
// end text options


// overlay box options
if($data['overlay_boxes']) {
    $g_boxes = $data['overlay_box_options']['overlay_boxes'];
    $pre_overlay_text = $data['overlay_box_options']['pre-overlay_text'];
}

?>

<div class="hero-innerwrap">

    <?php
        if(
            !empty($pretext) ||
            !empty($title) ||
            !empty($subtitle) ||
            !empty($text) ||
            !empty($cta_html)
        ) :
    ?>
    <div class="content-wrap">
        <div class="container-lg">

            <div class="text-wrap text-align-<?php echo $txt_align; ?>">
                <?php if( !empty($pretext) ) : ?>
                <p class="pretext"><?php echo $pretext; ?></p>
                <?php endif; ?>

                <?php if( !empty($title) ) : ?>
                <h1 class="hero-title"><?php echo $title; ?></h1>
                <?php endif; ?>

                <?php if( !empty($subtitle) ) : ?>
                <p class="subtitle lead"><?php echo $subtitle; ?></p>
                <?php endif; ?>

                <?php if( !empty($text) ) : ?>
                <div class="text-content lead">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>

                <?php if(!empty($pre_overlay_text) ) : ?>
                <div class="text-content lead pre-overlay-text">
                    <?php echo $pre_overlay_text; ?>
                </div>
                <?php endif; ?>

                <?php if($data['overlay_boxes']) : ?>
                    <div class="d-flex overlay-box-container">
                        <?php foreach($g_boxes as $index => $box) : ?>
                            <div class="overlay-box">

                                <?php if( !empty($box['title']) ) : ?>
                                <div class="overlay-title"><?php echo $box['title']; ?></div>
                                <?php endif;?>

                                <?php if( !empty($box['copy']) ) : ?>
                                <div class="overlay-copy"><?php echo $box['copy']; ?></div>
                                <?php endif;?>

                                <div class="video-play-btn">
                                    <i class="fa-regular fa-circle-play"></i>
                                </div>

                                <?php if( !empty($box['icon'] ) ) : ?>
                                <img src="<?php echo esc_url($box['icon']['url']); ?>" alt="<?php echo esc_attr($box['icon']['alt']); ?>" class="overlay-icon">
                                <?php endif; ?>

                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if( !empty($video_pop) ) : ?>
                <div class="video-play-btn">
                    <i class="fa-light fa-play" data-bs-toggle="modal" data-bs-target="#videoPopModal"></i>
                </div>
                <?php endif; ?>

                <?php if( !empty($cta_html) ) : ?>
                <div class="cta-wrap">
                    <?php echo $cta_html; ?>
                </div>
                <?php endif; ?>


            </div>

        </div>
    </div>
    <?php endif; ?>

    <?php if( $bg_style == 'image' && !empty($bg_media) ) : ?>
    <div class="bg-media style-image" style="background-image: url('<?php echo $bg_media; ?>');"></div>
    <?php endif; ?>

    <?php if( $bg_style == 'video' && !empty($bg_media) ) : ?>
    <div class="bg-media style-video">
        <iframe class="sproutvideo-player" src="<?php echo $bg_media; ?>?autoPlay=true&showControls=false&loop=true&volume=0&background=true" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php endif; ?>

    <?php if( $overlay > 0 ) : ?>
    <div class="hrl-overlay" style="opacity: <?php echo $overlay / 100; ?>"></div>
    <?php endif; ?>

</div>


<?php if( !empty($video_pop) ) : ?>
<div class="modal fade" id="videoPopModal" tabindex="-1" aria-labelledby="videoPopModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="innerwrap">

                <button type="button" class="pop-closer" data-bs-dismiss="modal" aria-label="Close Video Pop Up"><i class="fa-regular fa-xmark"></i></button>

                <div class="modal-body">
                    <div style="position:relative;height:0;padding-bottom:56.25%"><iframe class='sproutvideo-player' src='<?php echo $bg_media; ?>?endFrame=posterFrame&playerColor=febe10&playerTheme=light&type=hd&transparent=true&showControls=true&playsinline=true' style='position:absolute;width:100%;height:100%;left:0;top:0' frameborder='0' allowfullscreen allow="autoplay"></iframe></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>
