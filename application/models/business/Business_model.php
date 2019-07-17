<?php

/**
 * 
 */
class Business_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_country()
	{
		$result=$this->db->get("country_master");
		return $result->result_array();
	}

	function get_state($cid)
	{
		$this->db->where("country_id",$cid);
		$result=$this->db->get("state_master");
		return $result->result_array();
	}

	function get_city($cid)
	{
		$this->db->where("state_id",$cid);
		$result=$this->db->get("city_master");
		return $result->result_array();
	}

	function get_category()
	{
		$result=$this->db->get("category_master");
		return $result->result_array();

	}

	function get_subcat($cid)
	{
		$this->db->where("cat_id",$cid);
		$result=$this->db->get("sub_category");
		return $result->result_array();		
	}

	function get_packages()
	{
		$result=$this->db->get("package_master");
		return $result->result_array();
	}

	function add_single_business($data)
	{
		$this->db->insert("business_master",$data);
	}
	function update_single_business($data,$bid)
	{
		$this->db->where("business_id",$bid);
		$this->db->update("business_master",$data);
	}
	function get_business_id($owner_id,$name,$contact)
	{
		$this->db->where("owner_id",$owner_id);
		$this->db->where("name",$name);
		$this->db->where("contact",$contact);
		$data=$this->db->get("business_master");		
		return $data->row_array();
	}
	function insert_image($data)
	{
		$this->db->insert("business_images",$data);
		return 111;
	}

	function check_claimed_business($pid)
	{
		$this->db->where("place_id",$pid);
		$row=$this->db->get("business_master");
		return $row->row_array();
	}

	function chang_payment_status($bid)
	{
		$data['payment']=1;
		$this->db->where("business_id",$bid);
		$this->db->update("business_master",$data);
	}

	function payment_history($bid,$pid,$amount,$txnid,$date,$time)
	{
		$data['buss_id']=$bid;
		$data['package_id']=$pid;
		$data['txnid']=$txnid;
		$data['amount']=$amount;
		$data['date']=$date;
		$data['time']=$time;
		$this->db->insert("package_payment",$data);
	}
}

?>