<?php

/**
* 
*/
class Register_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('user/register_model');					
	}

	function register_user()
	{
		if($this->input->post())
		{
			$fname=$this->input->post('user_name');
			$email=$this->input->post('user_email');
			$password=$this->input->post('user_confirm_password');
			$address=$this->input->post('user_address');
			if($this->input->valid_ip($this->input->ip_address()))
			{
				$ip=$this->input->ip_address();
			}
			else
			{
				$ip="Not valid";
			}

			$webbrowser=$this->input->user_agent();

			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/user';
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$this->upload->data();
				$file_data=$this->upload->data('file_name');
			}
			else
			{
				echo $this->upload->display_errors();
			}
			$data=array(
						'name'=>$fname,
						'email'=>$email,
						'password'=>$password,
						'address'=>$address,
						'image'=>$file_data,
						'ip'=>$ip,
						'webbrowser'=>$webbrowser,	
						'active'=>'pendding'
			);
			//echo "<pre>";print_r($data);die();
			$this->register_model->insert_data($data);
			$this->load->helper('sendmail');
			$subject='Registration information....';
			$message="<b>Your registration is under pendding status111</b>";
			send_email($email,$subject,$message);
			echo "registered.....yuppyyy";	
			
		}
		else
		{
			echo "nooo";
		}
		
	}

	function check_registered_email()
	{
		if($this->input->post())
		{
			$email=$this->input->post('email');

			$userdata=$this->register_model->check_email($email);

			if($userdata)
			{
				echo "1";
			}
		}
		else
		{
			echo "asdasdasdas";
		}
	}
}

?>