<?php
/**
* 
*/
class cityadmin_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->load->database();
		
		$this->db->select('city_admin.*,city_master.name as city_name');
		//$this->db->limit($per_page,$start);
		$this->db->limit($limit,$start);
		$this->db->join('city_master','city_master.city_id=city_admin.city_id');
		$row=$this->db->get('city_admin');
		return $row->result_array();
	}

	function approve_one($uid,$data)
	{
		$this->db->where("c_a_id",$uid);
		$this->db->update("city_admin",$data);
	}

	function block_one($uid,$data)
	{
		$this->db->where("c_a_id",$uid);
		$this->db->update("city_admin",$data);	
	}
}

?>