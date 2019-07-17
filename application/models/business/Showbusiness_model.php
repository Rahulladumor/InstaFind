<?php 
class Showbusiness_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function get_b_id($id)
	{
		//$this->load->database();
		$this->db->select('business_master.*,category_master.type as cat_name,sub_category.type as scat_name');
		$this->db->join('category_master','category_master.cat_id=business_master.cat_id');
		$this->db->join('sub_category','sub_category.scat_id=business_master.scat_id');
		$this->db->where("business_id",$id);
		$row=$this->db->get("business_master");

		return $row->row_array();
	}

	function get_image_id($id)
	{
		$this->load->database();
		$this->db->where("business_id",$id);
		$row=$this->db->get("business_images");

		return $row->result_array();
	}


}
?>