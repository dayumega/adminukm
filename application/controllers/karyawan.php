<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Karyawan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array(
            'karyawan/m_karyawan',
            'golongan/m_golongan'));

        $this->load->helper('url');
        $this->load->helper('form');  
        $this->load->library(array('form_validation','templateadmin'));
        
        if(!$this->session->userdata('nip')){
            redirect('login');
        }
        }

        // bagian pengelolaan 
        public function index()
        {
        $data['title'] = 'Latest Post';
        
        $data['daftar_karyawan'] = $this->m_karyawan->select_all()->result();
        $this->templateadmin->display('karyawan/index',$data);
        }

        public function tambah()
        {
            $data['golongan'] = $this->m_golongan->all();
            /*$data['kodeunik'] = $this->m_karyawan->buat_kode();*/
            /*$data['nip'] = $this->m_karyawan->generate_kode();*/
            $this->templateadmin->display('karyawan/tambah',$data);
        }

        public function proses_tambah_karyawan()
        {
           $this->form_validation->set_rules('nip','nip','required|trim|xss_clean|is_unique[karyawan.nip]');

            if ($this->form_validation->run()==FALSE) {
                $data['golongan'] = $this->m_golongan->all();
                $this->templateadmin->display('karyawan/tambah',$data);
                $this->session->set_flashdata('notification',"<div class = 'alert alert-success'> Data tidak benar</div>");
            }
            else{

            $data['id_karyawan'] = $this->input->post('id_karyawan');

            $data['namakaryawan'] = $this->input->post('namakaryawan');
            $data['jeniskelamin'] = $this->input->post('jeniskelamin');
            $data['id_golongan'] = $this->input->post('id_golongan');
            $data['notlp'] = $this->input->post('notlp');
            $data['nip'] = $this->input->post('nip');
            $data['password'] = $this->input->post('password');
            // die(var_dump($data));
            $this->m_karyawan->insert_karyawan($data);
         
            redirect(site_url('karyawan'));
        }
    }

        public function edit($id_karyawan) {
            $data['title'] = 'Latest Post';
            $data['karyawan'] = $this->m_karyawan->select_by_id_karyawan($id_karyawan)->row();
            $this->templateadmin->display('karyawan/edit',$data);
        
        }


        public function proses_edit_karyawan()
        {
            
            $id_karyawan= $this->input->post('id_karyawan');

            $data['namakaryawan'] = $this->input->post('namakaryawan');
            $data['jeniskelamin'] = $this->input->post('jeniskelamin');
            $data['notlp'] = $this->input->post('notlp');
            $data['nip'] = $this->input->post('nip');
            $data['password'] = $this->input->post('password');

            $id_karyawan=$this->input->post('id_karyawan');
            $this->m_karyawan->update_karyawan($id_karyawan,$data);
         
            redirect(site_url('karyawan'));
        }
       
        public function delete_karyawan($id_karyawan){
            $this->m_karyawan->delete_karyawan($id_karyawan);
            redirect(site_url('karyawan'));
        }

        public function proses_cari_karyawan(){
        
         $nip= $this->input->post('nip');
    
        $data['title'] = 'Latest Post';
        
        $data['karyawan'] = $this->m_karyawan->select_by_nip($nip)->result();
        $this->templateadmin->display('karyawan/cari',$data);
        }

}