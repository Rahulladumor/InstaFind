<?php
/**
 * 
 */
class Business_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	function getdata_id($id=0)
	{
		//echo $id;die;
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}
	function get_b_id($id)
	{
		$this->load->database();
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

	function get_business()
	{
		$this->load->database();
		$this->db->select('business_master.*,business_images.image');
		$this->db->join('business_images','business_images.business_id=business_master.business_id','left');
		$this->db->group_by('business_master.business_id');
		$data=$this->db->get('business_master');
		//echo $this->db->last_query();die;
		return $data->result_array();
	}

}
?>
