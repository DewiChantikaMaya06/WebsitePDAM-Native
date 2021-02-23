<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kegiatan extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('kegiatan')->result_array();
    }

    public function proses_add()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'gambar' => $this->input->post('gambar'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];

        $this->db->insert('kegiatan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kegiatan');
    }

    public function get_id($id)
    {
        return $this->db->get_where('kegiatan', ['id' => $id])->row_array();
    }

    public function proses_edit()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'gambar' => $this->input->post('gambar'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kegiatan', $data);
    }
}
