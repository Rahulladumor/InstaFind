<?php
/**
* 
*/
class Dashboard_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}
	function get_all_admin_info(){
		$qry = $this->db->get('admin');
		return $qry;
	}
	function get_all_user_info(){
		$qry = $this->db->get('user_master');
		return $qry;
	}
	function get_all_business_info(){
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_country_info(){
		$qry = $this->db->get('country_master');
		return $qry;
	}
	function get_all_subcategory_info(){
		$qry = $this->db->get('sub_category');
		return $qry;
	}
	function get_all_category_info(){
		$qry = $this->db->get('category_master');
		return $qry;
	}
	function get_all_state_info(){
		$qry = $this->db->get('state_master');
		return $qry;
	}
	function get_all_city_info(){
		$qry = $this->db->get('city_master');
		return $qry;
	}
	function get_all_active_info(){
		//$this->db->where("_id",$id);
		$this->db->where("active","active");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_block_info(){
		//$this->db->where("owner_id",$id);
		$this->db->where("active","blocked");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_package_info(){
		$qry = $this->db->get('package_master');
		return $qry;
	}
	function get_all_cityadmin_info(){
		$qry = $this->db->get('city_admin');
		return $qry;
	}
	function get_all_event_info(){
		$qry = $this->db->get('event_menu');
		return $qry;
	}
	function get_all_comment_info(){
		$qry = $this->db->get('comment_master');
		return $qry;
	}
	function get_all_payment_info(){
		$qry = $this->db->get('package_payment');
		return $qry;
	}
	function get_all_subscriber_info(){
		$qry = $this->db->get('subscribe_master');
		return $qry;
	}
}
?>