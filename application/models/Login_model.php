<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('table/Tbl_login_model');
    }

    public function auth($username,$password){
        if($username && $password){
            $result = $this->Tbl_login_model->auth($username,$password);
            if($result->num_rows()>0){
                $row = $result->row();
                $sesi = array(
                    'isloggedin' => $row->iduser
                );
                $this->session->set_userdata($sesi);
                $iduser = $sesi['isloggedin'];
                $data   = array(
                    'session_at'    => date('Y-m-d H:i:sa')
                );
                $this->Tbl_login_model->update_session($iduser,$data);
                return $result;
            }else{
                return to_obj([
                    "error" => "Gagal! username/password salah"
                ]);
            }
        }
        return false;
    }

    public function authgoogle($email=false){
        if($email){
            $result = $this->Tbl_login_model->authgoogle($email);
            if($result->num_rows()>0){
                $row = $result->row();
                $sesi = array(
                    'isloggedin' => $row->iduser
                );
                $this->session->set_userdata($sesi);
                $iduser = $sesi['isloggedin'];
                $data   = array(
                    'session_at'    => date('Y-m-d H:i:sa')
                );
                $this->Tbl_login_model->update_session($iduser,$data);
                return $result;
            }else{
                return to_obj([
                    "error" => "Gagal! email belum terdaftar"
                ]);
            }
        }
        return false;
    }
}