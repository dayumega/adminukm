<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tiket extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array(
            'tiket/m_tiket'));
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
        
        $data['daftar_tiket'] = $this->m_tiket->select_all()->result();
        $this->templateadmin->display('tiket/index',$data);
        }

        public function tambah()
        {
            $this->templateadmin->display('tiket/tambah');
        }

        public function proses_tambah_tiket()
        {
            $data['id_tiket'] = $this->input->post('id_tiket');
            $data['tujuan'] = $this->input->post('tujuan');
            $data['harga'] = $this->input->post('harga');
            // die(var_dump($data));
            $this->m_tiket->insert_tiket($data);
         
            redirect(site_url('tiket'));
        }

        public function edit($id_tiket) {
            $data['title'] = 'Latest Post';
            $data['tiket'] = $this->m_tiket->select_by_id_tiket($id_tiket)->row();
            $this->templateadmin->display('tiket/edit',$data);
        
        }


        public function proses_edit_tiket()
        {
            
            $id_tiket= $this->input->post('id_tiket');
            $data['tujuan'] = $this->input->post('tujuan');
            $data['harga'] = $this->input->post('harga');
            $this->m_tiket->update_tiket($id_tiket,$data);
         
            redirect(site_url('tiket'));
        }
       
        public function delete_tiket($id_tiket){
            $this->m_tiket->delete_tiket($id_tiket);
            redirect(site_url('tiket'));
        }

        public function proses_cari_tiket(){
        
         $id_tiket= $this->input->post('id_tiket');
    
        $data['title'] = 'Latest Post';
        
        $data['tiket'] = $this->m_tiket->select_by_id_tiket($id_tiket)->result();
        $this->templateadmin->display('tiket/cari',$data);
        }

}