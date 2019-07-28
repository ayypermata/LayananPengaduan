<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_cetak');
        $this->load->model('m_aduan');
        $this->load->library('cfpdf');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if (null !== $this->session->userdata('email')) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('admin/index');
        }
    }

    public function laporan()
    {
        $data['title'] = 'Laporan Pengaduan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $q = "SELECT * FROM lapor_aduan WHERE done != 1";

        $data['laporpeng'] = $this->db->query($q)->result();


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

    public function cetak()
    {

        if ($this->session->userdata('login') == TRUE) {

            $pdf = new FPDF('L', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->Image('assets/img/logo.png', 20, 5, 26, 20, 'png', '', 'C', true, 150, '', false, false, 0, false, false, false);

            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(45);
            $pdf->Cell(0, 0, 'Laporan Pengaduan PT. Pos Indonesia', 0, 0, 'C');
            $pdf->Ln(20);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetFillColor(100, 0, 0);
            $pdf->SetTextColor(255);
            $pdf->SetDrawColor(0, 0, 0);
            $header = array('No', 'ID', 'Jenis Pengaduan', 'Deskripsi Pengaduan', 'Balasan', 'Status');
            // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
            $w = array(6, 9, 35, 120, 70, 40);
            for ($i = 0; $i < count($header); $i++)
                $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
            $pdf->Ln();
            // Data
            $fill = false;
            $pdf->SetFillColor(224, 235, 255);
            $pdf->SetTextColor(0);
            $pdf->SetFont('');
            $no = 1;
            foreach ($this->m_cetak->tampilkan() as $row) :

                $pdf->Cell($w[0], 6, $no++, 'LR', 0, 'C', $fill);
                $pdf->Cell($w[1], 6, $row->id, 'LR', 0, 'C', $fill);
                $pdf->Cell($w[2], 6, $row->jenis, 'LR', 0, 'L', $fill);
                $pdf->Cell($w[3], 6, $row->deskripsi, 'LR', 0, 'L', $fill);
                $pdf->Cell($w[4], 6, $row->balasan, 'LR', 0, 'L', $fill);
                $pdf->Cell($w[5], 6, $row->status, ' LR ', 0, ' L ', $fill);
                $pdf->Ln();
                $fill = !$fill;
            endforeach;
            $pdf->Cell(array_sum($w), 0, ' ', ' T ');

            $pdf->Output();
        } else {
            redirect('admin');
        }
    }
}
