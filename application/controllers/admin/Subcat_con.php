<?php
/**
* 
*/
class Subcat_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/subcat_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->subcat_model->getdata_id($id);
		$this->load->view('admin/subcategory',$data);
	}

	function get_subcat()
	{
		$this->load->model('admin/subcat_model');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('sub_category')->num_rows();
		$config["per_page"] =5;
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
		  	'subcat_table'   => $this->subcat_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function get_category()
	{
		$this->load->model('admin/subcat_model');
		$result=$this->subcat_model->get_category();
		echo json_encode($result);
	}

	function add_subcat()
	{
		if($this->input->post())
		{
			$data['type']=$this->input->post('name');
			$data['cat_id']=$this->input->post('category_id');
			$this->load->model('admin/subcat_model');
			$this->subcat_model->insert_subcat($data);
		}
		else
		{
			echo "nnnnnn";
		}
	}

	function get_subcat_by_id($uid)
	{
		$this->load->model('admin/subcat_model');
		$result=$this->subcat_model->get_data_id($uid);
		echo json_encode($result);
	}

	function update_subcat($uid)
	{
		$result['type']=$this->input->post('name');
		//echo $result['name'];
		$this->load->model('admin/subcat_model');
		$this->subcat_model->update_data($uid,$result);
	}

	function delete_subcat($uid)
	{
		$this->load->model('admin/subcat_model');
		$this->subcat_model->delete_data($uid);
	}
}

?>