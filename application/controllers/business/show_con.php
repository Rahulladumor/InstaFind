<?php
/**
*
*/
class show_con extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model("business/showbusiness_model");
	}
	function get_b_id($id)
	{
		$record['data']=$this->showbusiness_model->get_b_id($id);
		$record['b_image']=$this->showbusiness_model-> get_image_id($id);
		$this->load->view("business/show_business_view",$record);
	}


}