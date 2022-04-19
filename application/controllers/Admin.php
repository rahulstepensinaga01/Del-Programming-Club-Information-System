<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->model('m_cari');

        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['pengumuman'] = $this->db->get('pengumuman')->result_array();

        $member['Anggota'] = $this->db->get('user')->result_array();
        if ($this->input->post('carianggota')) {
            $member['Anggota'] = $this->m_cari->carianggota();
        }
        $this->load->view('Admin/halaman_admin', $member);


        // //validasi
        // if ($this->form_validation->run() == false) {
        // 	$data['title2'] = 'Login';
        // 	$this->load->view('Welcome/login', $data);
        // } else {
        // 	$this->login();
        // }
    }
    public function halaman_admin()
    {

        $data['Anggota'] = $this->db->get('user')->result_array();

        $data['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $data['title'] = 'Del Programming Club';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Admin/halaman_admin', $data);
    }


    public function lihatpengumuman()
    {

        $this->load->model('m_cari');

        $pengumuman['user'] = $this->db->get_where('pengumuman', ['judul_pengumuman' => $this->session->userdata('judul_pengumuman')])->row_array();
        $pengumuman['pengumuman'] = $this->db->get('pengumuman')->result_array();
        if ($this->input->post('caripengumuman')) {
            $member['pengumuman'] = $this->m_cari->caripengumuman();
        }
        $this->load->view('Admin/lihatpengumuman', $pengumuman);
    }
    public function TambahPengumuman()
    {
        $this->form_validation->set_rules('waktu_pengumuman', 'waktu_pengumuman', 'required');
        $this->form_validation->set_rules('judul_pengumuman', 'judul_pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'isi_pengumuman', 'required');
        $this->form_validation->set_rules('tempat_pengumuman', 'tempat_pengumuman', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Pengumuman';
            $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

            $this->load->view('Admin/TambahPengumuman', $data);
        } else {
            $data = [
                'waktu_pengumuman' => $this->input->post('waktu_pengumuman', true),
                'judul_pengumuman' => $this->input->post('judul_pengumuman', true),
                'isi_pengumuman' => $this->input->post('isi_pengumuman', true),
                'tempat_pengumuman' => $this->input->post('tempat_pengumuman', true),
            ];

            $this->db->insert('pengumuman', $data);
            $this->session->set_flashdata('message', 'Dilakukan');
            redirect('Admin/DaftarAnggota');
        }
    }
    public function DetailPengumuman($id_pengumuman)
    {
        $pengumuman['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pengumuman['title'] = 'Del Programming Club';
        $pengumuman['pengumuman'] = $this->db->get_where('pengumuman', ['id_pengumuman' => $id_pengumuman])->row_array();
        $this->load->view('Anggota/DetailPengumuman', $pengumuman);
    }
    public function DaftarAnggota()
    {
        $this->load->model('m_cari');

        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get('user')->result_array();
        if ($this->input->post('carianggota')) {
            $member['Anggota'] = $this->m_cari->carianggota();
        }


        $this->load->view('Admin/DaftarAnggota', $member);
    }
    public function Detail($nim)
    {
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
        $member['title'] = 'Detail ';
        $this->load->view('Admin/Detail', $member);
    }
    public function Detailregister($nim)
    {
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
        $member['title'] = 'Detail Register';
        $this->load->view('Admin/Detailregister', $member);
    }

    public function Detail_pengumuman($id_peng)
    {
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['pengumuman'] = $this->db->get_where('pengumuman', ['id_peng' => $id_peng])->row_array();
        $member['title'] = 'Detail Pengumuman';
        $this->load->view('Admin/Detailpengumuman', $member);
    }
    public function cari()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('cari');

        $data['cari'] = $this->m_cari->get_keyword($cari);
        $this->load->view('Admin/DaftarAnggota', $data);
    }
    public function caripengumuman()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('caripengumuman');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pengumuman'] = $this->m_cari->caripengumuman($cari);
        $this->load->view('Admin/lihatpengumuman', $data);
    }
    public function edit_anggota($nim)
    {
        $this->load->model('m_admin');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nim'] = $this->db->get_where('user', ['nim' => $nim])->row_array();
        $where = array('nim' => $nim);
        $data['anggota'] = $this->m_admin->edit_data($where, 'user')->result();

        $this->load->view('Admin/edit_anggota', $data);
    }
    public function edit_pengumuman($id_peng)
    {
        $this->load->model('m_admin');
        $data['user'] = $this->db->get_where('pengumuman', ['judul_pengumuman' => $this->session->userdata('judul_pengumuman')])->row_array();

        $data['id_peng'] = $this->db->get_where('pengumuman', ['id_peng' => $id_peng])->row_array();
        $where = array('id_peng' => $id_peng);
        $data['pengumuman'] = $this->m_admin->edit_data($where, 'pengumuman')->result();
        $this->load->view('Admin/edit_pengumuman', $data);
    }
    public function Hapus($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('user');
        $this->session->set_flashdata('hapus', 'Dilakukan');
        redirect('Admin/DaftarAnggota');
    }
    public function Hapuspengumuman($id_peng)
    {
        $this->db->where('id_peng', $id_peng);
        $this->db->delete('pengumuman');
        $this->session->set_flashdata('hapus', 'Terhapus');
        redirect('Admin/lihatpengumuman');
    }
    public function update_anggota()
    {
        $this->load->model('m_admin');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|min_length[3]|matches[password]');

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $prodi = $this->input->post('prodi');
        $angkatan = $this->input->post('angkatan');
        $role = $this->input->post('role_id');
        // $foto = $this->input->post('foto');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'password' => $password,
            'prodi' => $prodi,
            'role_id' => $role,
            'angkatan' => $angkatan
            // 'foto' => $nama

        );

        $where = array(
            'user_id' => $id
        );

        $this->m_admin->update_data($where, $data, 'user');
        $this->session->set_flashdata('edit', 'Dilakukan');
        redirect('Admin/DaftarAnggota');
    }
    public function update_pengumuman()
    {
        $this->load->model('m_admin');
        $id_peng = $this->input->post('id_peng');
        $judul_pengumuman = $this->input->post('judul_pengumuman');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $waktu_pengumuman = $this->input->post('waktu_pengumuman');
        $tempat_pengumuman = $this->input->post('tempat_pengumuman');


        $data = array(
            'judul_pengumuman' => $judul_pengumuman,
            'isi_pengumuman' => $isi_pengumuman,
            'waktu_pengumuman' => $waktu_pengumuman,
            'tempat_pengumuman' => $tempat_pengumuman


        );

        $where = array(
            'id_peng' => $id_peng
        );

        $this->m_admin->update_data($where, $data, 'pengumuman');
        $this->session->set_flashdata('edit', 'Dilakukan');
        redirect('Admin/lihatpengumuman');
    }
    public function lihatakundaftar()
    {
        $this->load->model('m_cari');
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get('user')->result_array();
        if ($this->input->post('carianggota')) {
            $member['Anggota'] = $this->m_cari->carianggota();
        }
        $this->load->view('Admin/lihatakundaftar', $member);
    }
    public function DaftarTools()
    {
        $this->load->model('m_cari');
        $member['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $member['title'] = "Daftar Tools";
        $member['tools'] = $this->db->get('tools')->result_array();
        if ($this->input->post('caritools')) {
            $member['tools'] = $this->m_cari->caritools();
        }
        $this->load->view('Admin/DaftarTools', $member);
    }
    public function DetailTools($id_tools)
    {
        $member['tools'] = $this->db->get_where('tools', ['id_tools' => $id_tools])->row_array();
        $member['title'] = 'Detail Tools';
        $this->load->view('Admin/DetailTools', $member);
    }
    public function TambahTools()
    {
        $this->form_validation->set_rules('nama_tools', 'nama_tools', 'required');
        $this->form_validation->set_rules('isi_tools', 'isi_tools', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Tools';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('Admin/TambahTools', $data);
        } else {
            $data = [
                'nama_tools' => $this->input->post('nama_tools', true),
                'isi_tools' => $this->input->post('isi_tools', true),
            ];

            $this->db->insert('tools', $data);
            $this->session->set_flashdata('message', 'Dilakukan');
            redirect('Admin/DaftarAnggota');
        }
    }
    public function Hapus_tools($id_tools)
    {
        $this->db->where('id_tools', $id_tools);
        $this->db->delete('tools');
        $this->session->set_flashdata('hapus', 'Terhapus');
        redirect('Admin/DaftarAnggota');
    }
    public function edit_tools($id_tools)
    {
        $this->load->model('m_admin');
        $data['title'] = "Edit Tools";
        $data['user'] = $this->db->get_where('tools', ['nama_tools' => $this->session->userdata('nama_tools')])->row_array();

        $data['id_tools'] = $this->db->get_where('tools', ['id_tools' => $id_tools])->row_array();
        $where = array('id_tools' => $id_tools);
        $data['tools'] = $this->m_admin->edit_data($where, 'tools')->result();
        $this->load->view('Admin/edit_tools', $data);
    }
    public function update_tools()
    {
        $this->load->model('m_admin');
        $id_tools = $this->input->post('id_tools');
        $nama_tools = $this->input->post('nama_tools');
        $isi_tools = $this->input->post('isi_tools');

        $data = array(
            'nama_tools' => $nama_tools,
            'isi_tools' => $isi_tools


        );

        $where = array(
            'id_tools' => $id_tools
        );

        $this->m_admin->update_data($where, $data, 'tools');
        $this->session->set_flashdata('edit', 'Dilakukan');
        redirect('Admin/DaftarTools');
    }
    public function edit_modul($id_upload)
    {
        $this->load->model('m_admin');
        $data['title'] = "Edit Modul";
        $data['user'] = $this->db->get_where('upload', ['judul_upload' => $this->session->userdata('judul_upload')])->row_array();

        $data['id_upload'] = $this->db->get_where('upload', ['id_upload' => $id_upload])->row_array();
        $where = array('id_upload' => $id_upload);
        $data['upload'] = $this->m_admin->edit_data($where, 'upload')->result();
        $this->load->view('Admin/edit_modul', $data);
    }
    public function update_modul()
    {
        $this->load->model('m_admin');
        $id_upload = $this->input->post('id_upload');
        $judul_upload = $this->input->post('judul_upload');
        $nama_upload = $this->input->post('nama_upload');
        $isi_upload = $this->input->post('isi_upload');

        $data = array(
            'judul_upload' => $judul_upload,
            'isi_upload' => $isi_upload,
            'nama_upload' => $nama_upload


        );

        $where = array(
            'id_upload' => $id_upload
        );

        $this->m_admin->update_data($where, $data, 'upload');
        $this->session->set_flashdata('edit', 'Dilakukan');
        redirect('Admin/Modul');
    }
    public function Modul()
    {

        $this->load->model('m_cari');
        $member['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $member['upload'] = $this->db->get_where('upload', ['id_upload' => $this->session->userdata('id_upload')])->row_array();
        $member['Modul'] = $this->db->get('upload')->result_array();
        if ($this->input->post('carimodul')) {
            $member['Modul'] = $this->m_cari->carimodul();
        }
        $this->load->view('Admin/Modul', $member);
    }
    public function Hapusmodul($id_modul)
    {
        $this->db->where('id_upload', $id_modul);
        $this->db->delete('upload');
        $this->session->set_flashdata('hapus', 'Terhapus');
        redirect('Admin/Modul');
    }

    public function TambahModul()
    {

        $this->load->model('m_uploadmodul');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf|jpg|jpeg|png|zip';
        $config['max_size']             = 0;
        $config['encrypt_name']             = TRUE;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('nama_upload')) {
            $error = array('error' => $this->upload->display_errors());
            $error['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

            $this->load->view('Admin/TambahModul', $error);
        } else {
            $upload_data = $this->upload->data();

            $data = array(
                'judul_upload' => $this->input->post('judul_upload', true),
                'isi_upload' => $this->input->post('isi_upload', true),
                'nama_upload' => $upload_data['file_name']
            );

            $this->m_uploadmodul->Tambah($data);
            redirect('Admin');
        }
    }

    public function download($id_upload)
    {
        $data = $this->db->get_where('upload', ['id_upload' => $id_upload])->row();
        // $this->load->function('force_download');
        force_download('uploads/' . $data->nama_upload, NULL);
    }
    
    public function TambahPerlombaan()
    {

        $this->load->model('m_uploadmodul');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf|jpg|jpeg|png|zip';
        $config['max_size']             = 0;
        $config['encrypt_name']             = TRUE;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_pendukung')) {
            $error = array('error' => $this->upload->display_errors());
            $error['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

            $this->load->view('Admin/TambahPerlombaan', $error);
        } else {
            $upload_data = $this->upload->data();

            $data = array(
                'nama_perlombaan' => $this->input->post('nama_perlombaan', true),
                'isi_perlombaan' => $this->input->post('isi_perlombaan', true),
                'file_pendukung' => $upload_data['file_name']
            );

            $this->m_uploadmodul->TambahPerlombaan($data);
            redirect('Admin');
        }
    }
    public function DaftarPerlombaan()
    {
        $perlombaan['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $perlombaan['perlombaan'] = $this->db->get('perlombaan')->result_array();
        $this->load->view('Admin/DaftarPerlombaan', $perlombaan);
    }
    public function cariperlombaan()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('cariperlombaan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lomba'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();

        $data['perlombaan'] = $this->m_cari->cariperlombaan($cari);
        $this->load->view('Admin/DaftarPerlombaan', $data);
    }
    public function Hapusperlombaan($id_perlombaan)
    {
        $this->db->where('id_perlombaan', $id_perlombaan);
        $this->db->delete('perlombaan');
        $this->session->set_flashdata('hapus', 'Terhapus');
        redirect('Admin/DaftarPerlombaan');
    }
    public function DaftarKomentar()
    {
        $komen['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $komen['perlombaan'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();

        $komen['komen'] = $this->db->get('komentar')->result_array();
        $this->load->view('Admin/DaftarKomentar', $komen);
    }
    public function carikomentar()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('carikomentar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komen'] = $this->db->get_where('komentar', ['id_komentar' => $this->session->userdata('id_komentar')])->row_array();
        $data['modul'] = $this->db->get_where('upload', ['id_upload' => $this->session->userdata('id_upload')])->row_array();
        $komen['perlombaan'] = $this->db->get_where('perlombaan', ['id_perlombaan' => $this->session->userdata('id_perlombaan')])->row_array();
        $data['komentar'] = $this->m_cari->carikomentar($cari);
        $this->load->view('Admin/DaftarKomentar', $data);
    }
    public function Hapuskomentar($id_komentar)
    {
        $this->db->where('id_komentar', $id_komentar);
        $this->db->delete('komentar');
        $this->session->set_flashdata('hapus', 'Terhapus');
        redirect('Admin/DaftarKomentar');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/login');
    }
}
