<?php
/**
 * Notice: Currency not supported.
 *
 * @package WooCommerce_granito/Admin/Notices
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="error inline">
	<p><strong><?php esc_html_e( 'Granito Disabled', 'woocommerce-granito' ); ?></strong>: <?php printf( wp_kses( __( 'Currency %s is not supported. Works only with Brazilian Real.', 'woocommerce-granito' ), array( 'code' => array() ) ), '<code>' . esc_html( get_woocommerce_currency() ) . '</code>' ); ?>
	</p>
</div>

<?php
