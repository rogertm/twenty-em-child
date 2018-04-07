<?php
/**
 * Twenty'em Child
 *
 * @package			WordPress
 * @subpackage		Twenty'em Child
 * @author			RogerTM
 * @license			license.txt
 * @link			https://themingisprose.com/twenty-em
 * @since 			Twenty'em Child 1.0
 */

/**
 * Twenty'em Child Setup
 *
 * @since Twenty'em Child 1.0
 */
function t_em_child_setup(){
	// Make Twenty'em Child available for translation.
	load_child_theme_textdomain( 't_em_child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 't_em_child_setup' );

/**
 * Enqueue and register all css and js
 *
 * @since Twenty'em Child 1.0
 */
function t_em_child_enqueue(){
	wp_register_style( 't_em_child-', t_em_get_css( 'theme', T_EM_CHILD_THEME_DIR_PATH .'/css', T_EM_CHILD_THEME_DIR_URL .'/css' ), '', t_em_theme( 'Version' ), 'all' );
	wp_enqueue_style( 't_em_child-' );
}
add_action( 'wp_enqueue_scripts', 't_em_child_enqueue' );

/**
 * Dequeue styles form parent theme
 *
 * @since Twenty'em Child 1.2
 */
function t_em_child_dequeue(){
	wp_dequeue_style( 'twenty-em-style' );
	wp_deregister_style( 'twenty-em-style' );
}
add_action( 'wp_enqueue_scripts', 't_em_child_dequeue', 999 );
?>
