<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pelanggan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array(
            'pelanggan/m_pelanggan'));
        $this->load->helper('url');
        $this->load->helper('form');  
        $this->load->library(array('form_validation','template'));
        
        if(!$this->session->userdata('nip')){
            redirect('login');
        }
        }

        // bagian pengelolaan 
        public function index()
        {
        $data['title'] = 'Latest Post';
        
        $data['daftar_pelanggan'] = $this->m_pelanggan->select_all()->result();
        $this->template->display('pelanggan/index',$data);
        }

        public function tambah()
        {
            $this->template->display('pelanggan/tambah');
        }

        public function proses_tambah_pelanggan()
        {
            $data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['notlp'] = $this->input->post('notlp');
            $data['email'] = $this->input->post('email');
            // die(var_dump($data));
            $this->m_pelanggan->insert_pelanggan($data);
         
            redirect(site_url('pelanggan'));
        }

        public function edit($id_pelanggan) {
            $data['title'] = 'Latest Post';
            $data['pelanggan'] = $this->m_pelanggan->select_by_id_pelanggan($id_pelanggan)->row();
            $this->template->display('pelanggan/edit',$data);
        
        }


        public function proses_edit_pelanggan()
        {
            $id_pelanggan= $this->input->post('id_pelanggan');
            $data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['notlp'] = $this->input->post('notlp');
            $data['email'] = $this->input->post('email');
            $this->m_pelanggan->update_pelanggan($id_pelanggan,$data);
         
            redirect(site_url('pelanggan'));
        }
       
        public function delete_pelanggan($id_pelanggan){
            $this->m_pelanggan->delete_pelanggan($id_pelanggan);
            redirect(site_url('pelanggan'));
        }

        public function proses_cari_pelanggan(){
        
         $id_pelanggan= $this->input->post('id_pelanggan');
    
        $data['title'] = 'Latest Post';
        
        $data['pelanggan'] = $this->m_pelanggan->select_by_id_pelanggan($id_pelanggan)->result();
        $this->template->display('pelanggan/cari',$data);
        }

}