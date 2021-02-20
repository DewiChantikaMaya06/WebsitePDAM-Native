<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Baliknama extends CI_Controller
{

    public function index()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/baliknama');
        $this->load->view('guest/template/script');
    }
}
