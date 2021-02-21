<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

    public function detail()
    {
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/detail_kegiatan');
        $this->load->view('guest/template/script');
    }
    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/add');
        $this->load->view('guest/template/script');
    }
    public function view()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/view');
        $this->load->view('guest/template/script');
    }
    public function edit()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/edit');
        $this->load->view('guest/template/script');
    }
}
