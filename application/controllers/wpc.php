<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wpc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') != TRUE) {
            $this->session->set_flashdata('notif', 'LOGIN GAGAL USERNAME<br> ATAU<br> PASSWORD ANDA SALAH !');
            redirect('loginc');
        };
        $this->load->model('m_wp');
    }
    /*===========================================================================================================================================*/
    /* Data Alternatif */
    /*===========================================================================================================================================*/

    public function data_wp()
    {
        $data = array(
            'header' => 'Data Alternatif',
            'header_title' => 'Data Alternatif',

            'active_wp' => 'active',
            'data_alternatif' => $this->m_wp->getAllData('tbl_alternatif'),
            'data_kriteria' => $this->m_wp->getAllData('tbl_kriteria'),
        );

        $this->load->view('elements/headerv', $data);
        $this->load->view('pages/wp/data_wp');
        $this->load->view('elements/footerv');
    }


    function prosses_nilai()
    {
        $id_delete = array(
            'id_alternatif' => $this->input->post('id_alternatif'),
            'id_kriteria' => $this->input->post('id_kriteria'),
        );
        $this->m_wp->deleteData('tbl_nilai_alternatif', $id_delete);
        $data = array(
            'id_nilai_alternatif' => $this->m_wp->id_nilai_alternatif(),
            'id_alternatif' => $this->input->post('id_alternatif'),
            'id_kriteria' => $this->input->post('id_kriteria'),
            'id_sub_kriteria' => $this->input->post('id_sub_kriteria'),
        );
        $this->m_wp->insertData('tbl_nilai_alternatif', $data);
        redirect("wpc/data_wp");
    }

    function proses_hapus_wp()
    {
        $id['id_wp'] = $this->uri->segment(3);
        $this->m_wp->deleteData('tbl_wp', $id);
        redirect("wpc/data_wp");
    }
}
