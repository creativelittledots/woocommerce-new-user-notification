<?php
	
/*
Plugin Name: WooCommerce New User Notification
Description: Extends Woocommerce and changes the New User Notification to use the built in New Account Email provided in Woocommerce
*/
 
// Redefine user notification function
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
   
   if ( ! function_exists('wp_new_user_notification') ) {
	
	    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
		    
			WC()->mailer->emails['WC_Email_Customer_New_Account']->trigger( $user_id, $plaintext_pass, $password_generated = true );
	 
	    }
	}
   
}
 
?>