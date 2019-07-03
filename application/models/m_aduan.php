<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class m_aduan extends CI_Model
{
    var $table = 'lapor_aduan';


    function __construct()
    {
        parent::__construct();
    }

    function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('lapor_aduan');
        return $query->result();
    }
    function get_data()
    {
        return $this->db->get($this->table)->result();;
    }

    function count_data($kolom)
    {
        $this->db->where('status', $kolom);
        return $this->db->get($this->table)->num_rows();
    }


    function hapus($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('lapor_aduan');
        return $query;
    }

    function done($id)
    {
        $this->db->set(done, 1);
        $this->db->where('id', $id);
        $query = $this->db->update('lapor_aduan');
        return $query;
    }
}
