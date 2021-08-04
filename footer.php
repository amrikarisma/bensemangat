<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('bensemangat_container_type');
?>

<footer class="site-footer" id="colophon">
	<div class="text-center my-4">
		<?php
		include_once(ABSPATH . 'wp-admin/includes/plugin.php');
		if (is_plugin_active('woo-xendit-virtual-accounts/woocommerce-xendit-pg.php')) {

			$lsitBank = [
				'bca',
				'bni',
				'mandiri',
				'permata',
				'ovo',
				'dana',
				'alfamart',
				'indomaret',
				'bri',
				'linkaja',
				'cc',
			];
			$domain = site_url();
			echo '<div class="container">';
			echo '<div class="row">';
			foreach ($lsitBank as $key => $value) {
				echo '<div class="col">';
				echo '<img src="' . $domain . '/wp-content/plugins/woo-xendit-virtual-accounts/assets/images/' . $value . '.png" style="max-width:60px;margin-bottom:20px;">';
				echo '</div>';
			}
			echo '</div>';
			echo '</div>';
			// the plugin is active
		}
		?>
	</div>
	<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
	<?php get_template_part('sidebar-templates/sidebar', 'hiddenwidget'); ?>

	<div class="wrapper copyright-wrap" id="wrapper-footer">

		<div class="<?php echo esc_attr($container); ?>">

			<div class="row">

				<div class="col-md-12">
					<div class="copyright">
						Copyright 2020 by DCC. &copy All Rights Reserved.
					</div>

				</div>
				<!--col end -->


			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->

</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

</html>