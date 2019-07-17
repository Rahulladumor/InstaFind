<?php
/**
*
*/
class Owner_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		if(!$this->session->userdata("owner_id"))
		{
			$this->load->view("business/register_owner");
		}
	}

}
?>