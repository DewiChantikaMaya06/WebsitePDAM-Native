<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function view()
    {
        $data['kegiatan'] = $this->M_kegiatan->SemuaData();
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/view', $data);
        $this->load->view('guest/template/script');
    }

    public function detail($id)
    {
        $data['kegiatan'] = $this->M_kegiatan->get_id($id);
        $this->load->view('guest/template/header');
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/detail_kegiatan', $data);
        $this->load->view('guest/template/script');
    }

    public function add()
    {
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/add');
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
            $deskripsi = $this->input->post('deskripsi', TRUE);

            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'gambar' => $gambar,
            );
            $this->db->insert('kegiatan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!
            </div>');
            redirect('Kegiatan/view');
        }
    }

    public function edit($id)
    {
        $data['kegiatan'] = $this->M_kegiatan->get_id($id);
        $this->load->view('guest/template/navbar');
        $this->load->view('guest/kegiatan/edit', $data);
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
            $deskripsi = $this->input->post('deskripsi', TRUE);

            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
            );
            $this->db->where('id', $id);
            $this->db->update('kegiatan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!
            </div>');
            redirect('Kegiatan/view');
        } else {

            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $judul = $this->input->post('judul', TRUE);
            $deskripsi = $this->input->post('deskripsi', TRUE);

            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'gambar' => $gambar,
            );
            $this->db->where('id', $id);
            $this->db->update('kegiatan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!
            </div>');
            redirect('Kegiatan/view');
        }
    }

    public function delete($id)
    {
        $this->M_kegiatan->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus...
            </div>');
        redirect('Kegiatan/view');
    }
}
