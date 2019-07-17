<?php
/**
* 
*/
class Country_con extends CI_Controller
{
	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/country_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->country_model->getdata_id($id);
		$this->load->view('admin/country',$data);
	}

	function get_country()
	{
		$this->load->model('admin/country_model');
		
		$per_page=4;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('country_master')->num_rows();
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
		  	'country_table'   => $this->country_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}

	function add_country()
	{
		if($this->input->post())
		{
				$country['name']=$this->input->post('country_name');
				$this->load->model('admin/country_model');
				$id=$this->country_model->insert_country($country);	

				if($id>0)
				{
					echo "Inserted...";
				}
				else
				{
					echo "not i...s";
				}
		}
		else
		{
			echo "string";
		}
	}

	function delete_country($uid)
	{
		$this->load->model('admin/country_model');
		$this->country_model->delete_data($uid);
	}

	function get_data_by_id($uid)
	{
		$this->load->model('admin/country_model');
		$result=$this->country_model->get_data_id($uid);
		echo json_encode($result);
	}

	function update_admin($uid)
	{
		$data['name']=$this->input->post('country_name');
		$this->load->model('admin/country_model');
		$result=$this->country_model->update_data($uid,$data);
	}
}
?>