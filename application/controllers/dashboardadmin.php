<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboardadmin extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_admin');
        $this->load->helper('url');
        $this->load->helper('form');  
        $this->load->library(array('form_validation','templateadmin'));
        
        if(!$this->session->userdata('bos')){
            redirect('login');
        }
    }
    
    function index(){
        $data['title']= $this->session->userdata('nama');
        $this->templateadmin->display('dashboardadmin/index',$data);
    }

    
    function logout(){
        $this->session->unset_userdata('bos');
        redirect('login');
    }
}