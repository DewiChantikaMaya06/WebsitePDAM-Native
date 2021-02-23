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

    public function view()
    {
        $data['baliknama'] = $this->M_baliknama->SemuaData();
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/baliknama/view', $data);
        $this->load->view('guest/template/script');
    }
    
    public function detail($id)
    {
        $data['baliknama'] = $this->M_baliknama->get_id($id);
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/detail_baliknama', $data);
        $this->load->view('guest/template/script');
    }
    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/baliknama');
        $this->load->view('guest/template/script');
    }

    public function proses_add()
    {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {

            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama_sebelumnya = $this->input->post('nama_sebelumnya', TRUE);
            $nama_pengaju = $this->input->post('nama_pengaju', TRUE);
            $no_ktp = $this->input->post('no_ktp', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $gambar_ktp = $this->input->post('gambar_ktp', TRUE);
            $gambar_rekening = $this->input->post('gambar_rekening', TRUE);

            $data = array(
                'nama_sebelumnya' => $nama_sebelumnya,
                'nama_pengaju' => $nama_pengaju,
                'no_ktp' => $no_ktp,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'gambar_ktp' => $gambar_ktp,
                'gambar_rekening' => $gambar_rekening,
            );
            $this->db->insert('baliknama', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!
            </div>');
            redirect('Baliknama/view');
        }
    }

    public function delete($id)
    {
        $this->M_berita->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus...
            </div>');
        redirect('Baliknama/view');
    }
}
