<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('adminm');
    }
    /*===========================================================================================================================================*/
    /*===========================================================================================================================================*/

    public function data_laporan()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $status = $this->input->post('status');

        $data['header_title'] = 'Data Laporan';
        $data['form_title'] = 'Tabel Data Laporan';
        $data['data_laporan'] = $this->adminm->get_status_data_pengambilan($status);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/data_laporan', $data);
        $this->load->view('templates/footer');
    }
    // public function data_tanggal()
    // {
    //     $tanggal = $this->input->post('tgl_masuk');
    //     $data['tanggal_masuk'] = $this->adminm->get_tanggal_masuk($tanggal);

    // }
}
