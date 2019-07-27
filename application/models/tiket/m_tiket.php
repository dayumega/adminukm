<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_tiket extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    

    function select_all(){
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->order_by('id_tiket', 'desc');
        return $this->db->get();
    }

    /*function cek_nip($data){
        $this->db->select('nip');
        $this->db->from('karyawan');
        $this->db->where('nip', $data);
        return $this->db->get();
    }*/

    function insert_tiket($data){
        $this->db->insert('tiket', $data);
    }
       
    function select_by_id_tiket($id_tiket){
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->where('id_tiket', $id_tiket);
        return $this->db->get();
    }

    function delete_tiket($id_tiket) {
        $this->db->where('id_tiket', $id_tiket);
        $this->db->delete('tiket');
    }
    function update_tiket($id_tiket, $data){
        $this->db->where('id_tiket', $id_tiket);
        $this->db->update('tiket', $data);
    }

     function select_by_no_tiket($id_tiket){
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->where("id_tiket",$id_tiket);
        return $this->db->get();
    }
}