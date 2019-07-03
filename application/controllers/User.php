<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function lapor()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Lapor Pengaduan';
        $data['jenis'] = $this->input->post('jenis');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $data['image'] = $this->input->post('image');

        $idUser = $this->session->userdata('id_user');
        $id = (int) $idUser;
        $data['id_user'] = $id;

        $this->form_validation->set_rules('jenis', 'Jenis Pengaduan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('image', 'Sisipkan foto');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/lapor', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_user' => $id,
                'jenis' => htmlspecialchars($this->input->post('jenis', true)),
                'deskripsi' => $this->input->post('deskripsi', true),
                'image' => $this->upload(),
                'status' => "Belum Diproses",
                'date_create' => time()
            ];

            $this->db->insert('lapor_aduan', $data);
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

            // $idku = $this->input->post('id_user');
            $this->db->where('id ', $id_user);
            $this->db->update('lapor_aduan', $data);

            // $this->db->set('balasan_user', $balasan);
            // $this->db->set('tgl_updateuser', date());
            // $this->db->where('id', $id_user);
            // $this->db->update('lapor_aduan');
            // var_dump($this->db->last_query());
            // die();

            $this->session->set_flashdata(
                'message',
                '<div class=" alert aler  t -succ es s" rol e= "a ler t">Respon Pengaduan Disimpan</div>'
            );
            redirect('user/laporan');
        }
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
