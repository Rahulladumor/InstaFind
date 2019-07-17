<?php

/**
* 
*/
class Dashboard_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("cityadmin/dashboard_model");
	}

	function index()
	{
		if(!$this->session->userdata('cityadmin_id'))
		{
			$this->load->view('cityadmin/login');
		}
		
		else
		{
			$oid=$this->session->userdata("cityadmin_id");
			$cityid=$this->dashboard_model->get_city_of_admin($oid);
			$cid=$cityid['city_id'];
			$business=$this->dashboard_model->get_all_business_info($cid);
			$abusiness=$this->dashboard_model->get_all_abusiness_info($cid);
			$bbusiness=$this->dashboard_model->get_all_bbusiness_info($cid);
			$event=$this->dashboard_model->get_all_event_info();
			$comment=$this->dashboard_model->get_all_comment_info();
			$data['total_business']=$business->num_rows();
			$data['total_event']=$event->num_rows();
			$data['total_comment']=$comment->num_rows();
			$data['total_abusiness']=$abusiness->num_rows();
			$data['total_bbusiness']=$bbusiness->num_rows();
			$data['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
			$data['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
			$this->load->view('cityadmin/dashboard',$data);
		}	
	}

	function show_business()
	{
		$record['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$record['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$oid=$this->session->userdata("cityadmin_id");
		$cityid=$this->dashboard_model->get_city_of_admin($oid);
		$cid=$cityid['city_id'];
		$record['blist']=$this->dashboard_model->get_business($cid);
		$this->load->view("cityadmin/show_business",$record);
	}
	function owner_deatil()
	{
		$data['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$data['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$cid=$this->session->userdata("cityadmin_id");
		$cityid=$this->dashboard_model->get_city_of_admin($cid);
		$ctid=$cityid['city_id'];
		$data['ownerlist']=$this->dashboard_model->owner_deatil($ctid);
		$this->load->view("cityadmin/show_owner",$data);	
	}	
	function show_comment()
	{
		$data['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$data['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$cid=$this->session->userdata("cityadmin_id");
		$cityid=$this->dashboard_model->get_city_of_admin($cid);
		$ctid=$cityid['city_id'];
		
		$data['commentlist']=$this->dashboard_model->show_comment($ctid);
		$this->load->view("cityadmin/show_comment",$data);
	}

	function show_review()
	{
		$data['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$data['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$cid=$this->session->userdata("cityadmin_id");
		$cityid=$this->dashboard_model->get_city_of_admin($cid);
		$ctid=$cityid['city_id'];
		
		$data['reviewlist']=$this->dashboard_model->show_review($ctid);
		$this->load->view("cityadmin/show_review",$data);
	}


	function get_b_id($id)
	{
		
		$record['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$record['ctname']=$this->dashboard_model->cityname_by_id($this->session->userdata("cityadmin_id"));
		$record['data']=$this->dashboard_model->get_b_id($id);
		$record['b_image']=$this->dashboard_model-> get_image_id($id);
		$record['ctadmin']=$this->dashboard_model->cityadmin_by_id($this->session->userdata("cityadmin_id"));
		$this->load->view("cityadmin/business_p_view",$record);
	}

	function status_update($id)
	{
		if($this->input->post())
		{
			$status['active']=$this->input->post("active");
			$this->dashboard_model->change_status($id,$status);
		}
		else
		{
			echo "string";
		}
	}
}

?>