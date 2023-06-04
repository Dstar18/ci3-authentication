<?php

// Return data
function to_obj($data=[]){
    if(!$data){
        return $data;
    }
    return json_decode(json_encode($data));
}

// session login
function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('isloggedin');
    if(!$user_session){
        redirect(base_url());
    }
}

// 