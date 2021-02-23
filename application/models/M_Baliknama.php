<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Baliknama extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('baliknama')->result_array();
    }

    public function proses_add()
    {
        $data = [
            'nama_sebelumnya' => $this->input->post('nama_sebelumnya'),
            'nama_pengaju' => $this->input->post('nama_pengaju'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'gambar_ktp' => $this->input->post('gambar_ktp'),
            'gambar_rekening' => $this->input->post('gambar_rekening'),
        ];

        $this->db->insert('baliknama', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('baliknama');
    }

    public function get_id($id)
    {
        return $this->db->get_where('baliknama', ['id' => $id])->row_array();
    }

    public function proses_edit()
    {
        $data = [
            'nama_sebelumnya' => $this->input->post('nama_sebelumnya'),
            'nama_pengaju' => $this->input->post('nama_pengaju'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'gambar_ktp' => $this->input->post('gambar_ktp'),
            'gambar_rekening' => $this->input->post('gambar_rekening'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('baliknama', $data);
    }
}
