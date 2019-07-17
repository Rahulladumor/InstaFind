<?php
/**
*
*/
class Owner_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('business/owner_model');
	}

	function index()
	{
		if(!$this->session->userdata("owner_id"))
		{
			$this->load->view("business/login");
		}
		else
		{

			$id=$this->session->userdata("owner_id");
			$business = $this->owner_model->get_all_business_info($id);
			$abus=$this->owner_model->get_all_abusiness_info($id);
			$bbus=$this->owner_model->get_all_bbusiness_info($id);
			$payment=$this->owner_model->get_all_payment_info($id);
			$review=$this->owner_model->get_all_review_info();
			$apayment=$this->owner_model->get_all_apayment_info($id);
			$bpayment=$this->owner_model->get_all_bpayment_info($id);
			$event=$this->owner_model->get_all_event_info($id);
			$data['abus']=$abus->num_rows();
			$data['total_bpayment']=$bpayment->num_rows();
			$data['total_review']=$review->num_rows();
			$data['bbus']=$bbus->num_rows();
			$data['total_event']=$event->num_rows();
			$data['total_apayment']=$apayment->num_rows();
			$data['total_payment']=$payment->num_rows();
			$data['total_business'] = $business->num_rows();
			$data["owner_info"]=$this->owner_model->get_owner($id);
			$this->load->view("business/owner_dashboard",$data);
		}
	}

	function register_view()
	{
		$this->load->view("business/register_owner");
	}

	function owner_register()
	{
		if($this->input->post())
		{
			$name=$this->input->post("owner_name");
			$email=$this->input->post("owner_email");
			$password=$this->input->post("owner_password");
			$contact=$this->input->post("owner_contact");
			
			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/owner/';
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
				"name"=>$name,
				"email"=>$email,
				"password"=>$password,
				"contact"=>$contact,
				"image"=>$file_data
			);

			$this->owner_model->insert_owner($data);

			$this->load->view("business/login");
		}
		else
		{
			echo "Register Not Successed";
		}
	}

	function login_owner()
	{
		if($this->input->post())
		{
			$email=$this->input->post("owner_email");
			$password=$this->input->post("owner_password");

			$owner=$this->owner_model->owner_login($email,$password);
			$this->session->set_userdata("owner_id",$owner["owner_id"]);
			redirect("business/owner_con/index");
		}
		else
		{
			$this->load->view("business/login");
		}
	}

	function logout_owner()
	{
		$this->session->set_userdata("owner_id");
		redirect("business/owner_con/index");
	}

	function owner_profile()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$this->load->view("business/owner_profile",$data);
	}

	function change_password_view()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$this->load->view("business/change_password",$data);	
	}

	function change_password($aid)
	{
		if($this->input->post())
		{
			$data["password"]=$this->input->post("password");
			$this->owner_model->change_password($aid,$data);
			echo "asdsa";
		}
		else
		{
			echo "nananan";
		}
	}

	function forgot_view()
	{
		$this->load->view("business/forgot_owner");
	}

	function forgot_email()
	{
		if($this->input->post())
		{
			$email=$this->input->post("email");
			$owner_data=$this->owner_model->get_owner_data($email);

			$password=$owner_data["password"];

			$this->load->helper("sendmail");
			$st=send_email($email,"Your Password is....",$password);
			echo "Check Your mail";
		}
		else
		{
			echo "asdsd";
		}
	}

	function get_owner_by_id()
	{
		$id=$this->session->userdata("owner_id");
		$result=$this->owner_model->get_owner($id);
		echo json_encode($result);
	}

	function update_owner_name()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("owner_id");
			$data["name"]=$this->input->post("name");
			$this->owner_model->update_name($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_owner_email()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("owner_id");
			$data["email"]=$this->input->post("email");
			$this->owner_model->update_email($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function update_owner_contact()
	{
		if($this->input->post())
		{
			$id=$this->session->userdata("owner_id");
			$data["contact"]=$this->input->post("contact");
			$this->owner_model->update_address($id,$data);
		}
		else
		{
			echo "not Post";
		}
	}

	function add_business()
	{
		$this->load->view("business/addbusiness_view");
	}

	function show_business()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$data['blist']=$this->owner_model->get_business_by_oid($id);
		// echo "<pre>";
		// print_r($data);die();
		$this->load->view("business/showbusiness_view",$data);
	}

	function show_comment()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$data['bcomment']=$this->owner_model->get_comment_by_oid($id);
		// echo "<pre>";
		// print_r($data);die();
		$this->load->view("business/comment_view",$data);
	}
	function show_reviews()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$data['breview']=$this->owner_model->get_review_by_oid($id);
		// echo "<pre>";
		// print_r($data);die();
		$this->load->view("business/review_view",$data);
	}

	function show_package_payment()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		// $data['blist']=$this->owner_model->get_business_by_oid($id);
		$data['payment_history']=$this->owner_model->get_payment_history($id);
		// echo "<pre>";
		// print_r($data);die();
		$this->load->view("business/package_payment_history",$data);	
	}

	function add_business_claim()
	{


		if($this->input->post())
		{
			//echo "string";
			if($this->session->userdata("owner_id"))
			{
				$business['name']=$this->input->post("bname");
				$business['address']=$this->input->post("badd");
				$business['placeid']=$this->input->post("placeid1");
				$business['contact']=$this->input->post("contact");
				$business['country']=$this->input->post("country");
				$business['state']=$this->input->post("state");
				$business['city']=$this->input->post("city");
				$business['images']=$this->input->post("image");
				// echo "<pre>";
				// print_r($business);die();
				//echo $business['country'],$business['state'],$business['city'];die();
				$this->load->view("business/addbusiness_view",$business);
			}
			else
			{
				redirect("business/owner_con/index");
			}
		}
		else
		{
			echo "asdas";
		}
	}
}

?>