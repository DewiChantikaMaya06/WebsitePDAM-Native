<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pendaftaran extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('pendaftaran')->result_array();
    }

    public function proses_add()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat' => $this->input->post('alamat'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'no_hp' => $this->input->post('no_hp'),
            'gambar' => $this->input->post('gambar'),
        ];

        $this->db->insert('pendaftaran', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pendaftaran');
    }

    public function get_id($id)
    {
        return $this->db->get_where('pendaftaran', ['id' => $id])->row_array();
    }

    public function proses_edit()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat' => $this->input->post('alamat'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'no_hp' => $this->input->post('no_hp'),
            'gambar' => $this->input->post('gambar'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendaftaran', $data);
    }
}
