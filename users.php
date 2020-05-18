<?php

    //Gets all available roles for a user. If second parameter is true then only returns the first.
    function rkf_get_roles($user_id = false, $single = false){
        if(!$user_id){
            if(!is_user_logged_in()) return false;
            $user_id = get_current_user_id();
        }
        $userdata = get_user_by('ID', $user_id);
        if(count($userdata->roles) < 1) return false;
        if($single){
            return $userdata->roles[0];
        }
        return $userdata->roles;
    }

    //Tests to see if the user is a certain role. If user ID is false then current logged in user is tested.
    function rkf_user_is($role, $user_id = false){
        $roles = rkf_get_roles($user_id);
        if($roles){
            if(in_array($role, $roles)){
                return true;
            }
        }
        return false;
    }
