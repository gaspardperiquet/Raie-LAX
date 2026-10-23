<?php
/**
 * Raie-lax — fonctions du thème enfant.
 *
 * @package raie-lax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Pas d'accès direct.
}

define( 'RAIELAX_VERSION', '0.1.0' );

/**
 * Charge le CSS du parent puis celui de l'enfant.
 */
function raielax_enqueue_styles() {
	wp_enqueue_style(
		'raielax-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( get_template() )->get( 'Version' )
	);

	wp_enqueue_style(
		'raielax-style',
		get_stylesheet_uri(),
		array( 'raielax-parent' ),
		RAIELAX_VERSION
	);

	// Fichiers perso (créez-les quand vous en avez besoin).
	$main_css = get_stylesheet_directory() . '/assets/css/main.css';
	if ( file_exists( $main_css ) ) {
		wp_enqueue_style( 'raielax-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'raielax-style' ), RAIELAX_VERSION );
	}

	$main_js = get_stylesheet_directory() . '/assets/js/main.js';
	if ( file_exists( $main_js ) ) {
		wp_enqueue_script( 'raielax-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), RAIELAX_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'raielax_enqueue_styles' );

/**
 * Charge automatiquement les fichiers PHP du dossier /inc
 * (ex : inc/custom-post-types.php pour les "expériences").
 */
foreach ( glob( get_stylesheet_directory() . '/inc/*.php' ) as $raielax_file ) {
	require_once $raielax_file;
}
