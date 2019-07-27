<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_calonanggota extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    

    function select_all(){
        $this->db->select('*');
        $this->db->from('calonanggota');
        $this->db->order_by('nim', 'desc');

        return $this->db->get();
    }

    /*function cek_nik($data){
        $this->db->select('nik');
        $this->db->from('karyawan');
        $this->db->where('nik', $data);
        return $this->db->get();
    }*/

    function insert_calonanggota($data){
        $this->db->insert('nim', $data);
    }
       
   function select_by_nim($nim){
        $this->db->select('*');
        $this->db->from('calonanggota');
        return $this->db->get();
    }

    function delete_calonanggota($nim) {
        $this->db->where('nim', $nim);
        $this->db->delete('calonanggota');
    }
    function update_calonanggota($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('calonanggota', $data);
    }

     function select_by_nim($nim){
        $this->db->select('*');
        $this->db->from('calonanggota');
        $this->db->where("nim",$nim);
        return $this->db->get();
    }

    function generate_kode()
    {
        $this->db->select('MAX(nim) AS kode');
        $this->db->from('calonanggota');
        $this->db->limit(1);

        $calonanggota = $this->db->get();

        if($calonanggota->row()->kode !== null) {
            $data = $calonanggota->row();

            $split = explode('-', $data->kode);
            $increment = $split[1] + 1;

            return 'BK-' . $increment;
        } else {
            return 'BK-1';
        }

    }
    
     /*function buat_kode()   {    
        $this->db->select('RIGHT(karyawan.nik,2) as kode', FALSE);
        $this->db->order_by('nik','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('karyawan');      //cek dulu apakah ada sudah ada kode di tabel.    
            if($query->num_rows() <> 0){      
                //jika kode ternyata sudah ada.      
                $data = $query->row();      
                $kode = intval($data->kode) + 1;    
            }
                else{      
       //jika kode belum ada      
       $kode = 1;    
      }
      $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
      $kodejadi = "K".$kodemax;    
      return $kodejadi;  
     }*/
     
}