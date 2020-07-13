
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

    //Require the class which have the core function of this plguin. 
    require plugin_dir_path(__FILE__) . '/v1/class-user-auth.php';
    require plugin_dir_path(__FILE__) . '/v1/class-user-verify.php';
    require plugin_dir_path(__FILE__) . '/v1/class-project-verify.php';
    require plugin_dir_path(__FILE__) . '/v1/class-project-list.php';

    // Init check if successfully request from wapi.
    function bytescrafter_project_route()
    {
        register_rest_route( 'project/v1/user', 'auth', array(
            'methods' => 'POST',
            'callback' => array('RestApi_Authenticate','initialize'),
        ));

        register_rest_route( 'project/v1/user', 'verify', array(
            'methods' => 'POST',
            'callback' => array('RestApi_Verification','initialize'),
        ));

        register_rest_route( 'project/v1/cluster', 'verify', array(
            'methods' => 'POST',
            'callback' => array('RestApi_ClusterVerify','initialize'),
        ));

        register_rest_route( 'project/v1/cluster', 'list', array(
            'methods' => 'POST',
            'callback' => array('RestApi_ClusterList','initialize'),
        ));

        register_rest_route( 'project/v1/project', 'verify', array(
            'methods' => 'POST',
            'callback' => array('RestApi_ProjectVerify','initialize'),
        ));

        register_rest_route( 'project/v1/project', 'list', array(
            'methods' => 'POST',
            'callback' => array('RestApi_ProjectList','initialize'),
        ));
    }
    add_action( 'rest_api_init', 'bytescrafter_project_route' );

?>