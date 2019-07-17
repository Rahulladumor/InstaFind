<?php
/**
 * 
 */
class Business_con extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("business/business_model");
	}
	function add_business()
	{
		if($this->input->post())
		{
			//echo "string";
			if($this->session->userdata("owner_id"))
			{
				$owner_id=$data['owner_id']=$this->session->userdata("owner_id");
			}
			else
			{
				redirect("business/owner_con/register_view");
			}
			$name=$data['name']=$this->input->post('b_name');
			$data['place_id']=$this->input->post("placeid");
			$contact=$data['contact']=$this->input->post('contact');
			$data['email']=	$this->input->post('email');
			$add_1=$this->input->post('add_1');
			$add_2=$this->input->post('add_2');
			$data['country_id']=$this->input->post('country');
			$data['state_id']=$this->input->post('state');
			$data['city_id']=$this->input->post('city');
			$zipcode=$this->input->post('zipcode');
			$data['address']= $add_1.",".$add_2.",".$zipcode;
			$data['place_id']=$this->input->post("placeid");
			$data['buss_starting_date']=$this->input->post('b_s_date');

			
			$op_h=$this->input->post('op_h');
			$op_m=$this->input->post('op_m');
			$op_ampm=$this->input->post('op_ampm');
			$data['op_hour']=$op_h.":".$op_m.":".$op_ampm;

			$cl_h=$this->input->post('cl_h');
			$cl_m=$this->input->post('cl_m');
			$cl_ampm=$this->input->post('cl_ampm');
			$data['cl_hour']=$cl_h.":".$cl_m.":".$cl_ampm;
			//$owner_id=$data['owner_id']=$this->session->userdata("owner_id");
			$data['cat_id']=$this->input->post('b_cate');
			$data['scat_id']=$this->input->post('b_s_cate');
			$data['description']=$this->input->post('description');

			$data['claim_approve']="NO";	
			$data['active']="Blocked";
			$this->business_model->add_single_business($data);

			$config['allowed_types']='jpg|png|gif|jpeg';
			$config['upload_path']='upload/business/';
			$config['max_size'] = '1024*200';
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			$filesCount = count($_FILES['img']['name']);
			// echo "<pre>";
			// print_r($data);die();
			// echo $filesCount;die();
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['imgs']['name'] = $_FILES['img']['name'][$i];
                $_FILES['imgs']['type'] = $_FILES['img']['type'][$i];
                $_FILES['imgs']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
                $_FILES['imgs']['error'] = $_FILES['img']['error'][$i];
                $_FILES['imgs']['size'] = $_FILES['img']['size'][$i];

                $uploadPath = 'upload/business/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|png|gif|jpeg';
                $config['max_size'] = '1024*200';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('imgs')){
                    $fileData = $this->upload->data('file_name');
                    $img1['image'] = $fileData;//['file_name'];
                    $data1['business_id']=$this->business_model->get_business_id($owner_id,$name,$contact);
                    $img1['business_id']=$data1['business_id']['business_id'];
                   $res= $this->business_model->insert_image($img1);
                }
            }

            $imgs=$this->input->post("img1");
            if(sizeof($imgs)>0){
            foreach ($imgs as $value) {
            	$img1['image'] = $value;//['file_name'];
                $data1['business_id']=$this->business_model->get_business_id($owner_id,$name,$contact);
                $img1['business_id']=$data1['business_id']['business_id'];
            	$this->business_model->insert_image($img1);
            }
            }
            //$this->load->view('business/owner_dashboard');
            redirect("business/owner_con/index");
		}
		else
		{

			echo "Error";
		}
		
	}
	private function set_upload_options()
	{   
		//upload an image options
		$config = array();
		$config['upload_path'] = "<?php echo base_url("."upload/business/".");?>";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}

	function update_business()
	{
		if($this->input->post())
		{
			//echo "string";
			if($this->session->userdata("owner_id"))
			{
				$owner_id=$data['owner_id']=$this->session->userdata("owner_id");
			}
			else
			{
				redirect("business/owner_con/register_view");
			}
			$bid=$this->input->post('bid');
			$name=$data['name']=$this->input->post('bussname');
			$contact=$data['contact']=$this->input->post('busscontact');
			$data['email']=	$this->input->post('bussemail');
			$data['address']=$this->input->post('bussinessaddress');
			$data['description']=$this->input->post('bussdescription');
			// echo "<pre>";print_r($data);die();
			$this->business_model->update_single_business($data,$bid);

			// $config['allowed_types']='jpg|png|gif|jpeg';
			// $config['upload_path']='upload/business/';
			// $config['max_size'] = '1024*200';
			// $this->load->library('upload');
			// $this->upload->initialize($config);
			
			$filesCount = count($_FILES['img']['name']);
			// echo $filesCount;die();
			if($filesCount>1)
			{
				//echo $filesCount;die();
	            for($i = 0; $i < $filesCount; $i++){
	                $_FILES['imgs']['name'] = $_FILES['img']['name'][$i];
	                $_FILES['imgs']['type'] = $_FILES['img']['type'][$i];
	                $_FILES['imgs']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
	                $_FILES['imgs']['error'] = $_FILES['img']['error'][$i];
	                $_FILES['imgs']['size'] = $_FILES['img']['size'][$i];

	                $uploadPath = 'upload/business/';
	                $config['upload_path'] = $uploadPath;
	                $config['allowed_types'] = 'jpg|png|gif|jpeg';
	                $config['max_size'] = '1024*200';
	                
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if($this->upload->do_upload('imgs')){
	                    $fileData = $this->upload->data('file_name');
	                    $img1['image'] = $fileData;//['file_name'];
	                    // $data1['business_id']=$this->business_model->get_business_id($owner_id,$name,$contact);
	                    $data1['business_id']=$bid;
	                    $img1['business_id']=$data1['business_id'];//['business_id'];
	                   $res= $this->business_model->insert_image($img1);
	                }
	            }
	        }

            // $imgs=$this->input->post("img1");
            // foreach ($imgs as $value) {
            // 	$img1['image'] = $value;//['file_name'];
            //     $data1['business_id']=$this->business_model->get_business_id($owner_id,$name,$contact);
            //     $img1['business_id']=$data1['business_id']['business_id'];
            // 	$this->business_model->insert_image($img1);
            // }
            //$this->load->view('business/owner_dashboard');
            redirect("business/owner_con/show_business");
		}
		else
		{

			echo "Error";
		}
		
	}

	function check_claimed($pid)
	{
		$res=$this->business_model->check_claimed_business($pid);
		if($res>0)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}



	function fill_country()
	{
		$country=$this->business_model->get_country();
		echo json_encode($country);
	}

	function fill_state($cid)
	{
		$state=$this->business_model->get_state($cid);
		echo json_encode($state);
	}

	function fill_city($cid)
	{
		$city=$this->business_model->get_city($cid);
		echo json_encode($city);
	}

	function fill_category()
	{
		$category=$this->business_model->get_category();
		echo json_encode($category);	
	}

	function fill_subcat($cid)
	{
		$subcat=$this->business_model->get_subcat($cid);
		//print_r($subcat);
		echo json_encode($subcat);
	}

	function show_packages($bid,$bname,$bcontact)
	{
		$package['bname']=$bname;
		$package['bcontact']=$bcontact;
		$package['bid']=$bid;
		$package['package']=$this->business_model->get_packages();
		$this->load->view("business/show_packages",$package);
	}

	function show_business()
	{
		$id=$this->session->userdata("owner_id");
		$data["owner_info"]=$this->owner_model->get_owner($id);
		$data['blist']=$this->owner_model->get_business_by_oid($id);
		// echo "<pre>";
		// print_r($data);die();
		$this->load->view("business/showbusiness_view",$data);
	}
}
?>		