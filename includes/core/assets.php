
<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) 
	{
		exit;
	}

	/** 
		* @package wp-restapi
		* Name: WP RestAPI
		* Description: Sample implementation of WordPress RestAPI.
		* Package-Website: http://www.bytescrafter.net/projects/wp-restapi
		* 
		* Author: Bytes Crafter
		* Author-Website:: https://www.bytescrafter.net/about-us
		* License: Copyright (C) Bytes Crafter - All rights Reserved. 
	*/
?>

<?php
    
    function usn_plugin_admin_enqueue()
    {    
        wp_enqueue_script( 'usn_popper_script', USN_PLUGIN_URL . 'assets/popper/popper.min.js' ); 
        wp_enqueue_script( 'usn_clipboard_script', USN_PLUGIN_URL . 'assets/clipboard/clipboard.min.js' );    
        wp_enqueue_script( 'usn_chartjs_script', USN_PLUGIN_URL . 'assets/chartjs/chart.min.js' );
        wp_enqueue_script( 'usn_handlebars_script', USN_PLUGIN_URL . 'assets/handlebars/handlebars.js' );
        
        wp_enqueue_style( 'usn_bootstrap_style', USN_PLUGIN_URL . 'assets/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_script( 'usn_bootstrap_script', USN_PLUGIN_URL . 'assets/bootstrap/js/bootstrap.min.js' );

        wp_enqueue_style( 'usn_datatables_style', USN_PLUGIN_URL . 'assets/datatables/datatables.min.css' );
        wp_enqueue_script( 'usn_datatables_script', USN_PLUGIN_URL . 'assets/datatables/datatables.min.js' );

        wp_enqueue_style( 'usn_jqueryui_style', USN_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.css' );
        wp_enqueue_script( 'usn_jqueryui_script', USN_PLUGIN_URL . 'assets/jquery-ui/jquery-ui.min.js' );

        wp_localize_script( 'usn_admin_script', 'ajaxurl', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }
    add_action( 'admin_enqueue_scripts', 'usn_plugin_admin_enqueue' );

?>