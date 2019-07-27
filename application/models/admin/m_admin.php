<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_admin extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    

    function select_all(){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->order_by('iduser', 'desc');
        return $this->db->get();
    }

    function cek_nip($data){
        $this->db->select('username');
        $this->db->from('admin');
        $this->db->where('username', $data);
        return $this->db->get();
    }

    function insert_admin($data){
        $this->db->insert('admin', $data);
    }
       
    function select_by_iduser($iduser){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('iduser', $iduser);
        return $this->db->get();
    }

    function delete_admin($iduser) {
        $this->db->where('iduser', $iduser);
        $this->db->delete('admin');
    }
    function update_admin($iduser, $data){
        $this->db->where('iduser', $iduser);
        $this->db->update('admin', $data);
    }

     function select_by_usrname($username){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where("username",$username);
        return $this->db->get();
    }
}