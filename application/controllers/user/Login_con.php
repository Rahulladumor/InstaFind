<?php

/**
* 
*/
class Login_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user/login_model');
		$this->load->model('user/user_model');
	}

	function index()
	{
		if(!$this->session->userdata("one_id"))
		{
			// redirect("user/login_con/index");
			$data['placeids']=$this->user_model->get_placeid();
			$data['last_records']=$this->user_model->get_two_business();
			$data['event']=$this->user_model->get_events();
			$data['ttlbusiness']=$this->user_model->ttl_business();
			//echo "<pre>";print_r($data);die();
			$data['ttluser']=$this->user_model->ttl_user();
			$data['ttlcomment']=$this->user_model->ttl_comment();
			$data['ttlreview']=$this->user_model->ttl_review();

			$this->load->view("user/homepage",$data);
		}
		else
		{
			$id=$this->session->userdata("one_id");
			$data['placeids']=$this->user_model->get_placeid();
			$data['userinfo']=$this->login_model->get_user_data($id);
			$data['last_records']=$this->user_model->get_two_business();
			$data['event']=$this->user_model->get_events();
			$data['ttlbusiness']=$this->user_model->ttl_business();
			$data['ttluser']=$this->user_model->ttl_user();
			$data['ttlcomment']=$this->user_model->ttl_comment();
			$data['ttlreview']=$this->user_model->ttl_review();

			$this->load->view("user/homepage",$data);
		}
		
	}

	function login_user()
	{
		if($this->input->post())
		{
			$email=$this->input->post('user_name');
			$password=$this->input->post('user_pass');
			$userdata=$this->login_model->get_data_of_user($email,$password);
			if($userdata['active']=='pendding')
			{
				echo "1";
			}
			elseif($userdata['active']=='blocked')
			{
				// echo "You are blocked....";
				echo "2";
			}
			elseif($userdata['active']=='active')
			{
				//echo "1";
				$this->session->set_userdata("one_id",$userdata['user_id']);
				echo json_encode($userdata);
			}
		}
		else
		{
			echo "Not Login";
		}
	}

	function logout_user()
	{
		$this->session->unset_userdata("one_id");
		redirect("user/login_con/index");
	}

	function user_info()
	{
		if(!$this->session->userdata("one_id"))
		{
			// redirect("user/login_con/index");
			$this->load->view("user/homepage");
		}
		else
		{
			$id=$this->session->userdata("one_id");
			$data['userinfo']=$this->login_model->get_user_data($id);
			$this->load->view("user/user_info",$data);	
		}
	}

	function claime_business()
	{
		$this->load->view("business/addbusiness_view");
	}

	function load_business()
	{
		$result=$this->login_model->get_business();
		echo json_encode($result);
	}
}

?>