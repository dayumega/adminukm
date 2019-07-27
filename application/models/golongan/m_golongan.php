<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_golongan extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        return $this->db->select('*')
            ->from('golongan')
            ->get()
            ->result();
    }
}