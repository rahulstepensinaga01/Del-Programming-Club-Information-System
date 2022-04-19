<?php

class m_cari extends CI_Model
{
    public function carianggota()
    {
        $katakunci = $this->input->post('carianggota', true);
        $this->db->like('nim', $katakunci);
        $this->db->or_like('nama', $katakunci);
        $this->db->or_like('prodi', $katakunci);
        return $this->db->get('user')->result_array();
    }
    public function caritools()
    {
        $katakunci = $this->input->post('caritools', true);
        $this->db->like('nama_tools', $katakunci);
        $this->db->or_like('isi_tools', $katakunci);
        return $this->db->get('tools')->result_array();
    }
    public function caripengumuman()
    {
        $katakunci = $this->input->post('caripengumuman', true);
        $this->db->like('id_peng', $katakunci);
        $this->db->or_like('judul_pengumuman', $katakunci);
        $this->db->or_like('isi_pengumuman', $katakunci);
        $this->db->or_like('waktu_pengumuman', $katakunci);
        $this->db->or_like('tempat_pengumuman', $katakunci);
        return $this->db->get('pengumuman')->result_array();
    }
    public function cariperlombaan()
    {
        $katakunci = $this->input->post('cariperlombaan', true);
        $this->db->like('nama_perlombaan', $katakunci);
        $this->db->or_like('isi_perlombaan', $katakunci);
        return $this->db->get('perlombaan')->result_array();
    }
    public function carimodul()
    {
        $katakunci = $this->input->post('carimodul', true);
        $this->db->like('judul_upload', $katakunci);
        $this->db->or_like('isi_upload', $katakunci);
        $this->db->or_like('nama_upload', $katakunci);
        return $this->db->get('upload')->result_array();
    }
    public function carikomentar()
    {
        $katakunci = $this->input->post('carikomentar', true);
        $this->db->like('nama_komentar', $katakunci);
        $this->db->or_like('isi_komentar', $katakunci);
        return $this->db->get('komentar')->result_array();
    }
}
