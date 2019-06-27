<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class m_aduan extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }

    function tampilkan()
    {

        $query = $this->db->get('penjualan');
        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('lapor_aduan');
        return $query->result();
    }

    function hapus($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('lapor_aduan');
        return $query;
    }
}
