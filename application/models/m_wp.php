<?php

class m_wp extends CI_Model
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

    function login($username, $password)
    {

        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->WHERE('username', $username);
        $this->db->WHERE('password', md5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

    /*===========================================================================================================================================*/
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

    /*===========================================================================================================================================*/
    /*===========================================================================================================================================*/

    public function id_transaksi()
    {
        $q = $this->db->query("select MAX(RIGHT(id_transaksi,4)) as id_max from tbl_transaksi");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%04s", $tmp);
            }
        } else {
            $id = "0001";
        }
        return "TR-" . $id;
    }

    function get_all_transaksi()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
        ")->result();
    }

    function get_user_transaksi($id_user)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE z.id_user = '$id_user'
        ")->result();
    }

    function get_all_group_transaksi()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            GROUP BY z.tgl_transaksi
        ")->result();
    }

    function get_range_group_transaksi($bulan_awal, $bulan_akhir, $tahun)
    {
        return $this->db->query("
            SELECT *, SUM(z.bsu_transaksi) as total_bsu_transaksi
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE MONTH(z.tgl_transaksi) BETWEEN '$bulan_awal' AND '$bulan_akhir' AND YEAR(z.tgl_transaksi) ='$tahun'
            GROUP BY z.id_user
            ORDER BY SUM(z.bsu_transaksi) DESC
        ")->result();
    }

    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    public function id_alternatif()
    {
        $q = $this->db->query("select MAX(RIGHT(id_alternatif,5)) as id_max from tbl_alternatif");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%05s", $tmp);
            }
        } else {
            $id = "00001";
        }
        return "AL-" . $id;
    }

    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    public function id_kriteria()
    {
        $q = $this->db->query("select MAX(RIGHT(id_kriteria,5)) as id_max from tbl_kriteria");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%05s", $tmp);
            }
        } else {
            $id = "00001";
        }
        return "KR-" . $id;
    }


    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    public function id_sub_kriteria()
    {
        $q = $this->db->query("select MAX(RIGHT(id_sub_kriteria,5)) as id_max from tbl_sub_kriteria");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%05s", $tmp);
            }
        } else {
            $id = "00001";
        }
        return "SKR-" . $id;
    }


    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    function total_bobot_kriteria()
    {
        return $this->db->query("
            SELECT sum(bobot_kriteria) as total_bobot_kriteria
            FROM tbl_kriteria z
        ")->result();
    }

    function total_bobot_sub_kriteria($id_kriteria)
    {
        return $this->db->query("
            SELECT sum(bobot_sub_kriteria) as total_bobot_sub_kriteria
            FROM tbl_sub_kriteria z
            WHERE z.id_kriteria = '$id_kriteria'
        ")->result();
    }

    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    public function id_nilai_alternatif()
    {
        $q = $this->db->query("select MAX(RIGHT(id_nilai_alternatif,5)) as id_max from tbl_nilai_alternatif");
        $id = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->id_max) + 1;
                $id = sprintf("%05s", $tmp);
            }
        } else {
            $id = "00001";
        }
        return "NAL-" . $id;
    }
    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/


    function get_nilai_alternatif($id_alternatif)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_nilai_alternatif z
            JOIN tbl_alternatif y ON z.id_alternatif = y.id_alternatif
            JOIN tbl_sub_kriteria x ON z.id_sub_kriteria = x.id_sub_kriteria
            WHERE z.id_alternatif = '$id_alternatif'
        ")->result();
    }

    /*===========================================================================================================================================*/
    /* Data */
    /*===========================================================================================================================================*/

    function get_range_user_transaksi($id_user, $tgl_awal, $tgl_akhir)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE z.id_user = '$id_user' AND z.tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'
        ")->result();
    }

    function get_user_range_transaksi($id_user, $tgl_awal, $tgl_akhir)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user AND z.id_user = '$id_user'
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE z.tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'
        ")->result();
    }

    function get_range_absensi($tgl_awal, $tgl_akhir)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_absensi a
            LEFT JOIN tbl_user b on a.id_user = b.id_user
            WHERE a.tgl_absensi BETWEEN '$tgl_awal' AND '$tgl_akhir'
        ")->result();
    }

    function get_range_user_absensi($id_user, $tgl_awal, $tgl_akhir)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_absensi a
            LEFT JOIN tbl_user b on a.id_user = b.id_user
            WHERE a.id_user = '$id_user' AND a.tgl_absensi BETWEEN '$tgl_awal' AND '$tgl_akhir'
        ")->result();
    }

    function get_bulan_transaksi($bulan, $tahun)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE MONTH(z.tgl_transaksi) = '$bulan' AND YEAR(z.tgl_transaksi) = '$tahun'
        ")->result();
    }

    function get_bulan_user_transaksi($id_user, $bulan, $tahun)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE z.id_user= '$id_user' AND MONTH(z.tgl_transaksi) = '$bulan' AND YEAR(z.tgl_transaksi) = '$tahun'
        ")->result();
    }

    function get_bulan_absensi($bulan, $tahun)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_absensi a
            LEFT JOIN tbl_user b on a.id_user = b.id_user
            WHERE MONTH(a.tgl_absensi) = '$bulan' AND YEAR(a.tgl_absensi) = '$tahun'
        ")->result();
    }

    function get_bulan_user_absensi($id_user, $bulan, $tahun)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_absensi a
            LEFT JOIN tbl_user b on a.id_user = b.id_user
            WHERE a.id_user = '$id_user' AND MONTH(a.tgl_absensi) = '$bulan' AND YEAR(a.tgl_absensi) = '$tahun'
        ")->result();
    }

    function group_bulan_absensi()
    {
        return $this->db->query("
            SELECT *, MONTH(a.tgl_absensi) as bulan,  YEAR(a.tgl_absensi) as tahun
            FROM tbl_absensi a
            LEFT JOIN tbl_user b on a.id_user = b.id_user
            GROUP BY MONTH(a.tgl_absensi), YEAR(a.tgl_absensi)
        ")->result();
    }

    function get_all_ranger()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_user a
            WHERE a.level_user = 'Ranger'
        ")->result();
    }

    function get_pendapatan_bsu($id_user, $bulan, $tahun)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_transaksi z
            JOIN tbl_user y ON z.id_user = y.id_user
            JOIN tbl_jenis_produk x ON z.id_jenis_produk = x.id_jenis_produk
            WHERE z.id_user = '$id_user' AND MONTH(z.tgl_transaksi) = '$bulan' AND YEAR(z.tgl_transaksi) = '$tahun' AND x.komisi_jenis_produk = 'Ya'
        ")->result();
    }
}
