<?php

    /***************************************************************************
    Sets Up Path functions
    ***************************************************************************/

    //Loads the theme directory (will load child if present)
    function rkf_theme_dir($rel_path){
        return RKF_THEME_DIR . $rel_path;
    }

    //Loads the views directory (will load child if present)
    function rkf_views_dir($rel_path){
        return RKF_VIEWS_DIR . $rel_path;
    }

    //Loads the inc directory (will load child if present)
    function rkf_inc_dir($rel_path){
        return RKF_INC_DIR . $rel_path;
    }

    //Loads the theme url (will load child if present)
    function rkf_theme_url($rel_path){
        return RKF_THEME_URL . $rel_path;
    }

    //Loads the theme url (will load child if present)
    function rkf_assets_url($rel_path){
        return RKF_ASSETS_URL . $rel_path;
    }

    //Loads the theme url (will load child if present)
    function rkf_css_url($rel_path){
        return RKF_CSS_URL . $rel_path;
    }

    //Loads the images url (will load child if present)
    function rkf_images_url($rel_path){
        return RKF_IMAGES_URL . $rel_path;
    }

    //Loads the javascript url (will load child if present)
    function rkf_js_url($rel_path){
        return RKF_JS_URL . $rel_path;
    }

    //Loads the fonts url (will load child if present)
    function rkf_fonts_url($rel_path){
        return RKF_FONTS_URL . $rel_path;
    }
