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

