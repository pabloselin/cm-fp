<?php
/**
 * Custom Functions from FoundationPress and additional stuff
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

define('CMFP_VERSION', '0.1.41');

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Extras */
require_once( 'library/extras/custom-content.php');
require_once( 'library/extras/custom-field-utils.php');
require_once( 'library/extras/custom-widgets.php');
require_once( 'library/extras/fixes.php');
require_once( 'library/extras/menus.php');
require_once( 'library/extras/meta-boxes.php');
require_once( 'library/extras/hooks.php');
require_once( 'library/extras/utils.php');
require_once( 'library/extras/shortcodes.php');

//Admin Settings
require_once( 'library/extras/admin/site-info.php');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
