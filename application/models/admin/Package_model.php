<?php
/**
 * 
 */
class Package_model extends CI_Model
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
		$rows=$this->db->get('package_master');
		return $rows->result_array();
	}
	function insert_package($package)
	{
		$this->db->insert('package_master',$package);
	}

	function get_data_id($pid)
	{
		$this->db->where('package_id',$pid);
		$row=$this->db->get('package_master');
		return $row->row_array();
	}

	function update_data($pid,$data)
	{
		$this->db->where('package_id',$pid);
		$this->db->update('package_master',$data);
	}

	function delete_data($pid)
	{
		$this->db->where('package_id',$pid);
		$this->db->delete('package_master');
	}


}
?>	