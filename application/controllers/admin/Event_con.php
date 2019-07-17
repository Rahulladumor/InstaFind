<?php
/**
 * 
 */
class Event_con extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/event_model');	
	}

	function index()
	{
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		$this->load->model('admin/event_model');
		$id=$this->session->userdata('user_id');
		$data['user']=$this->event_model->getdata_id($id);
		$this->load->view('admin/event_view',$data);
		
	}
	function get_event()
	{
		$this->load->model('admin/event_model');
		$per_page=2;
	  	$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->db->get('event_menu')->num_rows();
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
		  	'event_table'   => $this->event_model->get_data($config["per_page"], $start),
		   'pagination_link'  => $this->pagination->create_links()
		  );
		  echo json_encode($output);
	}
	function add_event()
	{
		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());print_r($_FILES);die;
			$event['event_title']=$this->input->post('v_eventtitle');
			$event['start_date']=$this->input->post('v_eventsdate');
			$event['end_date']=$this->input->post('v_eventedate');
			$event['start_time']=$this->input->post('v_eventstime');
			$event['end_time']=$this->input->post('v_eventetime');
			$event['price']=$this->input->post('v_eventprice');
			$event['location']=$this->input->post('v_eventlocation');
			$event['description']=$this->input->post('v_edescription');
			$event['helpline']=$this->input->post('v_ehelpline');
			//$event['image1']=$this->input->post('v_eimg1');
			
			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/event';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('v_eimg1')){
				//$this->upload->data();
				$file_data=$this->upload->data('file_name');
				// echo $file_data;die();
			}
			else
			{
				echo $this->upload->display_errors();
			}

			$event['image1']=$file_data;
			// echo "<pre>";
			// print_r($event);die();
			$this->event_model->insert_event($event);
		}
		else
		{
			echo "string";
		}
	}

	function get_event_by_id($eid)
	{
		$this->load->model('admin/event_model');
		$result=$this->event_model->get_data_id($eid);
		echo json_encode($result);
	}

	function update_event($eid)
	{
			$data['event_title']=$this->input->post('event_title');
			$data['start_date']=$this->input->post('start_date');
			$data['end_date']=$this->input->post('end_date');
			$data['start_time']=$this->input->post('start_time');
			$data['end_time']=$this->input->post('end_time');
			$data['price']=$this->input->post('price');
			$data['location']=$this->input->post('location');
			$data['description']=$this->input->post('description');
			$data['helpline']=$this->input->post('helpline');
			$data['image1']=$this->input->post('image1');
			
		$this->load->model('admin/event_model');
		$result=$this->event_model->update_data($eid,$data);
	}

	function delete_event($eid)
	{
		$this->load->model('admin/event_model');
		$this->event_model->delete_data($eid);
	}


}


?>