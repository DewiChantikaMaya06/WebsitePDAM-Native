<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function index()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pendaftaran');
        $this->load->view('guest/template/script');
    }

    public function view()
    {
        $data['pendaftaran'] = $this->M_pendaftaran->SemuaData();
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pendaftaran/view', $data);
        $this->load->view('guest/template/script');
    }
    
    public function detail($id)
    {
        $data['pendaftaran'] = $this->M_pendaftaran->get_id($id);
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/detail_pendaftaran', $data);
        $this->load->view('guest/template/script');
    }
    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pendaftaran');
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
            $nama = $this->input->post('nama', TRUE);
            $no_ktp = $this->input->post('no_ktp', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $rt = $this->input->post('rt', TRUE);
            $rw = $this->input->post('rw', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);

            $data = array(
                'nama' => $nama,
                'no_ktp' => $no_ktp,
                'alamat' => $alamat,
                'rt' => $rt,
                'rw' => $rw,
                'no_hp' => $no_hp,
                'gambar' => $gambar,
            );
            $this->db->insert('pendaftaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!
            </div>');
            redirect('Pendaftaran/view');
        }
    }

    public function delete($id)
    {
        $this->M_pendaftaran->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus...
            </div>');
        redirect('Pendaftaran/view');
    }
}
