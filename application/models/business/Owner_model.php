<?php
/**
* 
*/
class Owner_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function insert_owner($data)
	{
		$this->db->insert("owner_master",$data);
	}
	function get_all_business_info($id){
		$this->db->where("owner_id",$id);
		$qry = $this->db->get('business_master');
		return $qry;
	}

	function get_comment_by_oid($id)
	{
		$this->db->select('comment_master.*,user_master.name as uname,business_master.name as bname');
		$this->db->join('user_master','user_master.user_id=comment_master.user_id');
		$this->db->join('business_master','business_master.business_id=comment_master.buss_id');
		$this->db->where('business_master.owner_id',$id);
		$qry=$this->db->get('comment_master');
		return $qry->result_array();
	}
	function get_review_by_oid($id)
	{
		$this->db->select('review_master.*,user_master.name as uname,business_master.name as bname');
		$this->db->join('user_master','user_master.user_id=review_master.user_id');
		$this->db->join('business_master','business_master.business_id=review_master.buss_id');
		$this->db->where('business_master.owner_id',$id);
		$qry=$this->db->get('review_master');
		return $qry->result_array();	
	}

	function get_all_payment_info($id){
		$this->db->where("owner_id",$id);
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_event_info($id){
		$qry = $this->db->get('event_menu');
		return $qry;
	}
	function get_all_review_info(){
		
		$qry = $this->db->get('review_master');
		return $qry;
	}
	function get_all_apayment_info($id){
		$this->db->where("owner_id",$id);
		$this->db->where("payment","1");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_bpayment_info($id){
		$this->db->where("owner_id",$id);
		$this->db->where("payment","0");
		$qry = $this->db->get('business_master');
		return $qry;
	}

	function get_all_abusiness_info($id){
		$this->db->where("owner_id",$id);
		$this->db->where("active","active");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function get_all_bbusiness_info($id){
		$this->db->where("owner_id",$id);
		$this->db->where("active","blocked");
		$qry = $this->db->get('business_master');
		return $qry;
	}
	function owner_login($email,$password)
	{
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$row=$this->db->get("owner_master");
		return $row->row_array();
	}

	function get_owner($id)
	{
		$this->db->where("owner_id",$id);
		$record=$this->db->get("owner_master");
		return $record->row_array();
	}

	function change_password($aid,$data)
	{
		$this->db->where("owner_id",$aid);
		$this->db->update("owner_master",$data);
	}

	function get_owner_data($email)
	{
		$this->db->where("email",$email);
		$row=$this->db->get("owner_master");
		return $row->row_array();
	}

	function update_name($id,$data)
	{
		$this->db->where("owner_id",$id);
		$this->db->update("owner_master",$data);
	}

	function update_email($id,$data)
	{
		$this->db->where("owner_id",$id);
		$this->db->update("owner_master",$data);
	}

	function update_address($id,$data)
	{
		$this->db->where("owner_id",$id);
		$this->db->update("owner_master",$data);	
	}

	function get_business_by_oid($id)
	{
		$this->db->where("owner_id",$id);
		$this->db->select('business_master.*,business_images.image');
		$this->db->join('business_images','business_images.business_id=business_master.business_id','left');
		$this->db->group_by('business_master.business_id');
		$rows=$this->db->get("business_master");
		return $rows->result_array();
	}

	function get_payment_history($id)
	{
		$this->db->select('package_payment.*,business_master.name as bname,owner_master.owner_id,package_master.pkg_type as pname');
		$this->db->join('business_master','business_master.business_id=package_payment.buss_id');
		$this->db->join('owner_master','owner_master.owner_id=business_master.owner_id');
		$this->db->join('package_master','package_master.package_id=package_payment.package_id');
		
		$this->db->where("owner_master.owner_id",$id);
		$rows=$this->db->get("package_payment");
		return $rows->result_array();
	}
}
?>