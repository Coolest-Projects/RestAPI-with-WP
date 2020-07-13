
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

    function project_activate() {
        global $wpdb;

        // #region CREATING TABLE FOR Projects
        $usn_project_tab = USN_PROJECT_TAB;
        if($wpdb->get_var( "SHOW TABLES LIKE '$usn_project_tab'" ) != $usn_project_tab) {
            $sql = "CREATE TABLE `".$usn_project_tab."` (";
                $sql .= "`ID` bigint(20) NOT NULL AUTO_INCREMENT, ";
                $sql .= "`app_secret` varchar(120) NOT NULL, ";
                $sql .= "`app_owner` bigint(20) NOT NULL, ";
                $sql .= "`app_parent` int(12) NOT NULL DEFAULT '0', ";
                $sql .= "`app_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active', ";
                $sql .= "`app_name` varchar(120) NOT NULL, ";
                $sql .= "`app_info` varchar(255) NOT NULL, ";
                $sql .= "`app_website` varchar(255) NOT NULL, ";
                $sql .= "`match_cap` int(7) NOT NULL DEFAULT '10', ";
                $sql .= "`max_connect` int(7) NOT NULL DEFAULT '1000', ";
                $sql .= "`date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, ";
                $sql .= "PRIMARY KEY (`ID`), ";
                $sql .= "UNIQUE  (`app_name`) ";
                $sql .= ") ENGINE = InnoDB; ";
            $result = $wpdb->get_results($sql);
            
        }
        // #endregion
    } 
    add_action( 'activated_plugin', 'project_activate' );

    /**
     * Deactivation hook.
     */
    function project_deactivate() {
        //echo "DEACTIVATED";
    }
    register_deactivation_hook( __FILE__, 'project_deactivate' );

?>