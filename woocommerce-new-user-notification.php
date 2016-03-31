<?php
	
/*
Plugin Name: Woocommerce New User Notification
Description: Changes the new user notification to use the built in New Account email provided in Woocommerce
*/
 
// Redefine user notification function
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
   
   if ( !function_exists('wp_new_user_notification') ) {
	
	    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
		    
			WC()->mailer->emails['WC_Email_Customer_New_Account']->trigger( $user_id, $plaintext_pass, $password_generated = true );
	 
	    }
	}
   
}
 
?>