<?php
/**
* 
*/
class City_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->db->select('city_master.*,state_master.name as state_name');
		$this->db->join('state_master','state_master.state_id=city_master.state_id');
		$this->db->limit($limit, $start);
		$rows=$this->db->get('city_master');
		return $rows->result_array();
	}

	function get_country_list()
	{
		$rows=$this->db->get('country_master');
		return $rows->result_array();	
	}

	function get_state_cid($cid)
	{
		$this->db->where('country_id',$cid);
		$qry=$this->db->get('state_master');
		return $qry->result_array();	
	}

	function insert_data($record)
	{
		$this->db->insert('city_master',$record);
	}

	function get_city_cid($cid)
	{
		$this->db->where('city_id',$cid);
		$row=$this->db->get('city_master');
		return $row->row_array(); 
	}

	function update_data($cid,$data)
	{
		$this->db->where('city_id',$cid);
		$this->db->update('city_master',$data);
	}

	function delete_data($cid)
	{
		$this->db->where('city_id',$cid);
		$this->db->delete('city_master');	
	}
}
?>