<?php

    //Set the default time to wordpress' selection
    function rkf_set_default_time_to_wordpress_selection(){
        date_default_timezone_set(get_option('timezone_string'));
    }
    add_action('init', 'rkf_set_default_time_to_wordpress_selection');
    add_action('admin_init', 'rkf_set_default_time_to_wordpress_selection');
