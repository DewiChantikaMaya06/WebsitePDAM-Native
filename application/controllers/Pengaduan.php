<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function index()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pengaduan');
        $this->load->view('guest/template/script');
    }

    public function view()
    {
        $data['pengaduan'] = $this->M_pengaduan->SemuaData();
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pengaduan/view', $data);
        $this->load->view('guest/template/script');
    }
    
    public function detail($id)
    {
        $data['pengaduan'] = $this->M_pengaduan->get_id($id);
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pengaduan/detail_pengaduan', $data);
        $this->load->view('guest/template/script');
    }
    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/pengaduan');
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
            $alamat = $this->input->post('alamat', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $no_pelanggan = $this->input->post('no_pelanggan', TRUE);
            $jenis = $this->input->post('jenis', TRUE);
            $isi_pengaduan = $this->input->post('isi_pengaduan', TRUE);

            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'no_pelanggan' => $no_pelanggan,
                'jenis' => $jenis,
                'isi_pengaduan' => $isi_pengaduan,
                'gambar' => $gambar,
            );
            $this->db->insert('pengaduan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!
            </div>');
            redirect('Pengaduan/view');
        }
    }

    public function delete($id)
    {
        $this->M_berita->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus...
            </div>');
        redirect('Pengaduan/view');
    }
}
