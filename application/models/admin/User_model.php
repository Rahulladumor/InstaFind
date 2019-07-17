<?php
/**
* 
*/
class User_model extends CI_Model
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
		//$this->db->limit($per_page,$start);
		$this->db->limit($limit,$start);
		$row=$this->db->get('user_master');
		return $row->result_array();
	}

	function approve_one($uid,$data)
	{
		$this->db->where("user_id",$uid);
		$this->db->update("user_master",$data);
	}

	function block_one($uid,$data)
	{
		$this->db->where("user_id",$uid);
		$this->db->update("user_master",$data);	
	}
}

?>