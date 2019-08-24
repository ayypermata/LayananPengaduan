<?php
defined('BASEPATH') or exit('No direct script access allowed');

class alternatifc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_wp');
    }
    /*===========================================================================================================================================*/
    /* Data Alternatif */
    /*===========================================================================================================================================*/

    public function data_alternatif()
    {

        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['header'] = 'Data Alternatif';
        $data['header_title'] = 'Data Alternatif';
        $data['data_alternatif'] =  $this->m_wp->getAllData('tbl_alternatif');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('alternatif/data_alternatif', $data);
        $this->load->view('templates/footer');
    }


    public function manage_alternatif()
    {
        $data1['title'] = 'Dashboard Admin';
        $data1['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id = $this->uri->segment(3);

        if ($id == '') {
            $data = array(
                'header' => 'Data Alternatif',
                'header_title' => 'Tambah Data Alternatif',

                'active_alternatif' => 'active',
                'id' => $this->m_wp->id_alternatif(),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('alternatif/manage_alternatif', $data);
            $this->load->view('templates/footer');
        } else {
            $id_alternatif['id_alternatif'] = $id;
            $data = array(
                'header' => 'Data Alternatif',
                'header_title' => 'Edit Data Alternatif',

                'active_alternatif' => 'active',
                'data_alternatif' => $this->m_wp->getSelectedData('tbl_alternatif', $id_alternatif),
            );

            $this->load->view('templates/header', $data1);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data1);
            $this->load->view('alternatif/manage_alternatif', $data);
            $this->load->view('templates/footer');
        }
    }

    function prosses_alternatif()
    {
        $key     = $this->input->post('id_alternatif');
        if ($key != '') {
            $data = array(
                'id_alternatif' => $this->input->post('id_alternatif'),
                'nm_alternatif' => $this->input->post('nm_alternatif'),
            );
            $this->m_wp->insertData('tbl_alternatif', $data);
        } elseif ($key == '') {
            $id['id_alternatif'] = $this->input->post('id');
            $data = array(
                'nm_alternatif' => $this->input->post('nm_alternatif'),
            );
            $this->m_wp->updateData('tbl_alternatif', $data, $id);
        }
        redirect("alternatifc/data_alternatif");
    }

    function proses_hapus_alternatif()
    {
        $id['id_alternatif'] = $this->uri->segment(3);
        $this->m_wp->deleteData('tbl_alternatif', $id);
        redirect("alternatifc/data_alternatif");
    }
}
