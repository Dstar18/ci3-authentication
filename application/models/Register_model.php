<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('table/Tbl_register_model');
    }

    public function insert($post){
        $data = array(
            'role_id'       => 2,
            'firstname'     => $post['firstname'],
            'lastname'      => $post['lastname'],
            'email'         => $post['email'],
            'username'      => $post['username'],
            'password'      => $post['password'],
            'created_at'    => date('Y-m-d H:i:sa')
        );
        $cekEmail = $this->db->where('email', $data['email'])->get('tb_user');
        if($cekEmail->num_rows()>0){
            return to_obj([
                "error" => "Email sudah terdaftar"
            ]);
        }else{
            $result = $this->Tbl_register_model->insert($data);
            return to_obj([
                "result" => "User created successfully"
            ]);
        }
    }

    public function insert_authGoogle($post){
        $data = array(
            'role_id'       => 2,
            'firstname'     => $post['givenName'],
            'lastname'      => $post['familyName'],
            'email'         => $post['email'],
            'username'      => $post['givenName'],
            'password'      => $post['givenName'],
            'created_at'    => date('Y-m-d H:i:sa')
        );
        $cekEmail = $this->db->where('email', $data['email'])->get('tb_user');
        if($cekEmail->num_rows()>0){
            return to_obj([
                "error" => "Email sudah terdaftar"
            ]);
        }else{
            $result = $this->Tbl_register_model->insert($data);
            return to_obj([
                "result" => "User created successfully"
            ]);
        }
    }
}