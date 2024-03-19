<?php

/**
 * Plugin Name:       Mairaj Plugin
 * Plugin URI:        https://wpinnovators.com/downloads/mp-01/
 * Description:       This Plugin is used for WP practices 06.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mairaj Ul Haq
 * Author URI:        https://author.mairaj.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       mp-01
 * Domain Path:       /languages
 */


/* Start Activation Hook */

function mp_01_activation(){

    error_log("Hello MP-01 activation");

}

register_activation_hook(__FILE__, 'mp_01_activation');

/* End Activation Hook */

/* Start De-Activation Hook */

function mp_01_deactivation(){

    error_log("Hello MP-01 deactivation");

}

register_deactivation_hook(__FILE__, 'mp_01_deactivation');

/* End De-Activation Hook */

/* Start Custom Hook */

do_action('mp_01_c_action_01');

function mp_01_c_action_01() {

    error_log("Hello MP-01 Custom Action 01");

}

add_action(__FILE__, 'mp_01_c_action_01', 'mp_01_c_action_01');

// if($c){

//     error_log("This is true");

// } else {

//     error_log("This is false");

// }


/* End Custom Hook */


/* Start Checking Existing Variables */

$a = "";

if(isset($a)){

    echo "This variable is declared!";

} else {

    echo "This variable is not declared!";

}

/* Start Uninstall Hook */

function mp_01_uninstall() {

    error_log("Hello MP-01 Uninstall Function");

}

register_uninstall_hook(__FILE__, 'mp_01_uninstall');

/* End Uninstall Hook */
