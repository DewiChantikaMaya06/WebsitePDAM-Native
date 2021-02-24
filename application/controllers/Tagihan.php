<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{

    public function index()
    {
        $data['tagihan'] = $this->M_tagihan->SemuaData();
        $data['tagihan'] = false;
        if ($this->input->post('keyword')) {
            $data['tagihan'] = true;
            $data['tagihan'] = $this->M_tagihan->CariData();
        }
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/tagihan', $data);
        $this->load->view('guest/template/script');
    }

    public function detail($id)
    {
        $data['tagihan'] = $this->M_tagihan->get_id($id);
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/detailtagihan', $data);
        $this->load->view('guest/template/script');
    }
}
