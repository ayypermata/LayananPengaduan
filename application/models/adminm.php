<?php

class adminm extends CI_Model
{

    /*===========================================================================================================================================*/
    /* Global Script */
    /*===========================================================================================================================================*/

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    public function getSelectedData($table, $data)
    {
        return $this->db->get_WHERE($table, $data)->result();
    }

    function updateData($table, $data, $field_key)
    {
        $this->db->update($table, $data, $field_key);
    }

    function deleteData($table, $data)
    {
        $this->db->delete($table, $data);
    }

    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    /*===========================================================================================================================================*/
    /* Login */
    /*===========================================================================================================================================*/

    public function id_user()
    {
        $q = $this->db->query("select MAX(RIGHT(id_user,4)) as id_max from tbl_user");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%04s", $tmp);
            }
        } else {
            $id = "0001";
        }
        return "US-" . $id;
    }

    public function id_customer()
    {
        $q = $this->db->query("select MAX(RIGHT(id,5)) as id_max from user");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                // $id = sprintf("%05s", $tmp);
            }
        } else {
            $id = "00001";
        }
        return $tmp;
    }


    function get_status_data_pengambilan($status)
    {
        return $this->db->query("
            SELECT *
            FROM lapor_aduan 
            WHERE status = '$status'
        ")->result();
    }

    function get_tanggal_masuk($tanggal_awal)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_alternatif 
            WHERE tgl_masuk = '$tanggal_awal'
        ")->result();
    }
    function get_data_pengaduan($tanggal)
    {
        return $this->db->query("
            SELECT *
            FROM lapor_aduan 
            WHERE date_create = '$tanggal'
        ")->result();
    }

    function get_rentang_tanggal($tanggal_awal, $tanggal_akhir)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_alternatif 
            WHERE tgl_masuk between '$tanggal_awal' AND '$tanggal_akhir';
        ")->result();
    }

    function get_laporan_per_tanggal($tanggal_awal, $tanggal_akhir)
    {

        return $this->db->query("
        SELECT *
        FROM lapor_aduan 
        WHERE date_create between '$tanggal_awal' AND '$tanggal_akhir';
    ")->result();
    }


    function get_data_pengambilan_customer($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('lapor_aduan');
        return $query->result();
    }
    function get_soal_tipe($id_tipe_soal)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_soal a
            WHERE a.id_tipe_soal = '$id_tipe_soal'
        ")->result();
    }

    function get_all_soal()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_soal a
            INNER JOIN tbl_tipe_soal b ON a.id_tipe_soal = b.id_tipe_soal
        ")->result();
    }

    function count_jawaban($id_soal, $nilai)
    {
        return $this->db->query("
            SELECT
            COUNT(a.id_jawaban_soal) as jumlah
            FROM tbl_jawaban_soal a
            WHERE a.id_soal = '$id_soal' AND a.nilai_jawaban_soal = '$nilai'
        ")->result();
    }
}
