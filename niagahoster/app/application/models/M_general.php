<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_general extends CI_Model {

	public function getData($table)
	{
		return $this->db->get($table)->result();
	}

	public function getDataRow($table)
	{
		return $this->db->get($table)->row();
	}

	public function getDataWhere($table, $data, $val)
    {
    	// $sql = $this->db->get_where($table, $data);
    	$this->db->from($table);
    	$this->db->where($data);
    	$sql = $this->db->get();
    	
    	if ($val == true) {
    		return $sql->result();
    	} elseif ($val == false) {
    		return $sql->row();
    	}
    }

}

/* End of file M_general.php */
/* Location: ./application/models/M_general.php */