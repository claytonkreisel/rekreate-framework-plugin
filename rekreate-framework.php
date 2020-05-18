<?php
/*
Plugin Name: re•kreate Framework
Description: A plugin used by all re•kreate Sites
Version: 1.1
Author: re•kreate
Author URI: https://rekreate.agency/
Text Domain: rekreate-framework
Domain Path: /languages
*/


//Define the path to the plugin
if(!defined('RKF_DIR')){
    define('RKF_DIR', plugin_dir_path( __FILE__ ));
}

if(!defined('RKF_LOADED')){

    //Define the directory to the current theme (child then parent)
    define('RKF_THEME_DIR', get_stylesheet_directory() . '/');

    //Define the views directory in the theme (will be where all theme views go instead of at root)
    define('RKF_VIEWS_DIR', RKF_THEME_DIR . 'views/' );

    //Define the inclusions folder for the theme.
    define('RKF_INC_DIR', RKF_THEME_DIR . 'inc/');

    /* Store the URLs for the theme inside of the following constants
    *       Ideal file structure for theme assets is:
    *       {THEME_FOLDER}/assets/[css][js][images][fonts][json]
    */
    define('RKF_THEME_URL', get_template_directory_uri() . '/');
    define('RKF_ASSETS_URL', RKF_THEME_URL . 'assets/');
    define('RKF_CSS_URL', RKF_ASSETS_URL . 'css/');
    define('RKF_JS_URL', RKF_ASSETS_URL . 'js/');
    define('RKF_IMAGES_URL', RKF_ASSETS_URL . 'images/');
    define('RKF_FONTS_URL', RKF_ASSETS_URL . 'fonts/');
    define('RKF_JSON_URL', RKF_ASSETS_URL . 'json/');
    define('RKF_LOADED', true);

    //Load the rest of this plugin
    require RKF_DIR . '_loader.php';

}
