<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_login_model extends CI_Model{

    public function auth($username,$password){
        $query = $this->db->where('username',$username)->where('password',$password)->get('tb_user');
        return $query;
    }

    public function authgoogle($email){
        $query = $this->db->where('email',$email)->get('tb_user');
        return $query;
    }

    public function update_session($iduser,$data){
        $query = $this->db->where('iduser',$iduser)->update('tb_user',$data);
    }
}
