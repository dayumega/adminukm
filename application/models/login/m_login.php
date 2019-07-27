<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_login extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    
     function cek($username,$password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get();
    }

 
     function cek_all($data){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $data);
        return $this->db->get();
    }

   
    
}