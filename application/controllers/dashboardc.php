<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboardc extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('adminm');
    }
    public function index()
    {
        $id = $this->session->userdata('ID');
        $data = array(
            'header_title' => 'Dashboard',
            'form_title' => 'Selamat Datang',

            'active_dashboard' => 'active',
            'data_pengambilan' => $this->adminm->get_data_pengambilan_customer($id),
            'data_tipe_soal' => $this->adminm->getAllData('tbl_tipe_soal'),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('welcome_message');
        $this->load->view('elements/footer');
    }

    public function kuisioner()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'header_title' => 'Dashboard',
            'form_title' => 'Selamat Datang',

            'active_dashboard' => 'active',
            'data_soal' => $this->adminm->get_all_soal(),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('kuisioner/data_kuisioner');
        $this->load->view('templates/footer');
    }

    public function proses_kuisioner()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $data['id_user'] = $id;

        $data_soal = $this->adminm->getAllData('tbl_soal');
        $id_user = $this->input->post('id_user');
        foreach ($data_soal as $row) {
            $data = array(

                'id_user' => $this->session->userdata('id_user'),
                'id_soal' => $row->id_soal,
                'nilai_jawaban_soal' => $this->input->post('jawaban_soal' . $row->id_soal),
            );
            $this->adminm->insertData('tbl_jawaban_soal', $data);
        }


        $id2['id_user'] = $id_user;
        $data2 = array(
            'is_kuisioner' => 'False',
        );

        $this->db->where('id_user', $id);
        $this->db->update('lapor_aduan', $data2);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Data Kuisioner Disimpan, Terima Kasih</div>'
        );
        redirect('user/index');
    }
}
