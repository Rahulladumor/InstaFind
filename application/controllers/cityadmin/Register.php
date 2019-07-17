<?php
/**
*
*/
class Register extends CI_Controller{

	function index()
	{
		$this->load->model('cityadmin/cityadmin_model');
		
		//$data['groups'] = $this->delivery_model->getAllGroups();

		$city['cityname']=$this->cityadmin_model->get_city();
		$this->load->view('cityadmin/register',$city);
	}
	function register_cityadmin()
	{
	if($this->input->post())
		{
			$name=$this->input->post("name");
			$email=$this->input->post("email");
			$password=$this->input->post("password");
			$cityname=$this->input->post("city");
			//echo $name,$email,$password,$cityname;

			$this->load->model('cityadmin/cityadmin_model');
			
			$city=$this->cityadmin_model->get_city_id($cityname);
			//echo $city['city_id'];
			// print_r($city);
			// echo $city['city_id'];
			// //die;
				
			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/cityadmin/';
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('image'))
			{
				$this->upload->data();
				$file_data=$this->upload->data('file_name');
			}
			else
			{
				echo $this->upload->display_errors();
			}

			$data=array(
				"name"=>$name,
				"email"=>$email,
				"password"=>$password,
				"city_id"=>$city['city_id'],
				"image"=>$file_data,
				"approve"=>"no"

			);

			$this->cityadmin_model->insert_cityadmin($data);
				$msg['data']="Sign Up successfully done,now simply login...";
			$this->load->view("cityadmin/login",$msg);
		}
		else
		{
			echo "Register Not Successed";
		}
	}
}
?>