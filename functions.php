<?php
/**
 * Phoenix Theme file includes and definitions
 *
 * @package phoenix
 */

if ( ! defined( 'PHOENIX_DIR_PATH' ) ) {
	define( 'PHOENIX_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'PHOENIX_DIR_URI' ) ) {
	define( 'PHOENIX_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'PHOENIX_BUILD_URI' ) ) {
	define( 'PHOENIX_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'PHOENIX_BUILD_PATH' ) ) {
	define( 'PHOENIX_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'PHOENIX_BUILD_JS_URI' ) ) {
	define( 'PHOENIX_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'PHOENIX_BUILD_JS_DIR_PATH' ) ) {
	define( 'PHOENIX_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'PHOENIX_BUILD_IMG_URI' ) ) {
	define( 'PHOENIX_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'PHOENIX_BUILD_CSS_URI' ) ) {
	define( 'PHOENIX_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'PHOENIX_BUILD_CSS_DIR_PATH' ) ) {
	define( 'PHOENIX_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'PHOENIX_BUILD_LIB_URI' ) ) {
	define( 'PHOENIX_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

/**
 * Setup theme.
 *
 * @return void
 */
function phoenix_setup_theme() {

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * Adding this will allow you to select the featured image on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


	/**
	 * Register image sizes.
	 */
	add_image_size( 'featured-thumbnail', 350, 233, true );


	// Add theme support for selective refresh for widgets.
	/**
	 * WordPress 4.5 includes a new Customizer framework called selective refresh
	 *
	 * Selective refresh is a hybrid preview mechanism that has the performance benefit of not having to refresh the entire preview window.
	 *
	 * @link https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		]
	);

	// Gutenberg theme support.

	/**
	 * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
	 * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
	 * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
	 * @see Theme Styles.
	 * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
	 */
	add_theme_support( 'wp-block-styles' );

	/**
	 * Some blocks such as the image block have the possibility to define
	 * a “wide” or “full” alignment by adding the corresponding classname
	 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
	 * add_theme_support( 'align-wide' ), like we have done below.
	 *
	 * @see Wide Alignment
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
	 */
	add_theme_support( 'align-wide' );

	/**
	 * Loads the editor styles in the Gutenberg editor.
	 *
	 * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
	 * If we don't add this, the editor styles will only load in the classic editor ( tiny mice )
	 *
	 * @see https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
	 */
	add_theme_support( 'editor-styles' );
	/**
	 *
	 * Path to our custom editor style.
	 * It allows you to link a custom stylesheet file to the TinyMCE editor within the post edit screen.
	 *
	 * Since we are not passing any parameter to the function,
	 * it will by default, link the editor-style.css file located directly under the current theme directory.
	 * In our case since we are passing 'assets/build/css/editor.css' path it will use that.
	 * You can change the name of the file or path and replace the path here.
	 *
	 * @see add_editor_style(
	 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
	 */
	add_editor_style( 'assets/build/css/editor.css' );

	/**
	 * Set the maximum allowed width for any content in the theme,
	 * like oEmbeds and images added to posts
	 *
	 * @see Content Width
	 * @link https://codex.wordpress.org/Content_Width
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1240;
	}
}

add_action( 'after_setup_theme', 'phoenix_setup_theme' );

function phoenix_register_styles() {
	wp_register_style( 'main-css', PHOENIX_BUILD_CSS_URI . '/main.css', [], filemtime( PHOENIX_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );
	wp_enqueue_style( 'main-css' );
}

add_action( 'wp_enqueue_scripts', 'phoenix_register_styles' );
