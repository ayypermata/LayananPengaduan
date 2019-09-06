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

    public function getKriteria()
    {
        $query = $this->db->query('SELECT * FROM tbl_kriteria');
        return $query->result();
    }

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

    function get_jenis($id)
    {

        $query = $this->db->query('SELECT nm_sub_kriteria as nm FROM tbl_sub_kriteria WHERE id_sub_kriteria =' . "'$id'");
        return $query->result();
    }

    function get_nama($id)
    {
        $query = $this->db->query('SELECT name FROM user WHERE id =' . "'$id'");
        return $query->result();
    }
}
