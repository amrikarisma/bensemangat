<?php
/**
 * The sidebar containing the main widget area
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'left-sidebar' ) ) {
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

	<div class="content-sidebar woocommerce-sidebar widget-area" id="left-sidebar" role="complementary">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</div>

</div><!-- #left-sidebar -->
