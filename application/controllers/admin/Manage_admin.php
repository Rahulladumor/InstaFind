<?php

class Manage_admin extends CI_controller{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/dashboard_model');
		
	}
	
	function admin_profile()
	{
		$id=$this->session->userdata('user_id');
	
		$data['user']=$this->dashboard_model->getdata_id($id);
		$this->load->view('admin/admin_profile',$data);
		
	}
	function add_admin()
	{
		$id=$this->session->userdata('user_id');
	
		$data['user']=$this->dashboard_model->getdata_id($id);
		
		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());print_r($_FILES);		
			$fname=$this->input->post('v_fname');
			
			$password=$this->input->post('v_password');
			$email=$this->input->post('v_email');
			$this->load->model('admin/login_model');
			//
			//$data=array('name'=>$fname,'password'=>$password,'email'=>$email);
			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/';
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
						'image'=>$file_data	
				);
			$this->login_model->insert_data($data);

			//redirect('admin/manage_admin/admin_view');
			
		}
		//$this->load->view('admin/add_admin',$data);
	}
	
	function admin_view()
	{
		$id=$this->session->userdata('user_id');
		$data['user']=$this->dashboard_model->getdata_id($id);
		$this->load->view('admin/admin_view',$data);
	}

	function get_data($start=0)
	{
		
		$per_page=4;
		$this->load->model('admin/login_model');

		$per_page=4;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('admin')->num_rows();
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
		  	'admin_table'   => $this->login_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function get_data_by_id($uid)
	{
		$this->load->model('admin/login_model');
		$data=$this->login_model->get_by_id($uid);
		echo json_encode($data);	
	}


	function update_admin($uid)
	{
		// echo '<pre>';print_r($this->input->post());print_r($_FILES);
		if($this->input->post())
		{
			echo '<pre>';print_r($this->input->post());print_r($_FILES);
			$fname=$this->input->post('v_fname');
			$email=$this->input->post('v_email');
			//$password=$this->input->post('v_password');
			$image=$this->input->post('image');
			
			//$this->load->model('login_model');
			//
			if(!$_FILES['image']['name']=='')
			{
				echo "1";
				$config['allowed_types']='jpg|png|gif|jpeg';
				$config['upload_path']='upload/';
				$this->load->library('upload');
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
					$this->upload->data();
					$file_data=$this->upload->data('file_name');
					//echo $file_data;die;	
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			else
			{
				echo "2";
				$file_data=$image;
			}
			 $data=array(
						'name'=>$fname,
						 'email'=>$email,
						 //'password'=>$password,
						 'image'=>$file_data	
				);
			//echo $data['name'];
			$this->load->model('admin/login_model');
			$this->login_model->update_data($data,$uid);
			echo "update!";
				
		}
		else
		{
			echo "string";
		}
	}

	function delete_admin($uid)
	{
		$this->load->model('admin/login_model');
		$this->login_model->delete_data($uid);
		//echo "admin deleted...";
	}

	function change_pass()
	{
		$id=$this->session->userdata('user_id');
		$data['user']=$this->dashboard_model->getdata_id($id);
		$this->load->view('admin/changepassword',$data);
	}

	function chang_password($aid)
	{
		if($this->input->post())
		{
			$data['password']=$this->input->post('password');
			$this->load->model('admin/login_model');
			$this->login_model->change_admin_pass($aid,$data);
			echo "Password Changed Successfully......upppyyyyyy";
		}
		else
		{
			echo "string";
		}
	}

	function get_admin_by_id($aid)
	{
		$this->load->model('admin/login_model');
		$result=$this->login_model->get_by_aid_admin($aid);
		echo json_encode($result);
	}

	function update_admin_name()
	{
		if($this->input->post())
		{
			$admin_id=$this->input->post('id');
			$admin_name['name']=$this->input->post('name');
			$this->load->model('admin/login_model');
			$this->login_model->admin_name($admin_id,$admin_name);	
		}
		else
		{
			echo "name not update";
		}	
	}

	function update_admin_email()
	{
		if($this->input->post())
		{
			$admin_id=$this->input->post('id');
			$admin_email['email']=$this->input->post('email');
			$this->load->model('admin/login_model');
			$this->login_model->admin_email($admin_id,$admin_email);	
		}
		else
		{
			echo "email not update";
		}	
	}
}
?>