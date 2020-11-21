<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'bensemangat_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3">
<?php else : ?>
	<div class="col-md-4">
<?php endif; ?>

	<div class="content-sidebar woocommerce-sidebar widget-area" id="right-sidebar" role="complementary">
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</div><!-- #right-sidebar -->

</div>
