<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Login_model']);
    }

    public  function index($response=false){
        $result['message'] = $response;
        $this->load->view('login_view',$result);
    }

    public function auth(){
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $result = $this->Login_model->auth($username,$password);
        if(isset($result->error)){
            $response = $result->error;
            $this->index($response);
        }else{
            redirect(base_url().'Dashboard');
        }
    }

    public function authgoogle(){
        $profile    = $this->userlogin->oauth2_google()['profile'];
        $email      = $profile['email'];
        $result     = $this->Login_model->authgoogle($email);
        if(isset($result->error)){
            $response = $result->error;
            $this->index($response);
        }else{
            redirect(base_url().'Dashboard');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}