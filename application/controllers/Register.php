<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Register_model']);
    }

    public  function index($response=false){
        $result['message'] = $response;
        $this->load->view('register_view',$result);
    }

    public function insert(){
        if($this->form_validation->run('user/insert') == FALSE){
            return $this->index();
        }
        $post = $this->input->post(null, TRUE);
        $response = $this->Register_model->insert($post);
        return $this->index($response);
    }

    public function insert_authGoogle(){
        $post    = $this->userlogin->register_oauth2_google()['profile'];
        $response = $this->Register_model->insert_authGoogle($post);
        return $this->index($response);
    }

}