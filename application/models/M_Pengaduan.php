<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengaduan extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('pengaduan')->result_array();
    }

    public function proses_add()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'no_pelanggan' => $this->input->post('no_pelanggan'),
            'jenis' => $this->input->post('jenis'),
            'isi_pengaduan' => $this->input->post('isi_pengaduan'),
        ];

        $this->db->insert('pengaduan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengaduan');
    }

    public function get_id($id)
    {
        return $this->db->get_where('pengaduan', ['id' => $id])->row_array();
    }

}
