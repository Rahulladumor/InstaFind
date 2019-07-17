<?php
class Login_model extends CI_Model
{
	function check_admin($email,$password)
	{
		$this->load->database();
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$row=$this->db->get('admin');
		return $row;
	}

	function insert_data($data=array())
	{
		//$this->load->database();
		//print_r($this->input->post());die;
		$this->db->insert('admin',$data);
		redirect("admin/Manage_admin/admin_view");
		
	}
	/*function getdata()
	{
		$sql=$this->db->get('admin');
		$qry=$sql->result();
		return $qry;
	}*/
	function get_data($limit,$start)
	{
		$this->load->database();
		//$this->db->limit($per_page,$start);
		$this->db->limit($limit,$start);
		$row=$this->db->get('admin');
		return $row->result_array();
	}

	function get_by_id($id)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$row=$this->db->get('admin');
		return $row->row_array();	
	}

	function update_data($data,$uid)
	{
		$this->load->database();
		$this->db->where('id',$uid);
		$this->db->update('admin',$data);
	}

	function delete_data($uid)
	{
		$this->load->database();
		$this->db->where('id',$uid);
		$this->db->delete('admin');
	}

	function change_admin_pass($aid,$data)
	{
		$this->load->database();
		$this->db->where('id',$aid);
		$this->db->update('admin',$data);
	}

	function get_pass_by_mail($email)
	{
		$this->load->database();
		$this->db->where('email',$email);
		$row=$this->db->get('admin');
		return $row->row_array();
	}

	function get_by_aid_admin($aid)
	{
		$this->load->database();
		$this->db->where('id',$aid);
		$row=$this->db->get('admin');
		return $row->row_array();	
	}

	function admin_name($admin_id,$admin_name)
	{
		$this->db->where('id',$admin_id);
		$this->db->update('admin',$admin_name);
	}

	function admin_email($admin_id,$admin_email)
	{
		$this->db->where('id',$admin_id);
		$this->db->update('admin',$admin_email);	
	}
}
?>