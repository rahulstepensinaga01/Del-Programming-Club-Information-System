<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        // $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $pengumuman['perlo'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();

        $pengumuman['perlombaan'] = $this->db->get('perlombaan')->result_array();

        $pengumuman['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $pengumuman['title'] = 'Dashboard';
        $pengumuman['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Anggota/halaman_anggota', $pengumuman);

        // //validasi
        // if ($this->form_validation->run() == false) {
        // 	$data['title2'] = 'Login';
        // 	$this->load->view('Welcome/login', $data);
        // } else {
        // 	$this->login();
        // }
    }
    public function halaman_anggota()
    {

        $data['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $data['perlo'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['upload'] = $this->db->get_where('upload', ['id_upload' => $this->session->userdata('id_upload')])->row_array();
        $data['perlombaan'] = $this->db->get('perlombaan')->result_array();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] =  $this->db->get('user')->result_array();
        $data['title'] = 'Del Programming Club';
        $this->load->view('Anggota/halaman_anggota', $data);
    }
    public function lihatpengumuman()
    {
        $this->load->model('m_cari');

        $pengumuman['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pengumuman['pengumuman'] = $this->db->get_where('pengumuman', ['judul_pengumuman' => $this->session->userdata('judul_pengumuman')])->row_array();
        $pengumuman['pengumuman2'] = $this->db->get('pengumuman')->result_array();
        $pengumuman['cari'] = $this->db->get('pengumuman')->result_array();
        $pengumuman['title'] = 'Pengumuman';
        if ($this->input->post('caripengumuman')) {
            $pengumuman['pengumuman2'] = $this->m_cari->caripengumuman();
        }
        $this->load->view('Anggota/lihatpengumuman', $pengumuman);
    }

    public function lihattutorial()
    {

        $this->load->model('m_cari');
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['upload'] = $this->db->get_where('upload', ['id_upload' => $this->session->userdata('id_upload')])->row_array();
        $member['title'] = "Tutorial";
        $member['Modul'] = $this->db->get('upload')->result_array();
        if ($this->input->post('carimodul')) {
            $member['Modul'] = $this->m_cari->carimodul();
        }
        $this->load->view('Anggota/lihatmodul', $member);
    }
    public function DetailPengumuman($id_pengumuman)
    {

        $pengumuman['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pengumuman['title'] = 'Del Programming Club';
        $pengumuman['pengumuman'] = $this->db->get_where('pengumuman', ['id_peng' => $id_pengumuman])->row_array();
        $this->load->view('Anggota/DetailPengumuman', $pengumuman);
    }
    public function DaftarAnggota()
    {
        $this->load->model('m_cari');
        $member['title'] = "Daftar Anggota";
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get('user')->result_array();
        if ($this->input->post('carianggota')) {
            $member['Anggota'] = $this->m_cari->carianggota();
        }
        $this->load->view('Anggota/DaftarAnggota', $member);
    }
    public function Detail($nim)
    {
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
        $member['title'] = 'Detail ';
        $this->load->view('Anggota/Detail', $member);
    }
    public function cari()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('cari');

        $data['cari'] = $this->m_cari->carianggota($cari);
        $this->load->view('Anggota/DaftarAnggota', $data);
    }
    public function edit_profile($nim)
    {
        $this->load->model('m_anggota');
        $data['title'] = "Edit Profile";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nim'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
        $where = array('nim' => $nim);
        $data['anggota'] = $this->m_anggota->edit_data($where, 'user')->result();
        $this->load->view('Anggota/edit_profile', $data);
    }
    public function update()
    {
        $this->load->model('m_anggota');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $prodi = $this->input->post('prodi');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'password' => $password,
            'prodi' => $prodi
            // 'foto' => $nama

        );

        $where = array(
            'user_id' => $id
        );

        $this->m_anggota->update_data($where, $data, 'user');
        $this->session->set_flashdata('edit', '<div class="row mt-3">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            Berhasil mengupdate profile!
        </div>
    </div>
    </div>');
        redirect('Anggota/halaman_anggota');
    }
    public function DaftarTools()
    {
        $this->load->model('m_cari');
        $member['title'] = "Daftar Tools";
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $member['tools'] = $this->db->get('tools')->result_array();
        if ($this->input->post('caritools')) {
            $member['tools'] = $this->m_cari->caritools();
        }
        $this->load->view('Anggota/DaftarTools', $member);
    }

    public function TambahKomentar()
    {
        $data = [
            'nama_komentar' => $this->input->post('nama_komentar', true),
            'isi_komentar' => $this->input->post('isi_komentar', true),
            'judul_modul' => $this->input->post('judul_modul', true)
        ];

        $this->db->insert('komentar', $data);
        $this->session->set_flashdata('message', 'Dilakukan');
        redirect('Anggota/halaman_anggota');
    }
    public function DaftarPerlombaan()
    {
        $perlombaan['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $perlombaan['perlombaan'] = $this->db->get('perlombaan')->result_array();
        $this->load->view('Anggota/DaftarPerlombaan', $perlombaan);
    }

    public function cariperlombaan()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('cariperlombaan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lomba'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();

        $data['perlombaan'] = $this->m_cari->cariperlombaan($cari);
        $this->load->view('Anggota/DaftarPerlombaan', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/login');
    }
}
