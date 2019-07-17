<?php

/**
* 
*/
class User_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/user_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->user_model->getdata_id($id);
		$this->load->view('admin/user_details',$data);
	}

	function get_data($start=0)
	{
		
		$per_page=4;
		$this->load->model('admin/user_model');

		$per_page=10;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('user_master')->num_rows();
		$config["per_page"] =$per_page;
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
		  	'user_table'   => $this->user_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function approve_user($uid)
	{
		$this->load->model('admin/user_model');
		$data['active']="active";
		$this->user_model->approve_one($uid,$data);
	}

	function block_user($uid)
	{
		$this->load->model('admin/user_model');
		$data['active']="blocked";
		$this->user_model->block_one($uid,$data);
	}
}

?>