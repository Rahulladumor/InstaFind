<?php

class Dashboard_con extends CI_Controller
{
	
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->load->model('admin/dashboard_model');
		$id=$this->session->userdata('user_id');

		$admin=$this->dashboard_model->get_all_admin_info();
		$user=$this->dashboard_model->get_all_user_info();
		$business=$this->dashboard_model->get_all_business_info();
		$category=$this->dashboard_model->get_all_category_info();
		$country=$this->dashboard_model->get_all_country_info();
		$subcategory=$this->dashboard_model->get_all_subcategory_info();
		$state=$this->dashboard_model->get_all_state_info();
		$city=$this->dashboard_model->get_all_city_info();
		$active=$this->dashboard_model->get_all_active_info();
		$block=$this->dashboard_model->get_all_block_info();
		$package=$this->dashboard_model->get_all_package_info();
		$cityadmin=$this->dashboard_model->get_all_cityadmin_info();
		$payment=$this->dashboard_model->get_all_payment_info();
		$event=$this->dashboard_model->get_all_event_info();
		$comment=$this->dashboard_model->get_all_comment_info();
		$subscriber=$this->dashboard_model->get_all_subscriber_info();
		$data['total_active']=$active->num_rows();
		$data['total_block']=$block->num_rows();
		$data['total_state']=$state->num_rows();
		$data['total_city']=$city->num_rows();
		$data['total_subcategory']=$subcategory->num_rows();
		$data['total_country']=$country->num_rows();
		$data['total_admin']=$admin->num_rows();
		$data['total_user']=$user->num_rows();
		$data['total_business']=$business->num_rows();
		$data['total_category']=$category->num_rows();
		$data['total_package']=$package->num_rows();
		$data['total_cityadmin']=$cityadmin->num_rows();
		$data['total_payment']=$payment->num_rows();
		$data['total_event']=$event->num_rows();
		$data['total_comment']=$comment->num_rows();
		$data['total_subscriber']=$subscriber->num_rows();
		$data['user']=$this->dashboard_model->getdata_id($id);
		$this->load->view('admin/dashboard',$data);
	}
}
