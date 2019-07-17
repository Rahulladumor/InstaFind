<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');      
    }

	public function index() {
       $status = $this->input->post('status');
      if (empty($status)) {
            redirect('business/Welcome');
        }
        $firstname = $this->input->post('firstname');
        $bid=$this->input->post("udf1");
        $pid=$this->input->post("udf2");
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "foS0cO0dMw"; //  Your salt
        $date1=explode(" ", $this->input->post('addedon'));
        $date=$date1[0];
        $time=$date1[1];
        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {

            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
         $data['hash'] = hash("sha512", $retHashSeq);
          $data['amount'] = $amount;
          $data['txnid'] = $txnid;
          $data['posted_hash'] = $posted_hash;
          $data['status'] = $status;
          if($status == 'success'){
            //echo "<pre>";print_r($this->input->post());echo $txnid; die();
              $this->load->model("business/business_model");
              $this->business_model->chang_payment_status($bid);
              $this->business_model->payment_history($bid,$pid,$amount,$txnid,$date,$time);
              $this->load->view('business/success', $data);   
         }
         else{
              $this->load->view('business/failure', $data); 
         }
     
    }
 
    
   }
