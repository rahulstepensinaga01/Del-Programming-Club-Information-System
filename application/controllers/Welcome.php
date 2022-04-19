<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_cari');
	}
	public function index()
	{
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required');

		$pengumuman['pengumuman'] = $this->db->get('pengumuman')->result_array();
		$pengumuman['title'] = 'Del Programming Club';
		$this->load->view('Welcome/Welcome', $pengumuman);

		// //validasi
		// if ($this->form_validation->run() == false) {
		// 	$data['title2'] = 'Login';
		// 	$this->load->view('Welcome/login', $data);
		// } else {
		// 	$this->login();
		// }
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('Welcome/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($user != NULL) {
			if ($password == $user['password']) {
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('Admin');
				} else if ($user['role_id'] == 2) {
					redirect('Anggota/halaman_anggota');
				} else {
					echo "Maaf, anda tidak bisa melakukan login. Akun anda sedang diproses..";
				}
			} 
			else {
				$this->session->set_flashdata('email', 'Salah');

				redirect('Welcome/login');
			}
		} 
		else {
			$this->session->set_flashdata('email', 'Salah');

			redirect('Welcome/login');
		}
	}
	public function registrasi()
	{

		//validasi

		$this->form_validation->set_rules('nim', 'NIM', 'required|trim');
		$this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email ini sudah pernah dipakai!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|min_length[3]|matches[password]');
		$this->form_validation->set_rules('motivasi', 'Motivasi', 'required|min_length[3]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Daftar Delpro';
			$this->load->view('Welcome/registrasi', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim', true),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'prodi' => $this->input->post('prodi'),
				'angkatan' => $this->input->post('angkatan'),

				'motivasi' => $this->input->post('motivasi'),
				'role_id' => 3

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', 'Dilakukan');
			redirect('Welcome');
		}
	}

	public function DaftarAnggota()
	{
		$member['Anggota'] = $this->db->get('user')->result_array();
		$member['title'] = "Daftar Anggota";
		if ($this->input->post('carianggota')) {
			$member['Anggota'] = $this->m_cari->carianggota();
		}
		$this->load->view('Welcome/DaftarAnggota', $member);
	}
	public function Hapus($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('user');
		redirect('Welcome/DaftarAnggota');
	}

	public function Detail($nim)
	{
		$member['Anggota'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
		$member['title'] = 'Detail ';
		$this->load->view('Welcome/Detail', $member);
	}

	public function DetailPengumuman($id_pengumuman)
	{
		$pengumuman['pengumuman'] = $this->db->get_where('pengumuman', ['id_pengumuman' => $id_pengumuman])->row_array();
		$this->load->view('Welcome/DetailPengumuman', $pengumuman);
	}
	public function cari()
	{
		$this->load->model('m_cari');
		$cari = $this->input->post('cari');

		$data['cari'] = $this->m_cari->get_keyword($cari);
		$this->load->view('Welcome/DaftarAnggota', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		echo 'alert("Sukses! Anda berhasil logout."); window.location.href="' . base_url('Welcome') . '";     
   ';
	}
	public function events()
	{

		$data['title'] = "Events";
		$this->load->view('Welcome/events', $data);
	}
	public function aboutus()
	{

		$data['title'] = "About Us";
		$this->load->view('Welcome/aboutus', $data);
	}
	public function dokumentasi()
	{

		$data['title'] = "Dokumentasi";
		$this->load->view('Welcome/dokumentasi', $data);
	}
	public function visimisi()
	{

		$data['title'] = "Visi & Misi";
		$this->load->view('Welcome/visimisi', $data);
	}
}
