<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_admin');
        $this->load->model('m_anggota');
        $this->load->model('m_cari');
        $this->load->model('m_uploadmodul');
    }
    
    public function index(){
        $dataanggota = $this->m_anggota->untukAPI("anggota");

        $data = array(
            "datam" => $dataanggota
        );
        $this->load->view('Anggota/index', $data);
    }
}
