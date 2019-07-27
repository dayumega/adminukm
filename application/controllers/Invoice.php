<?php

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('invoice/m_invoice');
        $this->load->library('template');
          
    if(!$this->session->userdata('nip')){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'List Invoice';
        $data['invoice'] = $this->m_invoice->invoice_view1()->result();
         
        $this->template->display('invoice/view', $data);
    }

    public function cetak($faktur)
    {
        $data['data'] = $this->m_invoice->invoice_view2($faktur)->row();
        $data['invoice'] = $this->m_invoice->invoice_view2($faktur)->result();

        $this->template->display('invoice/index', $data);
    }
}