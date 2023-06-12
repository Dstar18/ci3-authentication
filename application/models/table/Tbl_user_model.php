<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_user_model extends CI_Model{

    public function get($id){
        $query = $this->db->where('iduser',$id)->join('tb_role','tb_role.idrole = tb_user.role_id')->get('tb_user')->row();
        return $query;
    }
}