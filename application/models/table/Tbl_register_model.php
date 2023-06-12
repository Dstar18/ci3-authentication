<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_register_model extends CI_Model{

    public function insert($data){
        $query = $this->db->insert('tb_user',$data);
        return $query;
    }
}