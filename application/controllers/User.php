<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminm');
        $this->load->model('m_wp');
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $q = "SELECT * FROM lapor_aduan WHERE id_user =  $id";

        $data['data_selesai'] = $this->db->query($q)->result();
        $data['data_tipe_soal'] = $this->adminm->getAllData('tbl_tipe_soal');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/kuisioner', $data);
        $this->load->view('templates/footer');
    }

    public function kuisioner()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $q = "SELECT * FROM lapor_aduan WHERE id_user =  $id";

        $data['data_selesai'] = $this->db->query($q)->result();
        $data['data_tipe_soal'] = $this->adminm->getAllData('tbl_tipe_soal');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuisioner', $data);
        $this->load->view('templates/footer');
    }
    public function isi_kuisioner()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['header_title'] = 'Kuisioner Kepuasan Pelanggan';
        $data['form_title'] = 'Kuisioner';
        $data['data_soal'] = $this->adminm->get_all_soal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/data_kuisioner', $data);
        $this->load->view('templates/footer');
    }


    public function lapor()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Lapor Pengaduan';
        $data['kategori'] = $this->input->post('kategori');
        $data['jenis'] = $this->input->post('jenis');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $data['image'] = $this->input->post('image');
        $idUser = $this->session->userdata('id_user');

        $id = (int) $idUser;
        $data['id_user'] = $id;
        $now = date('Y-m-d H:i:s');


        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis Pengaduan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('image', 'Sisipkan foto');
        $k = htmlspecialchars($this->input->post('kategori', true));
        $j = htmlspecialchars($this->input->post('jenis', true));
        $kategori = $this->m_wp->get_jenis($k);
        $jenis = $this->m_wp->get_jenis($j);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/lapor', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_alternatif' => $id,
                'id_user' => $id,
                'kategori' => $kategori[0]->nm,
                'jenis' => $jenis[0]->nm,
                'deskripsi' => $this->input->post('deskripsi', true),
                'image' => $this->upload(),
                'status' => "Belum Diproses",
                'is_kuisioner' => "True",
                'date_create' => $now
            ];
            $this->db->insert('lapor_aduan', $data);
            $data1 = [
                'id_alternatif' => $id,
                'tgl_masuk' => $now
            ];
            $this->db->insert('tbl_alternatif', $data1);
            $data2 = [
                'id_nilai_alternatif' => $this->m_wp->id_nilai_alternatif(),
                'id_alternatif' => $id,
                'id_kriteria' => "KR-00001",
                'id_sub_kriteria' => $k,
                'tgl_masuk' => $now
            ];
            $this->db->insert('tbl_nilai_alternatif', $data2);
            $data3 = [
                'id_nilai_alternatif' => $this->m_wp->id_nilai_alternatif(),
                'id_alternatif' => $id,
                'id_kriteria' => "KR-00002",
                'id_sub_kriteria' => $j,
                'tgl_masuk' => $now
            ];
            $this->db->insert('tbl_nilai_alternatif', $data3);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Data Pengaduan Disimpan</div>'
            );
            redirect('user/lapor');
        }
    }


    public function laporan()
    {

        $data['title'] = 'Laporan Pengaduan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $q = "SELECT * FROM lapor_aduan WHERE id_user =  $id  AND done != 1";

        $data['laporpeng'] = $this->db->query($q)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function responuser($id)
    {
        $data['title'] = 'Balas Pengaduan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['lapor_aduan'] = $this->db->get_where('lapor_aduan', ['id' => $id])->row_array();

        $balasan = $this->input->post('balasan');
        $id_user = $this->input->post('idku');
        $now = date('Y-m-d H:i:s');

        $this->form_validation->set_rules('balasan', 'Balasan', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/respon', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'balasan_user' => htmlspecialchars($this->input->post('balasan', true)),
                'tgl_updateuser' => $now

            ];

            $this->db->where('id ', $id_user);
            $this->db->update('lapor_aduan', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-succes s" rol e= "a ler t">Respon Pengaduan Disimpan</div>'
            );
            redirect('user/laporan');
        }
    }
    public function laporan_selesai()
    {

        $data['title'] = 'Pengaduan - Selesai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $q = "SELECT * FROM lapor_aduan WHERE id_user =  $id  AND done =1";

        $data['lapordone'] = $this->db->query($q)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/laporan_done', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $upload_path = './assets/img/upload_lapor/';

        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = 'Laporan' . '-' . date('YmdHis');
        $config['overwrite']            = true;
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            return '';
        } else {
            $datafile = $this->upload->data();
            return $datafile['file_name'];
        }
    }
}
