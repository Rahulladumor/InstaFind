<?php
/**
* 
*/
class State_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->db->select('state_master.*,country_master.name as country_name');
		$this->db->join('country_master','country_master.country_id=state_master.country_id');
		$this->db->limit($limit, $start);
		$rows=$this->db->get('state_master');
		return $rows->result_array();
	}

	function get_country_list()
	{
		$rows=$this->db->get('country_master');
		return $rows->result_array();	
	}

	function insert_data($result)
	{
		$this->db->insert('state_master',$result);
	}

	function get_data_id($uid)
	{
		$this->db->where('state_id',$uid);
		$row=$this->db->get('state_master');
		return $row->row_array();
	}

	function update_data($uid,$result)
	{
		$this->db->where('state_id',$uid);
		$this->db->update('state_master',$result);
	}

	function delete_data($uid)
	{
		$this->db->where('state_id',$uid);
		$this->db->delete('state_master');	
	}
}
?>