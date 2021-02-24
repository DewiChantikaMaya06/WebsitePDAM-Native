<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tagihan extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tagihan')->result_array();
    }

    public function get_id($id)
    {
        return $this->db->get_where('tagihan', ['id' => $id])->row_array();
    }

    public function CariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('no_sambungan', $keyword);
        $this->db->or_like('no_pelanggan', $keyword);
        return $this->db->get('tagihan')->result_array();
    }
}
