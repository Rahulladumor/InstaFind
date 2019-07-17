<?php
/**
* 
*/
class Country_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->db->limit($limit, $start);
		$rows=$this->db->get('country_master');
		return $rows->result_array();
	}

	function insert_country($country)
	{
		$this->db->insert('country_master',$country);
		return $this->db->insert_id();
	}

	function delete_data($uid)
	{
		$this->db->where('country_id',$uid);
		$this->db->delete('country_master');
	}

	function get_data_id($uid)
	{
		$this->db->where('country_id',$uid);
		$row=$this->db->get('country_master');
		return $row->row_array();
	}

	function update_data($uid,$data)
	{
		$this->db->where('country_id',$uid);
		$this->db->update('country_master',$data);
	}
}
?>