<?php

/**
* 
*/
class Register_model extends CI_Model
{
	function insert_data($data)
	{
		$this->db->insert('user_master',$data);
	}

	function check_email($email)
	{
		$this->db->where('email',$email);
		$row=$this->db->get('user_master');
		return $row->row_array();
	}
}

?>