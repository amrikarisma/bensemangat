<?php
/**
 * Left sidebar check
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$sidebar_pos = get_theme_mod( 'bensemangat_sidebar_position' );

if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos || function_exists( 'is_shop' ) && is_shop()) {
	get_template_part( 'sidebar-templates/sidebar', 'left' );
}
?>

<div class="col-md content-area" id="primary">