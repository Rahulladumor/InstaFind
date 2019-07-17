<?php 
/**
* 
*/
class User_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("user/user_model");
	}

	function get_user_by_id()
	{
		$id=$this->session->userdata("one_id");
		$result=$this->user_model->get_by_id_user($id);
		echo json_encode($result);
	}

	function update_user_name()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("one_id");
			$data["name"]=$this->input->post("name");
			$this->user_model->update_name($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_user_email()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("one_id");
			$data["email"]=$this->input->post("email");
			$this->user_model->update_email($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_user_address()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("one_id");
			$data["address"]=$this->input->post("address");
			$this->user_model->update_address($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}
}
?>