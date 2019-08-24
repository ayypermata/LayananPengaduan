<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kriteriac extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_wp');
    }
    /*===========================================================================================================================================*/
    /* Data Kriteria */
    /*===========================================================================================================================================*/

    public function data_kriteria()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['header'] = 'Data Kriteria';
        $data['header_title'] = 'Data Kriteria';
        $data['data_kriteria'] =  $this->m_wp->getAllData('tbl_kriteria');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kriteria/data_kriteria', $data);
        $this->load->view('templates/footer');
    }


    public function manage_kriteria()
    {

        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id = $this->uri->segment(3);
        if ($id == '') {
            $data['header'] = 'Data Kriteria';
            $data['header_title'] = 'Tambah Data Kriteria';
            $data['id'] = $this->m_wp->id_kriteria();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kriteria/manage_kriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $id_kriteria['id_kriteria'] = $id;
            $data['header'] = 'Data Kriteria';
            $data['header_title'] = 'Edit Data Kriteria';
            $data['data_kriteria'] = $this->m_wp->getSelectedData('tbl_kriteria', $id_kriteria);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kriteria/manage_kriteria', $data);
            $this->load->view('templates/footer');
        }
    }

    function prosses_kriteria()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $key     = $this->input->post('id_kriteria');
        if ($key != '') {
            $data = array(
                'id_kriteria' => $this->input->post('id_kriteria'),
                'kd_kriteria' => $this->input->post('kd_kriteria'),
                'nm_kriteria' => $this->input->post('nm_kriteria'),
                'bobot_kriteria' => $this->input->post('bobot_kriteria'),
            );
            $this->m_wp->insertData('tbl_kriteria', $data);
        } elseif ($key == '') {
            $id['id_kriteria'] = $this->input->post('id');
            $data = array(
                'kd_kriteria' => $this->input->post('kd_kriteria'),
                'nm_kriteria' => $this->input->post('nm_kriteria'),
                'bobot_kriteria' => $this->input->post('bobot_kriteria'),
            );
            $this->m_wp->updateData('tbl_kriteria', $data, $id);
        }
        redirect("kriteriac/data_kriteria");
    }

    function proses_hapus_kriteria()
    {
        $id['id_kriteria'] = $this->uri->segment(3);
        $this->m_wp->deleteData('tbl_kriteria', $id);
        redirect("kriteriac/data_kriteria");
    }


    public function sub_kriteria()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id = $this->uri->segment(3);
        $id_sub = $this->uri->segment(4);

        if ($id_sub == '') {
            $id_kriteria['id_kriteria'] = $id;

            $data['header'] = 'Data Sub Kriteria';
            $data['header_title'] = 'Kelola Data Sub Kriteria';
            $data['id'] = $this->m_wp->id_sub_kriteria();
            $data['data_kriteria'] = $this->m_wp->getSelectedData('tbl_kriteria', $id_kriteria);
            $data['data_sub_kriteria'] = $this->m_wp->getSelectedData('tbl_sub_kriteria', $id_kriteria);
        } else {
            $id_kriteria['id_kriteria'] = $id;
            $id_sub_kriteria['id_sub_kriteria'] = $id_sub;
            $data = array(
                'header' => 'Data Sub Kriteria',
                'header_title' => 'Kelola Data Sub Kriteria',

                'active_kriteria' => 'active',

                'data_kriteria' => $this->m_wp->getSelectedData('tbl_kriteria', $id_kriteria),
                'data_sub_kriteria' => $this->m_wp->getSelectedData('tbl_sub_kriteria', $id_kriteria),
                'detail_sub_kriteria' => $this->m_wp->getSelectedData('tbl_sub_kriteria', $id_sub_kriteria),
            );
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kriteria/manage_sub_kriteria', $data);
        $this->load->view('templates/footer');
    }

    function prosses_sub_kriteria()
    {
        $key     = $this->input->post('id_sub_kriteria');
        if ($key != '') {
            $data = array(
                'id_sub_kriteria' => $this->input->post('id_sub_kriteria'),
                'id_kriteria' => $this->input->post('id_kriteria'),
                'nm_sub_kriteria' => $this->input->post('nm_sub_kriteria'),
                'bobot_sub_kriteria' => $this->input->post('bobot_sub_kriteria'),
            );
            $this->m_wp->insertData('tbl_sub_kriteria', $data);
        } elseif ($key == '') {
            $id['id_sub_kriteria'] = $this->input->post('id');
            $data = array(
                'nm_sub_kriteria' => $this->input->post('nm_sub_kriteria'),
                'bobot_sub_kriteria' => $this->input->post('bobot_sub_kriteria'),
            );
            $this->m_wp->updateData('tbl_sub_kriteria', $data, $id);
        }
        redirect("kriteriac/sub_kriteria/" . $this->input->post('id_kriteria'));
    }


    function proses_hapus_sub_kriteria()
    {
        $id['id_sub_kriteria'] = $this->uri->segment(4);
        $id_kriteria = $this->uri->segment(3);
        $this->m_wp->deleteData('tbl_sub_kriteria', $id);
        redirect("kriteriac/sub_kriteria/" . $id_kriteria);
    }
}
