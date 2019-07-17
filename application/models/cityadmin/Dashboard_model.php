<?php 
class Dashboard_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function get_business($cid)
	{

		//$this->load->database();
		$this->db->select('business_master.*,business_images.image');
		$this->db->join('business_images','business_images.business_id=business_master.business_id','left');
		$this->db->group_by('business_master.business_id');
		$this->db->where("city_id",$cid);
		$data=$this->db->get('business_master');
		//echo $this->db->last_query();die;
		return $data->result_array();
	}
	function get_all_business_info($cid){
		$this->db->where("city_id",$cid);
		$qry = $this->db->get('business_master');
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
	function get_all_abusiness_info($cid){
		$this->db->where("city_id",$cid);
		$this->db->where("active","active");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_bbusiness_info($cid){
		$this->db->where("city_id",$cid);
		$this->db->where("active","blocked");
		$qry = $this->db->get('business_master');
		return $qry;
	}

	function get_city_of_admin($oid)
	{
		$this->db->where("c_a_id",$oid);
		$this->db->select("city_id");
		$rows=$this->db->get("city_admin");
		return $rows->row_array();
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

	function change_status($id,$status)
	{
		$this->db->where("business_id",$id);
		$this->db->update("business_master",$status);
	}
	function owner_deatil($cid)
	{
		// $getcityid=$this->db->qry("select city_admin.city_id from city_admin where c_a_id )
		$this->db->select("owner_master.*,business_master.name as bname,city_master.name as cityname,city_admin.c_a_id");
		$this->db->join('business_master','business_master.owner_id=owner_master.owner_id');
		$this->db->join('city_master','city_master.city_id=business_master.city_id');
		$this->db->join('city_admin','city_admin.city_id=city_master.city_id');
		
		$this->db->where('business_master.city_id',$cid);
		//$this->db->where('city_admin.city_id',$cid);
		$qry=$this->db->get("owner_master");
		return $qry->result_array();
	}
	function show_comment($ctid)
	{
		$this->db->select('comment_master.*,business_master.name as bname,user_master.name as uname');

		$this->db->join('business_master','business_master.business_id=comment_master.buss_id');

		$this->db->join('user_master','user_master.user_id=comment_master.user_id');
		$this->db->where('business_master.city_id',$ctid);
		$qry=$this->db->get("comment_master");
		return $qry->result_array();
	}
	function show_review($ctid)
	{
		
		$this->db->select('review_master.*,business_master.name as bname,user_master.name as uname');

		$this->db->join('business_master','business_master.business_id=review_master.buss_id');

		$this->db->join('user_master','user_master.user_id=review_master.user_id');
		$this->db->where('business_master.city_id',$ctid);
		
		$qry=$this->db->get("review_master");
		return $qry->result_array();
	}

	function cityadmin_by_id($id=0)
	{
		$this->db->where('c_a_id',$id);
		$qry=$this->db->get('city_admin');
		return $qry->row_array();
	}
		function cityname_by_id($id=0)
	{
		$this->db->select('city_master.*,city_admin.c_a_id');
		$this->db->join('city_admin','city_admin.city_id=city_master.city_id');
		$this->db->where('c_a_id',$id);

		$qry=$this->db->get('city_master');
		return $qry->row_array();
	}
}
?>