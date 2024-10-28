<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$cta_html = '';

$g_apps         = get_field('general_app_buttons', 'option');

$apple_url      = $g_apps['app_store_url'] ?? null;
$apple_img      = get_theme_file_uri( 'assets/images/logo-app-store.png' );
$apple_img_2x   = get_theme_file_uri( 'assets/images/logo-app-store-2x.png' );

$google_url     = $g_apps['google_play_url'] ?? null;
$google_img     = get_theme_file_uri( 'assets/images/logo-google-play.png' );
$google_img_2x  = get_theme_file_uri( 'assets/images/logo-google-play-2x.png' );

if( !empty($apple_url) ) {

    $cta_html   .= '
        <span class="btn-wrap d-md-none">
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
        <span class="btn-wrap d-md-none">
            <a href="'.$google_url.'" target="_blank" class="img-btn">
                <img src="'.$google_img.'"
                    srcset="'.$google_img_2x.' 2x"
                    alt="Google Play Store Logo"
                />
            </a>
        </span>
    ';

}

?>
<!DOCTYPE html>
<html class="no-js<?php echo WP_DEBUG ? ' debug' : ''; ?>" <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo get_theme_file_uri( '/assets/vendor/modernizr-min.js' ); ?>"></script>

    <?php // FAVICONS ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/site.webmanifest">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#104fe5">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#104fe5">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#104fe5">


    <?php // analytics code & other misc. header scripts/code can go here ?>
    <?php get_template_part('template-parts/header', 'scripts'); ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part( 'template-parts/header', 'ticker-tape' ); ?>
    <div class="d-none d-md-none overlay-tint"></div> <!-- This is to tint out the rest of the site when the mobile menu is active -->

    <header>
        <div class="container-lg">
            <div class="row align-items-center">

                <div class="col-logo col-8 col-md-2 col-lg-3">

                    <a href="/" class="logo-link">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/logo-strengthapp.png' ); ?>"
                            srcset="<?php echo get_theme_file_uri( 'assets/images/logo-strengthapp-2x.png' ); ?> 2x"
                            alt="Strength App Logo"
                        />
                    </a>

                </div>

                <div class="col-hamburger col-4 d-md-none">
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>


                <div class="col-menu col-12 col-md-10 col-lg-9 d-none d-md-block">
                    <div class="innerwrap">

                        <!-- <a href="/" class="logo-link d-md-none">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/logo-strengthapp.png' ); ?>"
                                srcset="<?php echo get_theme_file_uri( 'assets/images/logo-strengthapp-2x.png' ); ?> 2x"
                                alt="Strength App Logo"
                            />
                        </a> -->


                        <?php
                        wp_nav_menu([
                            'theme_location'    => 'main-menu',
                            'menu_id'           => 'main-menu',
                            'container'         => '',
                            'fallback_cb'       => false,
                            'depth'             => 2,
                        ]);
                        ?>

                    </div>

                    <div class="d-md-none text-center header-cta-box">
                        <?php
                            $header_cta_text = get_field('header_cta_text', 'option');

                            if($header_cta_text) :
                        ?>
                        <span class="preheading">
                            <?php echo $header_cta_text; ?>
                        </span>
                        <?php endif; ?>
                        <?php
                            echo $cta_html;
                        ?>

                        <ul class="social-links d-flex justify-content-center">
                            
                            <?php $social_links = get_field('social_links', 'option'); ?>

                            <?php if ($social_links['instagram_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['instagram_url']; ?>">
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0025 5.11587C7.88098 5.11587 5.36319 7.51975 5.36319 10.5C5.36319 13.4803 7.88098 15.8841 11.0025 15.8841C14.1239 15.8841 16.6417 13.4803 16.6417 10.5C16.6417 7.51975 14.1239 5.11587 11.0025 5.11587ZM11.0025 14.0004C8.98528 14.0004 7.3362 12.4306 7.3362 10.5C7.3362 8.5694 8.98037 6.99961 11.0025 6.99961C13.0245 6.99961 14.6687 8.5694 14.6687 10.5C14.6687 12.4306 13.0196 14.0004 11.0025 14.0004ZM18.1877 4.89563C18.1877 5.59383 17.5988 6.15146 16.8724 6.15146C16.1411 6.15146 15.5571 5.58914 15.5571 4.89563C15.5571 4.20211 16.146 3.6398 16.8724 3.6398C17.5988 3.6398 18.1877 4.20211 18.1877 4.89563ZM21.9227 6.1702C21.8393 4.48795 21.4368 2.99782 20.146 1.77011C18.8601 0.542396 17.2994 0.15815 15.5374 0.0738034C13.7215 -0.0246011 8.27853 -0.0246011 6.46258 0.0738034C4.70552 0.153464 3.14479 0.537711 1.85399 1.76542C0.56319 2.99314 0.165644 4.48326 0.0773006 6.16551C-0.0257669 7.89931 -0.0257669 13.096 0.0773006 14.8298C0.160736 16.512 0.56319 18.0022 1.85399 19.2299C3.14479 20.4576 4.70061 20.8419 6.46258 20.9262C8.27853 21.0246 13.7215 21.0246 15.5374 20.9262C17.2994 20.8465 18.8601 20.4623 20.146 19.2299C21.4319 18.0022 21.8344 16.512 21.9227 14.8298C22.0258 13.096 22.0258 7.90399 21.9227 6.1702ZM19.5767 16.6901C19.1939 17.6086 18.4528 18.3161 17.4859 18.6863C16.038 19.2346 12.6025 19.1081 11.0025 19.1081C9.40245 19.1081 5.96196 19.2299 4.51902 18.6863C3.55705 18.3208 2.81595 17.6132 2.42822 16.6901C1.85399 15.3078 1.9865 12.0276 1.9865 10.5C1.9865 8.97239 1.8589 5.68755 2.42822 4.30989C2.81104 3.39144 3.55215 2.68387 4.51902 2.31368C5.96687 1.76542 9.40245 1.89194 11.0025 1.89194C12.6025 1.89194 16.0429 1.77011 17.4859 2.31368C18.4479 2.67918 19.189 3.38676 19.5767 4.30989C20.1509 5.69223 20.0184 8.97239 20.0184 10.5C20.0184 12.0276 20.1509 15.3125 19.5767 16.6901Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ($social_links['tiktok_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['tiktok_url']; ?>">
                                <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 8.61177C17.1323 8.61609 15.3104 8.05281 13.7917 7.0015V14.3337C13.7912 15.6917 13.362 17.0171 12.5615 18.1329C11.761 19.2486 10.6273 20.1014 9.3121 20.5772C7.99689 21.0531 6.5628 21.1292 5.20161 20.7956C3.84041 20.4619 2.61698 19.7344 1.69492 18.7101C0.772852 17.6859 0.196098 16.4139 0.0417749 15.0641C-0.112548 13.7143 0.162917 12.3512 0.831335 11.1569C1.49975 9.9626 2.52927 8.99412 3.78221 8.38095C5.03515 7.76778 6.45181 7.53914 7.84275 7.72561V11.4134C7.20625 11.2198 6.52277 11.2257 5.88991 11.4301C5.25704 11.6345 4.70716 12.0272 4.31879 12.5519C3.93042 13.0766 3.72342 13.7065 3.72735 14.3518C3.73128 14.997 3.94594 15.6246 4.34067 16.1448C4.73541 16.6651 5.29003 17.0514 5.92534 17.2486C6.56065 17.4458 7.24416 17.4439 7.87825 17.243C8.51235 17.0422 9.0646 16.6527 9.45615 16.1302C9.8477 15.6077 10.0585 14.9789 10.0585 14.3337V0H13.7917C13.7891 0.304881 13.8155 0.609346 13.8706 0.909547C14.0004 1.5797 14.2701 2.21721 14.6633 2.7831C15.0566 3.34898 15.565 3.83133 16.1577 4.20065C17.0008 4.73977 17.9893 5.02712 19 5.02692V8.61177Z" fill="white"/>
                                </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ($social_links['twitter_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['twitter_url']; ?>">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0039 2.34375H22.4512L14.9219 10.9473L23.7793 22.6562H16.8457L11.4111 15.5566L5.2002 22.6562H1.74805L9.7998 13.4521L1.30859 2.34375H8.41797L13.3252 8.83301L19.0039 2.34375ZM17.793 20.5957H19.7021L7.37793 4.29688H5.32715L17.793 20.5957Z" fill="white"/>
                                </svg>
                                </a>
                            </li>
                            <?php endif; ?>


                            <?php if ($social_links['facebook_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['facebook_url']; ?>">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 10.5639C22 4.72819 17.0766 0 11 0C4.92339 0 0 4.72819 0 10.5639C0 15.8365 4.02254 20.2069 9.28125 21V13.6176H6.4869V10.5639H9.28125V8.23643C9.28125 5.58907 10.9224 4.12673 13.436 4.12673C14.6398 4.12673 15.8985 4.3329 15.8985 4.3329V6.93128H14.5111C13.145 6.93128 12.7188 7.74572 12.7188 8.58103V10.5639H15.7695L15.2816 13.6176H12.7188V21C17.9775 20.2069 22 15.8365 22 10.5639Z" fill="white"/>
                                </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ($social_links['youtube_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['youtube_url']; ?>">
                                <svg width="31" height="21" viewBox="0 0 31 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3522 3.28579C29.9957 1.99243 28.9452 0.97382 27.6115 0.628141C25.194 0 15.5 0 15.5 0C15.5 0 5.80608 0 3.3885 0.628141C2.05475 0.973875 1.0043 1.99243 0.647775 3.28579C0 5.63008 0 10.5212 0 10.5212C0 10.5212 0 15.4124 0.647775 17.7566C1.0043 19.05 2.05475 20.0262 3.3885 20.3719C5.80608 21 15.5 21 15.5 21C15.5 21 25.1939 21 27.6115 20.3719C28.9452 20.0262 29.9957 19.05 30.3522 17.7566C31 15.4124 31 10.5212 31 10.5212C31 10.5212 31 5.63008 30.3522 3.28579ZM12.3295 14.962V6.08043L20.4318 10.5213L12.3295 14.962Z" fill="white"/>
                                </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ($social_links['linkedin_url']) : ?>
                             <li>
                                <a target="_blank" href="<?php echo $social_links['linkedin_url']; ?>">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" width="21" height="21">
                                    <g id="XMLID_801_">
                                        <path fill="white" id="XMLID_802_" class="s0" d="m4.9 6.8h-4.2c-0.2 0-0.4 0.1-0.4 0.3v13.5c0 0.2 0.2 0.4 0.4 0.4h4.2c0.2 0 0.3-0.2 0.3-0.4v-13.5c0-0.2-0.1-0.3-0.3-0.3z"/>
                                        <path fill="white" id="XMLID_803_" class="s0" d="m2.8 5.6c-1.6 0-2.8-1.3-2.8-2.8 0-1.5 1.2-2.8 2.8-2.8 1.5 0 2.8 1.3 2.8 2.8 0 1.5-1.3 2.8-2.8 2.8z"/>
                                        <path fill="white" id="XMLID_804_" class="s0" d="m15.6 6.4c-1.7 0-2.9 0.7-3.7 1.6v-0.9c0-0.2-0.1-0.3-0.3-0.3h-4.1c-0.2 0-0.3 0.1-0.3 0.3v13.5c0 0.2 0.1 0.4 0.3 0.4h4.2c0.2 0 0.4-0.2 0.4-0.4v-6.7c0-2.2 0.6-3.1 2.2-3.1 1.7 0 1.8 1.4 1.8 3.3v6.5c0 0.2 0.2 0.4 0.4 0.4h4.2c0.1 0 0.3-0.2 0.3-0.4v-7.4c0-3.3-0.6-6.8-5.4-6.8z"/>
                                    </g>
                                </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </header>

