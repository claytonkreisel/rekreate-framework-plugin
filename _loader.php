<?php

    //Load the path helpers
    rkf_loader('paths');

    //Load the load helpers
    rkf_loader('loading');

    //Load the tinker action at beginning of head (allows you to output raw data easily)
    rkf_loader('tinker');

    //Load all the views filters
    rkf_loader('views');

    //Load all user helper functions
    rkf_loader('users');

    //Load time helpers
    rkf_loader('time');

    /**** DO NOT DELETE ****/
    //Function to load files inside of this plugin directory
    function rkf_loader($filename){
        include RKF_DIR . $filename . '.php';
    }
