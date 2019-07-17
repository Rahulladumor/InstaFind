<?php

class login extends CI_Controller{

function __construct()
{
	parent::__construct();
	$this->load->model('cityadmin/login_model');
	$this->load->model('cityadmin/dashboard_model');		
}


function index()
{
	if($this->session->userdata('cityadmin_id'))
	{
		$id=$this->session->userdata('cityadmin_id');
		
		$data["cadmin"]=$this->login_model->get_admin($id);
		$this->load->view('cityadmin/dashboard',$data);	
	}
	else
	{
		$this->load->view('cityadmin/login');
	}
	
}
function login_cityadmin()
	{

		if($this->input->post())
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			// echo $email,$password;
			// die();
			// // $this->load->model('cityadmin/login_model');
			$record=$this->login_model->check_cityadmin($email,$password);
			// echo "<pre>";
			// print_r($record);die();
			if($record>0)
			{

				//$cityadmin=$record->row_array();
				$this->session->set_userdata('cityadmin_id',$record['c_a_id']);
				
				//echo $this->session->set_userdata('cityadmin_id'),"dasdasd";die();
			 redirect('cityadmin/dashboard_con');
			}
			else
			{
				echo "Your account yet not approve,Contact admin.....";
			}
			
		}
		else{
			echo "Login Failed...";
			
			$this->load->view('cityadmin/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('cityadmin_id');
		//$this->session->unset_userdata('user_name');
		//redirect('business/login/login_business');
		redirect('cityadmin/login');
	}

	function forgot_view()
	{
		$this->load->view("cityadmin/forgot_password");
	}

	function forgot_email()
	{
		if($this->input->post())
		{
			$email=$this->input->post("email");
			$city_admin=$this->login_model->forgot_password($email);
			$data=$city_admin["password"];
			$this->load->helper("sendmail");
			send_email($email,"Password is",$data);
			echo "check your mail....";
		}
		else
		{
			echo "not post";
		}
	}

	function change_pass_view()
	{
		$this->load->view("cityadmin/changepassword");
	}

	function change_password($aid)
	{
		if($this->input->post())
		{
			$data["password"]=$this->input->post("password");
			$this->login_model->change_password($aid,$data);
			echo "asdsa";
		}
		else
		{
			echo "nananan";
		}
	}

	function cityadmin_profile()
	{
		$data['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$data['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$this->load->view("cityadmin/cityadmin_profile",$data);
	}

	function get_cityadmin()
	{
		$id=$this->session->userdata("cityadmin_id");
		$result=$this->login_model->get_cityadmin_by_id($id);
		echo json_encode($result);
	}

	function update_cityadmin_name()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("cityadmin_id");
			$data["name"]=$this->input->post("name");
			$this->login_model->update_name($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_cityadmin_email()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("cityadmin_id");
			$data["email"]=$this->input->post("email");
			$this->login_model->update_email($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_cityadmin_address()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("cityadmin_id");
			$data["city_id"]=$this->input->post("address");
			$this->login_model->update_address($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}
}
?>