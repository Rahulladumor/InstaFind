<?php
class Login_model extends CI_Model
{
	function check_cityadmin($email,$password)
	{
		$this->load->database();
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$this->db->where('approve',"active");
		$row=$this->db->get('city_admin');
		return $row->row_array();
	}

	function get_admin($id)
	{
		$this->db->where("c_a_id",$id);
		$row=$this->db->get("city_admin");
		return $row->row_array();
	}

	function forgot_password($email)
	{
		$this->db->where("email",$email);
		$row=$this->db->get("city_admin");
		return $row->row_array();
	}

	function change_password($aid,$data)
	{
		$this->db->where("owner_id",$aid);
		$this->db->update("owner_master",$data);
	}

	function get_cityadmin_by_id($id)
	{
		$this->db->where("c_a_id",$id);
		$row=$this->db->get("city_admin");
		return $row->row_array() ;
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
}
?>