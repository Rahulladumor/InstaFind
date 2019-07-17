<?php 
/**
* 
*/
class Login extends CI_Controller
{
	function index()
	{
			
		if($this->session->userdata('user_id'))
		{
			redirect('admin/dashboard_con/index');
		}

		$this->load->view('admin/login');
	}

	function login_admin()
	{
		if($this->input->post())
		{
			
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->load->model('admin/login_model');
			$record=$this->login_model->check_admin($email,$password);

			if($record->num_rows()==1)
			{

				$bool1=$record->row_array();
				
				$this->session->set_userdata('user_id',$bool1['id']);
				//echo 'hiii';
				redirect('admin/dashboard_con/index');
			}

			redirect('admin/login');
		}
	}

	

	
	function logout()
	{
		$this->session->unset_userdata('user_id');
		//$this->session->unset_userdata('user_name');
		redirect('admin/login');
	}

	function get_pass()
	{
		if($this->input->post())
		{
			$email=$this->input->post('email');
			$this->load->model('admin/login_model');
			$result=$this->login_model->get_pass_by_mail($email);
			$pass=$result['password'];

			send_email($email,'Password is ',$pass);

			echo "Check Your Mail....";
		}
	}
}
?>