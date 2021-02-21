<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function detail()
    {
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/detail_berita');
        $this->load->view('guest/template/script');
    }
    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/add');
        $this->load->view('guest/template/script');
    }
    public function view()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/view');
        $this->load->view('guest/template/script');
    }
    public function edit()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/edit');
        $this->load->view('guest/template/script');
    }
}
