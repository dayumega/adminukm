<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_invoice extends CI_Model{
    
    public function __construct()
        {
            parent::__construct();
            
        }
    

    function invoice_view1(){
        $this->db->select('*');
        $this->db->from('view_invoice');
        $this->db->group_by('kode_fakturpenj');

        return $this->db->get();
    }

    function invoice_view2($kode){
        $this->db->select('*');
        $this->db->from('view_invoice');
        $this->db->where('kode_fakturpenj', $kode);

        return $this->db->get();
    }
     
}