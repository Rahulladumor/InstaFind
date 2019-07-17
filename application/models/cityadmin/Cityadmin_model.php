<?php 
class Cityadmin_model extends CI_Model
{
	function get_city()
	{
		$this->load->database();
	// 	$city=$this->db->get('city_master');
	// 	foreach ($city->result() as $row)
	//             {
	//                 echo $row->name;
	//             }
	// }
	$query = $this->db->query('SELECT name FROM city_master');


	        return $query->result();
	}

	function insert_data($data)
	{
		$this->db->insert('city_admin',$data);
	}

	function get_city_id($cityname)
	{
		$this->load->database();
		$this->db->where("name",$cityname);
		$city = $this->db->get('city_master');
			return $city->row_array();
	}
	function insert_cityadmin($data)
	{
		$this->db->insert('city_admin',$data);
	}

	function get_applyed_city()
	{
		$this->db->select("city_id");
		$qry=$this->db->get("city_admin");
		return $qry->result_array();
	}

}
?>