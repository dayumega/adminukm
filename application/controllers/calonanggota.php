<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class calonanggota extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array(
            'calonanggota/m_calonanggota',
            'pelanggan/m_pelanggan',
            'karyawan/m_karyawan',
            'tiket/m_tiket'));
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
        
        $data['daftar_calonanggota'] = $this->m_calonanggota->select_all()->result();
        $this->template->display('calonanggota/index',$data);
        }

        public function tambah()
        {
            $data['daftar_tiket'] = $this->m_tiket->select_all()->result();
            $data['daftar_karyawan'] = $this->m_karyawan->select_all()->result();
            $data['daftar_pelanggan'] = $this->m_pelanggan->select_all()->result();
            $data['nim'] = $this->m_calonanggota->generate_kode();
            $this->template->display('calonanggota/tambah',$data);
        }

        public function proses_tambah_calonanggota()
        {
            $data['nim'] = $this->input->post('nim');
            $data['nama_anggota'] = $this->input->post('nama_anggota');
            $data['divisi'] = $this->input->post('divisi');
            $data['jurusan'] = $this->input->post('jurusan');
            $data['prodi'] = $this->input->post('prodi');
            $data['notlp'] = $this->input->post('notlp');
            // die(var_dump($data));
            $this->m_calonanggota->insert_calonanggota($data);
         
            redirect(site_url('calonanggota'));
        }
    

        public function edit($nim) {
            $data['title'] = 'Latest Post';
            $data['calonanggota'] = $this->m_calonanggota->select_by_nim($nim)->row();
            $data['daftar_tiket'] = $this->m_tiket->select_all()->result();
            $data['daftar_karyawan'] = $this->m_karyawan->select_all()->result();
            $data['daftar_pelanggan'] = $this->m_pelanggan->select_all()->result();
            $data['nim'] = $this->m_calonanggota->generate_kode();
            $this->template->display('calonanggota/edit',$data);
        
        }


        public function proses_edit_calonanggota()
        {
            $data['nim'] = $this->input->post('nim');
            $data['nama_anggota'] = $this->input->post('nama_anggota');
            $data['divisi'] = $this->input->post('divisi');
            $data['jurusan'] = $this->input->post('jurusan');
            $data['prodi'] = $this->input->post('prodi');
            $data['notlp'] = $this->input->post('notlp');
            $this->m_calonanggota->update_booking($nim,$data);
         
            redirect(site_url('calonanggota'));
        }
       
        public function delete_calonanggota($nim){
            $this->m_booking->delete_booking($nim);
            redirect(site_url('calonanggota'));
        }

        public function proses_cari_calonanggota(){
        
         $nim= $this->input->post('nim');
    
        $data['title'] = 'Latest Post';
        
        $data['calonanggota'] = $this->m_calonanggota->select_by_kode_booking($nim)->result();
            $data['daftar_tiket'] = $this->m_tiket->select_all()->result();
            $data['daftar_karyawan'] = $this->m_karyawan->select_all()->result();
            $data['daftar_pelanggan'] = $this->m_pelanggan->select_all()->result();
        $this->template->display('calonanggota/cari',$data);
        }

}