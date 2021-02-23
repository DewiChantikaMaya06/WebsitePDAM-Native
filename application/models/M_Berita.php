<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Berita extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('berita')->result_array();
    }

    public function proses_add()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'gambar' => $this->input->post('gambar'),
            'sumber' => $this->input->post('sumber'),
            'isi' => $this->input->post('isi'),
        ];

        $this->db->insert('berita', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }

    public function get_id($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }

    public function proses_edit()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'gambar' => $this->input->post('gambar'),
            'sumber' => $this->input->post('sumber'),
            'isi' => $this->input->post('isi'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita', $data);
    }
}
