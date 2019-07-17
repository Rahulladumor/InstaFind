<?php
/**
* 
*/
class Category_model extends CI_Model
{
	
	function getdata_id($id=0)
	{
		$this->db->where('id',$id);
		$qry=$this->db->get('admin');
		return $qry->row_array();
	}

	function get_data($limit,$start)
	{
		$this->db->limit($limit, $start);
		$rows=$this->db->get('category_master');
		return $rows->result_array();
	}

	function insert_category($category)
	{
		$this->db->insert('category_master',$category);
	}

	function get_data_id($cid)
	{
		$this->db->where('cat_id',$cid);
		$row=$this->db->get('category_master');
		return $row->row_array();
	}

	function update_data($cid,$data)
	{
		$this->db->where('cat_id',$cid);
		$this->db->update('category_master',$data);
	}

	function delete_data($cid)
	{
		$this->db->where('cat_id',$cid);
		$this->db->delete('category_master');	
	}

}

?>