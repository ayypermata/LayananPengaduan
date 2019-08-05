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

        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['header'] = 'Data Alternatif';
        $data['header_title'] = 'Data Alternatif';
        $data['active_wp'] = 'active';
        $data['data_alternatif'] = $this->m_wp->getAllData('tbl_alternatif');
        $data['data_kriteria'] = $this->m_wp->getAllData('tbl_kriteria');
        $data['data_nilai'] = $this->m_wp->getAllData('tbl_nilai_alternatif');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('wp/data_wp', $data);
        $this->load->view('templates/footer');
    }


    function prosses_nilai()
    {

        $id_delete['id_alternatif'] = $this->input->post('id_alternatif');
        $id_delete['id_kriteria'] = $this->input->post('id_kriteria');

        $this->m_wp->deleteData('tbl_nilai_alternatif', $id_delete);

        $data['id_nilai_alternatif'] = $this->m_wp->id_nilai_alternatif();
        $data['id_alternatif'] = $this->input->post('id_alternatif');
        $data['id_kriteria'] = $this->input->post('id_kriteria');
        $data['id_sub_kriteria'] = $this->input->post('id_sub_kriteria');

        $this->m_wp->insertData('tbl_nilai_alternatif', $data);
        redirect("wpc/data_wp");

        // $id_delete = array(
        //     'id_alternatif' => $this->input->post('id_alternatif'),
        //     'id_kriteria' => $this->input->post('id_kriteria'),
        // );
        // $this->m_wp->deleteData('tbl_nilai_alternatif', $id_delete);
        // $data = array(
        //     'id_nilai_alternatif' => $this->m_wp->id_nilai_alternatif(),
        //     'id_alternatif' => $this->input->post('id_alternatif'),
        //     'id_kriteria' => $this->input->post('id_kriteria'),
        //     'id_sub_kriteria' => $this->input->post('id_sub_kriteria'),
        // );
        // $this->m_wp->insertData('tbl_nilai_alternatif', $data);
        // redirect("wpc/data_wp");
    }

    function proses_hapus_wp()
    {
        $id['id_wp'] = $this->uri->segment(3);
        $this->m_wp->deleteData('tbl_wp', $id);
        redirect("wpc/data_wp");
    }
}
