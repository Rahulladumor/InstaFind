<?php
/**
* 
*/
class City_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/city_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->city_model->getdata_id($id);
		$this->load->view('admin/city',$data);
	}

	function get_state()
	{
		$this->load->model('admin/city_model');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('city_master')->num_rows();
		$config["per_page"] =8;
		$config["uri_segment"] =4;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 1;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(4);
		$start = ($page - 1) * $config["per_page"];
		$output = array(
		  	'city_table'   => $this->city_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		echo json_encode($output);

		// $result=$this->city_model->get_data();
		// echo json_encode($result);
	}

	function get_country()
	{
		$this->load->model('admin/city_model');
		$result=$this->city_model->get_country_list();
		echo json_encode($result);
	}

	function get_state_by_cid($cid)
	{
		$this->load->model('admin/city_model');
		$result=$this->city_model->get_state_cid($cid);
		echo json_encode($result);
	}

	function add_city()
	{
		if($this->input->post())
		{
			$record['name']=$this->input->post('name');
			$record['state_id']=$this->input->post('state_id');

			$this->load->model('admin/city_model');
			$result=$this->city_model->insert_data($record);
		}
		else
		{
			echo "Not Inserted....";
		}
	}

	function get_city_by_id($cid)
	{
		$this->load->model('admin/city_model');
		$result=$this->city_model->get_city_cid($cid);
		echo json_encode($result);
	}

	function update_city($cid)
	{
		$data['name']=$this->input->post('name');
		$this->load->model('admin/city_model');
		$this->city_model->update_data($cid,$data);
	}

	function delete_city($cid)
	{
		$this->load->model('admin/city_model');
		$this->city_model->delete_data($cid);	
	}
}
?>