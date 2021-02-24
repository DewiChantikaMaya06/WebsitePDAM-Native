<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function view()
    {
        $data['berita'] = $this->M_berita->SemuaData();
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/view', $data);
        $this->load->view('guest/template/script');
    }
    
    public function detail($id)
    {
        $data['berita'] = $this->M_berita->get_id($id);
        $data['lain'] = $this->M_berita->SemuaData();
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/detail_berita', $data);
        $this->load->view('guest/template/script');
    }

    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/add');
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
            $judul = $this->input->post('judul', TRUE);
            $sumber = $this->input->post('sumber', TRUE);
            $isi = $this->input->post('isi', TRUE);

            $data = array(
                'judul' => $judul,
                'sumber' => $sumber,
                'isi' => $isi,
                'gambar' => $gambar,
            );
            $this->db->insert('berita', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!
            </div>');
            redirect('Berita/view');
        }
    }
    
    public function edit($id)
    {
        $data['berita'] = $this->M_berita->get_id($id);
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/berita/edit', $data);
        $this->load->view('guest/template/script');
    }

    public function proses_edit()
    {
        $id = $this->input->post('id');

        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $judul = $this->input->post('judul', TRUE);
            $sumber = $this->input->post('sumber', TRUE);
            $isi = $this->input->post('isi', TRUE);

            $data = array(
                'judul' => $judul,
                'sumber' => $sumber,
                'isi' => $isi,
            );
            $this->db->where('id', $id);
            $this->db->update('berita', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!
            </div>');
            redirect('Berita/view');
        } else {

            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $judul = $this->input->post('judul', TRUE);
            $sumber = $this->input->post('sumber', TRUE);
            $isi = $this->input->post('isi', TRUE);

            $data = array(
                'judul' => $judul,
                'sumber' => $sumber,
                'isi' => $isi,
                'gambar' => $gambar,
            );
            $this->db->where('id', $id);
            $this->db->update('berita', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!
            </div>');
            redirect('Berita/view');
        }
    }

    public function delete($id)
    {
        $this->M_berita->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus...
            </div>');
        redirect('Berita/view');
    }
}
