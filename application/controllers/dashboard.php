<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array(
            'karyawan/m_karyawan',
            'golongan/m_golongan'));
        $this->load->helper('url');
        $this->load->helper('form');  
        $this->load->library(array('form_validation','template'));
        
        if(!$this->session->userdata('nip')){
            redirect('login');
        }
    }
    //bagian pengelolaan agenda
    public function index()
    {
        $data['title']= 'Latest Post';

        $data['daftar_karyawan'] = $this->m_karyawan->select_all()->result();
        $this->template->display('dashboard/index',$data);
    }
   
    function logout(){
        $this->session->unset_userdata('nik');
        redirect('login');
    }
}