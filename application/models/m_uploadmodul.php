<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_uploadmodul extends CI_Model
{
	public function Tambah($data)
	{
		return $this->db->insert('upload', $data);
	}
	public function TambahPerlombaan($data)
	{
		return $this->db->insert('perlombaan', $data);
	}
}
