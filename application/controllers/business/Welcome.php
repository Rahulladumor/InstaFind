<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pamt']=$this->input->post('pamt');
		$data['ptype']=$this->input->post('ptype');
		$data['bname']=urldecode($this->input->post("bname"));
		$data['bid']=$this->input->post("bid");
		$data['pid']=$this->input->post("pid");
		$data['bcontact']=$this->input->post("bcontact");
		
		$this->load->view('business/product_form',$data);		
	}

	public function check()
	{
		$amount =  $this->input->post('payble_amount');
	    $product_info = $this->input->post('product_info');
	    $customer_name = $this->input->post('customer_name');
	    $customer_emial = $this->input->post('customer_email');
	    $customer_mobile = $this->input->post('mobile_number');
	    $customer_address = $this->input->post('customer_address');
	    $bid=$this->input->post("bid");
	    $pid=$this->input->post("pid");
	    	//payumoney details
	    
	    
	        $MERCHANT_KEY = "MY8rZOnM"; //change  merchant with yours
	        $SALT = "foS0cO0dMw";  //change salt with yours 

	        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	        //optional udf values 
	        $udf1 = $bid;
	        $udf2 = $pid;
	        $udf3 = '';
	        $udf4 = '';
	        $udf5 = '';
	        
	         $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
	         $hash = strtolower(hash('sha512', $hashstring));
	         
	       $success = site_url() . '/business/Status';  
	        $fail = site_url() . '/business/Status';
	        $cancel = site_url() . '/business/Status';
	        
	        
	         $data = array(
	            'mkey' => $MERCHANT_KEY,
	            'tid' => $txnid,
	            'hash' => $hash,
	            'amount' => $amount,           
	            'name' => $customer_name,
	            'productinfo' => $product_info,
	            'mailid' => $customer_emial,
	            'phoneno' => $customer_mobile,
	            'address' => $customer_address,
	            'action' => "https://sandboxsecure.payu.in", //for live change action  https://secure.payu.in
	            'sucess' => $success,
	            'failure' => $fail,
	            'cancel' => $cancel,
	            'udf1'=>$udf1,
	            'udf2'=>$udf2
	        );
	        $this->load->view('business/confirmation', $data);   
     
	}

	public function help()
	{
		$this->load->view('business/help');
	}
}
