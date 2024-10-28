<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Helper functions
 */
require get_theme_file_path( 'inc/helpers.php' );

/**
 * Theme setup ( supports, images sizes, menus, enqueues (styles, scripts, fonts) )
 */
require get_theme_file_path( 'inc/theme-init.php' );

/**
 * Main Menu Walker
 */
// require get_theme_file_path( 'inc/nav-walker-main-menu.php' );

/**
 * CMS customizations
 */
require get_theme_file_path( 'inc/cms-customizations.php' );

/**
 * Editor updates (wp wyswyg fixes / updates)
 */
require get_theme_file_path( 'inc/editor-updates.php' );

/**
 * Plugin specific customizations
 */
require get_theme_file_path( 'inc/plugin-specific-functions.php' );
