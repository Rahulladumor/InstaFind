<?php

/**
* 
*/
class Subscribe_con extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/subscribe_model');
	}

	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$id=$this->session->userdata('user_id');
		$data['user']=$this->subscribe_model->getdata_id($id);
		$this->load->view('admin/subscribe_view',$data);
	}

	function get_data($start=0)
	{
		$per_page=4;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('subscribe_master')->num_rows();
		$config["per_page"] =$per_page;
		$config["uri_segment"] =10;
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
		  	'user_table'   => $this->subscribe_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function approve_subscriber($uid)
	{
		$data['status']="Active";
		$this->subscribe_model->approve_one($uid,$data);
	}

	function block_subscriber($uid)
	{
		$data['status']="Blocked";
		$this->subscribe_model->block_one($uid,$data);
	}

	function send_emails()
	{
		if($this->input->post())
		{
			$this->load->helper("sendmail");
			$message=$this->input->post("message");
			$subject=$this->input->post("subject");

			$emails=$this->subscribe_model->get_emails();
			foreach ($emails as $email) {
				send_email($email,$subject,$message);
			}
		}
		else
		{
			echo "not post";
		}
	}
}

?>