<?php
/**
* 
*/
class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function get_by_id_cityadmin($id)
	{
		$this->db->where('c_a_id',$id);
		$row=$this->db->get('city_admin');
		return $row->row_array();	
	}
	
	function update_name($id,$data)
	{
		$this->db->where("c_a_id",$id);
		$this->db->update("city_admin",$data);
	}

	function update_email($id,$data)
	{
		$this->db->where("c_a_id",$id);
		$this->db->update("city_admin",$data);
	}

	function update_address($id,$data)
	{
		$this->db->where("c_a_id",$id);
		$this->db->update("city_admin",$data);	
	}

	function subscribe_one($data)
	{
		$this->db->insert("subscribe_master",$data);
	}

	function get_placeid()
	{
		$this->db->select("place_id");
		$row=$this->db->get("business_master");
		return $row->result_array();
	}

	function get_b_id($bpid)
	{
		$this->db->select("business_id");
		$this->db->where("place_id",$bpid);
		$row=$this->db->get("business_master");
		return $row->row_array();
	}

	function give_review($data)
	{
		$this->db->insert("review_master",$data);
	}

	function get_two_business()
	{
		$this->db->select('business_master.*,business_images.image');
		$this->db->join('business_images','business_images.business_id=business_master.business_id','left');
		$this->db->group_by('business_master.business_id');
		$last_row=$this->db->order_by('business_id',"desc")->limit(2)->get('business_master');
		return $last_row->result_array();
	}

	function insert_comment($data)
	{
		$this->db->insert("comment_master",$data);
		return $this->db->insert_id();
	}

	function get_comments($bid)
	{
		$this->db->select('comment_master.*,user_master.image,user_master.name');
		$this->db->join('user_master','user_master.user_id=comment_master.user_id','left');
		$this->db->where("buss_id",$bid);
		$last_row=$this->db->order_by('cmt_id',"desc")->limit(2)->get('comment_master');
		return $last_row->result_array();
	}

	function get_all_comments($bid)
	{
		$this->db->select('comment_master.*,user_master.image,user_master.name');
		$this->db->join('user_master','user_master.user_id=comment_master.user_id','left');
		$this->db->where("buss_id",$bid);
		$last_row=$this->db->order_by('cmt_id')->get('comment_master');
		return $last_row->result_array();	
	}

	function get_events()
	{
		$events=$this->db->order_by('event_id',"desc")->limit(3)->get('event_menu');
		return $events->result_array();
	}
	function ttl_business()
	{
		$qry=$this->db->get("business_master");
		return $qry->num_rows();
	}
	function ttl_user()
	{
		$qry=$this->db->get("user_master");
		return $qry->num_rows();
	}
	function ttl_comment()
	{
		$qry=$this->db->get("comment_master");
		return $qry->num_rows();
	}
	function ttl_review()
	{
		$qry=$this->db->get("review_master");
		return $qry->num_rows();
	}

	function get_dbimages($bid)
	{
		$this->db->where("business_id",$bid);
		$qry=$this->db->get("business_images");
		return $qry->result_array();
	}
}
?>