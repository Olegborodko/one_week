<?php 

/*
*	Main class file for the integration with core WooCommerce
* 	Takes care of the opt-in checkbox to integrate with WooCommerce on the checkout page
*	
*	since @6.0.0
*/

// Prevent direct access to the file
defined('ABSPATH') or die( __( "Whoops, you shouldn't be accessing this file directly. Abort!" , 'yikes-inc-easy-mailchimp-extender' ) );

class Yikes_Easy_MC_WooCommerce_Checkbox_Class extends Yikes_Easy_MC_Checkbox_Integration_Class {

	/**
	 * @var string
	 */
	protected $type = 'woocommerce_checkout_form';
	
	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'determine_checkbox_placement' ), 1000 );
		add_action( 'woocommerce_checkout_update_order_meta', array( $this, 'save_woocommerce_checkout_checkbox_value' ) );
		add_action( 'woocommerce_checkout_order_processed', array( $this, 'subscribe_from_woocommerce_checkout' ) );

	}

	public function determine_checkbox_placement() {

		$default_checkbox_placement = apply_filters( 'yikes-mailchimp-wooco-integration-checkbox-checkout-fields', true );

		if ( $default_checkbox_placement ) {
			add_filter( 'woocommerce_checkout_fields', array( $this, 'add_checkout_field' ), 20 );
		} else {
			add_action( 'woocommerce_checkout_after_order_review', array( $this, 'add_checkout_field_html' ) );	
		}
	}

	public function add_checkout_field_html() {

		// Get checkbox data
		$checkbox_options = get_option( 'optin-checkbox-init' , array() );

		// Only display the field if a list is set
		if ( isset( $checkbox_options[$this->type] ) && isset( $checkbox_options[$this->type]['associated-list'] ) && $checkbox_options[$this->type]['associated-list'] != '-' ) {

			if ( $this->is_user_already_subscribed( $this->type ) ) {
				return $fields;
			}

			$precheck = isset( $checkbox_options[$this->type]['precheck'] ) && $checkbox_options[$this->type]['precheck'] == 'true';

			?>
				<label class="checkbox yikes-mailchimp-woocommerce-checkout-form-checkbox">
					<input type="checkbox" class="input-checkbox " name="yikes_mailchimp_checkbox_woocommerce_checkout_form" id="yikes_mailchimp_checkbox_woocommerce_checkout_form" value="1" <?php echo $precheck ? 'checked="checked"' : ''; ?>> 
					<?php echo $checkbox_options[$this->type]['label']; ?>
				</label>
			<?php
		}
	}
	
	/**
	 * @param $fields
	 *
	 * @return mixed
	 */
	public function add_checkout_field( $fields ) {

		// Get checkbox data
		$checkbox_options = get_option( 'optin-checkbox-init' , array() );

		// Only display the field if a list is set
		if ( isset( $checkbox_options[$this->type] ) && isset( $checkbox_options[$this->type]['associated-list'] ) && $checkbox_options[$this->type]['associated-list'] != '-' ) {

			if ( $this->is_user_already_subscribed( $this->type ) ) {
				return $fields;
			}

			$precheck = isset( $checkbox_options[$this->type]['precheck'] ) && $checkbox_options[$this->type]['precheck'] == 'true' ? '1' : '0';

			/**
			* Filter where the checkbox goes.
			*
			* See this WooCo article for possible values: https://docs.woocommerce.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
			*
			* @param string | Which set of fields the checkbox should go into
			*/
			$field_placement = apply_filters( 'yikes-mailchimp-wooco-integration-checkbox-placement', 'billing' );

			$fields[ $field_placement ]['yikes_mailchimp_checkbox_' . $this->type] = array(
				'id' 	  => 'yikes_mailchimp_checkbox_' . $this->type,
				'type'    => 'checkbox',
				'class'   => apply_filters( 'yikes-mailchimp-wooco-integration-checkbox-classes', array( 'form-row-wide' ) ),
				'label'   => $checkbox_options[$this->type]['label'],
				'default' => $precheck,
			);
		}

		return $fields;
	}
	
	/**
	* @param int $order_id
	*/
	public function save_woocommerce_checkout_checkbox_value( $order_id ) {

		// Update the order post meta
		update_post_meta( $order_id, 'yikes_easy_mailchimp_optin', $this->was_checkbox_checked( $this->type ) );
	}
	
	/**
	* @param int $order_id
	* @return boolean
	*/
	public function subscribe_from_woocommerce_checkout( $order_id ) {
		$do_optin = get_post_meta( $order_id, 'yikes_easy_mailchimp_optin', true );

		if ( $do_optin == '1' ) {
			$order = new WC_Order( $order_id );
			$email = $order->billing_email;
			$merge_vars = array(
				'NAME'  => "{$order->billing_first_name} {$order->billing_last_name}",
				'FNAME' => $order->billing_first_name,
				'LNAME' => $order->billing_last_name,
			);

			// Subscribe the user
			$this->subscribe_user_integration( sanitize_email( $email ), $this->type, $merge_vars );
		}
	}
	
}
new Yikes_Easy_MC_WooCommerce_Checkbox_Class;
