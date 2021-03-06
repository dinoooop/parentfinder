<?php

/*
  Plugin Name: Member Register Type
  Plugin URI:
  Description: Register User in different type
  Author: Dinoop
  Author URI:
  Terms and Conditions:
  Version: 0.0.1
 */

define('MRT_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('MRT_PLUGIN_URL', plugin_dir_url(__FILE__));
define('MRT_PLUGIN_BASENAME', plugin_basename(__FILE__));

include_once MRT_PLUGIN_PATH . 'models/Gform.php';
include_once MRT_PLUGIN_PATH . 'models/FormHtmlJq.php';
include_once MRT_PLUGIN_PATH . 'models/Dot.php';
include_once MRT_PLUGIN_PATH . 'models/AppForm.php';
include_once MRT_PLUGIN_PATH . 'models/Profile.php';
include_once MRT_PLUGIN_PATH . 'models/Muser.php';
include_once MRT_PLUGIN_PATH . 'inc/functions.php';
include_once MRT_PLUGIN_PATH . 'inc/actions.php';
include_once MRT_PLUGIN_PATH . 'inc/page-redirect.php';

$mrt_profile = new Profile;


add_action('wp_enqueue_scripts', 'mrt_add_user_scripts', 20);
function mrt_add_user_scripts() {
    wp_enqueue_style('add-mrt-styles', MRT_PLUGIN_URL . 'css/styles.css');
    wp_enqueue_script('add-mrt-scripts', MRT_PLUGIN_URL . 'js/scripts.js', array('jquery'), '1.0.0', true);
}