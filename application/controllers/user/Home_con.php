<?php

/**
* 
*/
class Home_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("user/user_model");	
		$this->load->model("user/login_model");
	}

	function index()
	{
		
		$this->load->view('user/homepage');
	}
	
	function load_single_list()
	{
		 //echo '<pre>';print_r($this->input->post());die;
		if($this->input->post())
		{
			$bpid=$business['id']=$this->input->post("placeid1");
			$business['name']=$this->input->post("bname");
			$business['address']=$this->input->post("badd");
			$business['placeid']=$this->input->post("placeid");
			$business['contact']=$this->input->post("contact");
			$business['country']=$this->input->post("country");
			$business['state']=$this->input->post("state");
			$business['city']=$this->input->post("city");
			$business['websiteurl']=$this->input->post("websiteurl");
			$business['types']=$this->input->post("types");
			$business['open_status']=$this->input->post("openstatus");
			$business['weeks']=$this->input->post("weeks");
			$business['bbid']=$this->input->post("bid");
			$business['description']=$this->input->post("description");
			$business['cornot']=$this->input->post("cornot");
			$business['images']=$this->input->post("image");
			$bid=$this->user_model->get_b_id($bpid);
			$business["bid"]=$bid['business_id'];
			$id=$this->session->userdata("one_id");
			$business['userinfo']=$this->login_model->get_user_data($id);
			$business['last_records']=$this->user_model->get_two_business();
			$business['cmt']=$this->user_model->get_comments($business['bbid']);
			$business['dbimages']=$this->user_model->get_dbimages($business['bbid']);
			// echo "<pre>";
			// print_r($business);die();
			$this->load->view("user/single_listing",$business);
		}
		else
		{
			echo "asdas";
		}
	}

	function subscribe_now()
	{
		if($this->input->post())
		{
			$data['email']=$this->input->post("email");
			$data['sub_date']=$this->input->post("date");
			$data['status']="Active";

			$this->user_model->subscribe_one($data);
			$this->load->helper("sendmail");
			send_email($data['email'],"Subscribe notification","Thank you for subscribe");
		}
		else
		{
			echo "string123445";
		}
	}

	function give_review()
	{
		if($this->input->post())
		{
			//echo "asdasd";
			//echo "<pre>";print_r($this->input->post());die();
			$data['buss_id']=$this->input->post("bid");
			$data['star']=$this->input->post("star");
			$data['review']=$this->input->post("review");
			$data['user_id']=$this->session->userdata("one_id");
			$this->user_model->give_review($data);
		}
		else
		{
			echo "string";
		}
	}

	function user_comment()
	{
		if($this->input->post())
		{
			$data['user_id']=$this->input->post("uid");
			$data['buss_id']=$this->input->post("bid");
			$data['comment']=$this->input->post("cmt");
			// $date1=explode(" ", $this->input->post("today"));
			// $td $date1[1];
			$id=$this->user_model->insert_comment($data);
			echo $id;
		}
		else
		{
			echo "sdffv";
		}
	}

	function user_all_comment()
	{
		if($this->input->post())
		{
			$bid=$this->input->post("bid");
			$comments=$this->user_model->get_all_comments($bid);
			echo json_encode($comments);
		}
		else
		{
			echo "sdffv";
		}
	}
}

?>