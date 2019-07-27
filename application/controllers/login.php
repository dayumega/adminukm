<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{ /* beri nama class Login */
    
    function __construct(){
        parent::__construct();
        $this->load->model('login/m_login');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');     
    }
    
    function index(){
        $this->load->view('login/index');
    }     

    function proses(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $temp_account = $this->m_login->cek($username,$password);
        if($temp_account->num_rows() == 1){  /* hasil query efektif 1 row */
            $this->session->set_userdata('login', $temp_account->row());
            redirect(site_url('dashboardadmin'));
        }else{ /* hasil query efektif <> 1 row */
            $this->session->set_flashdata('notification',"<div class='alert alert-danger'>Username atau Password Salah</div>");
            redirect(site_url('login'));
        }
    }
}
