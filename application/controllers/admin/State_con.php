<?php
/**
* 
*/
class State_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/state_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->state_model->getdata_id($id);
		$this->load->view('admin/state',$data);
	}

	function get_state()
	{
		$this->load->model('admin/state_model');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('state_master')->num_rows();
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
		  	'state_table'   => $this->state_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
		// $result=$this->state_model->get_data();
		// echo json_encode($result);
	}

	function get_country()
	{
		$this->load->model('admin/state_model');
		$result=$this->state_model->get_country_list();
		echo json_encode($result);
	}

	function add_state()
	{
		if($this->input->post())
		{
			$result['name']=$this->input->post('name');
			$result['country_id']=$this->input->post('country_id');

			$this->load->model('admin/state_model');
			$this->state_model->insert_data($result);
			echo "Inserted!!!!";
		}
		else
		{
			echo "Not Inserted.....";
		}
	}

	function get_state_by_id($uid)
	{
		$this->load->model('admin/state_model');
		$result=$this->state_model->get_data_id($uid);
		echo json_encode($result);
	}

	function update_state($uid)
	{
		$result['name']=$this->input->post('name');
		$this->load->model('admin/state_model');
		$this->state_model->update_data($uid,$result);
	}

	function delete_state($uid)
	{
		$this->load->model('admin/state_model');
		$this->state_model->delete_data($uid);	
	}
}
?>