<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('table/Tbl_user_model');
    }

    public function get($id){
        $cekID  = $this->db->where('iduser', $id)->get('tb_user');
        if($cekID->num_rows()>0){
            $result = $this->Tbl_user_model->get($id);
            return to_obj($result);
        }else{
            return to_obj([
                "error" => "User not found"
            ]);
        }
    }
}