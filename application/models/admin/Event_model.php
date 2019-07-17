<?php
/**
 * 
 */
class Event_model extends CI_Model
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
		$rows=$this->db->get('event_menu');
		return $rows->result_array();
	}
	function get_data_id($eid)
	{
		$this->db->where('event_id',$eid);
		$row=$this->db->get('event_menu');
		return $row->row_array();
	}
	function insert_event($event)
	{
		$this->db->insert('event_menu',$event);
	}
	function update_data($eid,$data)
	{
		$this->db->where('event_id',$eid);
		$this->db->update('event_menu',$data);
	}

	function delete_data($eid)
	{
		$this->db->where('event_id',$eid);
		$this->db->delete('event_menu');
	}

}
?>