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

    function login($username, $password)
    {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->WHERE('username', $username);
        $this->db->WHERE('password', md5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }


    /*===========================================================================================================================================*/
    /* Data User */
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

    function get_data_user($id)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_user
            WHERE id_user = '$id'
        ")->result();
    }

    function find_username($username)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_user
            WHERE username = '$username'
        ")->result();
    }

    /*===========================================================================================================================================*/

    /*===========================================================================================================================================*/

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


    function get_data_pengambilan($id)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_pengambilan a
            INNER JOIN tbl_customer b ON a.id_customer = b.id_customer
            INNER JOIN tbl_kurir c ON a.id_kurir = c.id_kurir
            WHERE a.id_pengambilan = '$id'
            ORDER BY a.id_pengambilan DESC
        ")->result();
    }


    function get_data_pengambilan_customer($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('lapor_aduan');
        return $query->result();
        // return $this->db->query("
        //     SELECT *
        //     FROM lapor_aduan a
        //     INNER JOIN user b ON a.id = b.id 
        //     WHERE a.id_user = '$id'
        //     ORDER BY a.id_lapor DESC
        // ")->result();
    }

    // SELECT *
    // FROM tbl_pengambilan a
    // INNER JOIN tbl_customer b ON a.id_customer = b.id_customer
    // INNER JOIN tbl_kurir c ON a.id_kurir = c.id_kurir
    // WHERE a.id_customer = '$id'
    // ORDER BY a.id_pengambilan DESC
    /*===========================================================================================================================================*/
    /*===========================================================================================================================================*/

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
    /*===========================================================================================================================================*/
    /*===========================================================================================================================================*/
}
