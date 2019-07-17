<?php
/**
* 
*/
class Category_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/category_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->category_model->getdata_id($id);
		$this->load->view('admin/category',$data);
	}

	function get_category()
	{
		$this->load->model('admin/category_model');
		$per_page=8;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('category_master')->num_rows();
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
		  	'category_table'   => $this->category_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function add_category()
	{
		if($this->input->post())
		{
			$category['type']=$this->input->post('name');			
			$this->load->model('admin/category_model');
			$id=$this->category_model->insert_category($category);	
			//echo "Inserted...";
		}
		else
		{
			echo "string";
		}
	}

	function get_category_by_id($cid)
	{
		$this->load->model('admin/category_model');
		$result=$this->category_model->get_data_id($cid);
		echo json_encode($result);
	}

	function update_category($cid)
	{
		$data['type']=$this->input->post('name');
		$this->load->model('admin/category_model');
		$result=$this->category_model->update_data($cid,$data);
	}

	function delete_category($cid)
	{
		$this->load->model('admin/category_model');
		$this->category_model->delete_data($cid);
	}
}
?>