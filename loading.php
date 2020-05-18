<?php

    //Load files from the themes includes folder
    function rkf_load_inc($filename){
        include rkf_inc_dir($filename . '.php');
    }
