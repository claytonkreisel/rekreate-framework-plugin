<?php

    //Add tinker action to front-end wp-head in order to test functions
    add_action('wp_head', 'rkf_tinker_load', 1);
    function rkf_tinker_load(){
        do_action('rkf_tinker');
    }
