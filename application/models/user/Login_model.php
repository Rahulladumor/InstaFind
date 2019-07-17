<?php

/**
* 
*/
class Login_model extends CI_Model
{
	function get_data_of_user($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$row=$this->db->get('user_master');
		return $row->row_array();
	}

	function get_user_data($id)
	{
		$this->db->where("user_id",$id);
		$row=$this->db->get("user_master");
		return $row->row_array();
	}

	function get_business()
	{
		$this->db->select('business_master.*,business_images.image,comment_master.comment,user_master.name as uname');
		$this->db->join('business_images','business_images.business_id=business_master.business_id','left');
		$this->db->join('comment_master','comment_master.buss_id=business_master.business_id','left');
		$this->db->join('user_master','comment_master.user_id=user_master.user_id','left');
		$this->db->group_by('business_master.business_id');
		$this->db->where("business_master.active","active");
		$this->db->where("payment","1");
		$rows=$this->db->get("business_master");
		return $rows->result_array();
	}
}

?>