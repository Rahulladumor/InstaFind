<?php
/**
 * 
 */
class Package_con extends CI_Controller
{
	
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/package_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->package_model->getdata_id($id);
		$this->load->view('admin/package',$data);
		
	}

	function get_package()
	{
		$this->load->model('admin/package_model');
		$per_page=2;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('package_master')->num_rows();
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
		  	'package_table'   => $this->package_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function add_package()
	{
		if($this->input->post())
		{
			$package['pkg_type']=$this->input->post('pkg_type');

			
			$package['price']=$this->input->post('price');
			$package['description']=$this->input->post('description');
			$package['duration']=$this->input->post('duration');

			$this->load->model('admin/package_model');
			$id=$this->package_model->insert_package($package);	
			//echo "Inserted...";
		}
		else
		{
			echo "string";
		}
	}

	function get_package_by_id($pid)
	{
		$this->load->model('admin/package_model');
		$result=$this->package_model->get_data_id($pid);
		echo json_encode($result);
	}

	function update_package($pid)
	{
		$data['pkg_type']=$this->input->post('name');
		$data['price']=$this->input->post('price');
		$data['description']=$this->input->post('description');
		$data['duration']=$this->input->post('duration');
		$this->load->model('admin/package_model');
		$result=$this->package_model->update_data($pid,$data);
	}

	function delete_package($pid)
	{
		$this->load->model('admin/package_model');
		$this->package_model->delete_data($pid);
	}
}
?>