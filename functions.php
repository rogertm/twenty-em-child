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
	global $t_em_theme_data;

	$less_files = array( T_EM_CHILD_THEME_DIR_PATH . '/css/style-theme.less' => T_EM_CHILD_THEME_DIR_URL . '/css' );
	$options = array( 'compress' => true );
	wp_enqueue_style( 'child-style-less', t_em_lessphp_compiler( $less_files, $options ), '', $t_em_theme_data['Version'], 'all' );

}
add_action( 'wp_enqueue_scripts', 't_em_child_enqueue' );
?>
