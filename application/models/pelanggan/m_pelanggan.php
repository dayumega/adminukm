<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_pelanggan extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    

    function select_all(){
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get();
    }

    /*function cek_id($data){
        $this->db->select('id_tamu');
        $this->db->from('tamu');
        $this->db->where('id_tamu', $data);
        return $this->db->get();
    }*/

    function insert_pelanggan($data){
        $this->db->insert('pelanggan', $data);
    }
       
    function select_by_id_pelanggan($id_pelanggan){
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get();
    }

    function delete_pelanggan($id_pelanggan) {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->delete('pelanggan');
    }
    function update_pelanggan($id_pelanggan, $data){
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('pelanggan', $data);
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