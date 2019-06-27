<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class m_cetak extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }


    function tampilkan()
    {

        $query = $this->db->get('lapor_aduan');
        return $query->result();
    }
}
