<?php
/**
* 
*/
class Subcat_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->db->select('sub_category.*,category_master.type as cat_name');
		$this->db->limit($limit, $start);
		$this->db->join('category_master','category_master.cat_id=sub_category.cat_id');
		$rows=$this->db->get('sub_category');
		return $rows->result_array();
	}

	function get_category()
	{
		$rows=$this->db->get('category_master');
		return $rows->result_array();	
	}

	function insert_subcat($data)
	{
		$this->db->insert('sub_category',$data);
	}

	function get_data_id($uid)
	{
		$this->db->where('scat_id',$uid);
		$row=$this->db->get('sub_category');
		return $row->row_array();
	}

	function update_data($uid,$result)
	{
		$this->db->where('scat_id',$uid);
		$this->db->update('sub_category',$result);
	}

	function delete_data($uid)
	{
		$this->db->where('scat_id',$uid);
		$this->db->delete('sub_category');	
	}
}

?>