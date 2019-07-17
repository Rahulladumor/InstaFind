<?php
/**
 * 
 */
class business_con extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Business_model');

		
	}

	function get_b_id($id)
	{
		

		$data['data']=$this->Business_model->get_b_id($id);
		$data['b_image']=$this->Business_model->get_image_id($id);
		//echo "<pre>";print_r($data['b_image']);die;
		$u_id=$this->session->userdata('user_id');
		$data['user']=$this->Business_model->getdata_id($u_id);

		//	echo "<pre>";print_r($data['user']);die;
		$this->load->view('admin/business_p_view',$data);
	}
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/business_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->business_model->getdata_id($id);
		

		$data['blist']=$this->Business_model->get_business();
		$this->load->view('admin/business_view',$data);
	}
}
?>