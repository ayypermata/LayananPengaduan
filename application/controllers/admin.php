<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_wp');
        $this->load->model('m_cetak');
        $this->load->model('adminm');
        $this->load->model('m_aduan');
        $this->load->library('cfpdf');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil_kuisioner()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['active_dashboard'] = 'active';
        $data['data_tipe_soal'] = $this->adminm->getAllData('tbl_tipe_soal');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/hasil_kuisioner', $data);
        $this->load->view('templates/footer');
    }

    public function laporan()
    {
        $data['title'] = 'Laporan Pengaduan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $q = "SELECT * FROM lapor_aduan WHERE done != 1";
        $data['laporpeng'] = $this->db->query($q)->result();

        $tanggal = $this->input->post('tanggal');
        $data['laporpeng'] = $this->adminm->get_data_pengaduan($tanggal);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan_admin', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_belumdiproses()
    {

        $data['title'] = 'Pengaduan - Belum Diproses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $q = "SELECT * FROM lapor_aduan WHERE Status = 'Belum Diproses'";

        $data['laporpeng'] = $this->db->query($q)->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan_admin', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_proses()
    {

        $data['title'] = 'Pengaduan - Sedang Diproses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $q = "SELECT * FROM lapor_aduan WHERE Status = 'Proses'";

        $data['laporpeng'] = $this->db->query($q)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan_admin', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_selesai()
    {

        $data['title'] = 'Pengaduan - Selesai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $q = "SELECT * FROM lapor_aduan WHERE done = 1";

        $data['laporpeng'] = $this->db->query($q)->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporandone_admin', $data);
        $this->load->view('templates/footer');
    }

    public function responPengaduan($id)
    {
        $data['title'] = 'Balas Pengaduan - Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['lapor_aduan'] = $this->db->get_where('lapor_aduan', ['id' => $id])->row_array();

        $data['status'] = $this->input->post('status');
        $data['balasan'] = $this->input->post('balasan');
        $now = date('Y-m-d H:i:s');

        $this->form_validation->set_rules('status', 'Status', 'trim');
        $this->form_validation->set_rules('balasan', 'Balasan', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/balasan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'balasan' => htmlspecialchars($this->input->post('balasan', true)),
                'status' => htmlspecialchars($this->input->post('status', true)),
                'tgl_updateadmin' => $now
            ];

            $idku = $this->input->post('id_user');
            $this->db->where('id ', $idku);
            $this->db->update('lapor_aduan', $data);


            $this->session->set_flashdata(
                'message',
                '<div class=" alert aler  t -succ es s" rol e= "a ler t">Respon Pengaduan Disimpan</div>'
            );
            redirect('admin/laporan');
        }
    }

    public function delete()
    {

        $this->m_aduan->hapus($this->uri->segment(3));

        redirect('admin/laporan');
    }


    public function done()
    {
        $this->m_aduan->done($this->uri->segment(3));

        redirect('user/isi_kuisioner');
    }
}
