<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

    public function index()
    {
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/index');
        $this->load->view('guest/template/script');
    }

    public function struktur()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/struktur');
        $this->load->view('guest/template/script');
    }
    public function about()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/about');
        $this->load->view('guest/template/script');
    }
}
