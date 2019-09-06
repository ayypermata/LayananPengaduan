<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('adminm');
    }

    public function data_laporan()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $status = $this->input->post('status');

        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['header_title'] = 'Data Laporan Per Status';
        $data['header_title2'] = 'Data Laporan Per Tanggal';
        $data['form_title'] = 'Tabel Data Laporan';
        $data['data_laporan'] = $this->adminm->get_status_data_pengambilan($status);
        $data['data_per_tanggal'] = $this->adminm->get_laporan_per_tanggal($tanggal_awal, $tanggal_akhir);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/data_laporan', $data);
        $this->load->view('templates/footer');
    }
}
