<?php
function send_email($to='',$subject='',$message='',$attach=''){
	$ci =& get_instance();
	$ci->load->library('email');
	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'smtp.gmail.com';
	$config['smtp_port'] = 465;
	$config['smtp_user'] ='kishankanani40@gmail.com'; //'paresh.pampim@gmail.com';
	$config['smtp_pass'] ='kakanani'; //'paresh@gmail';
	$config['smtp_crypto'] = 'ssl';
	$config['smtp_timeout'] = 15;
	$config['mailtype'] = 'html';
	$config['newline'] = "\r\n";
	$ci->email->initialize($config);
	$ci->email->from($config['smtp_user']);
	$ci->email->to($to);
	$ci->email->subject($subject);
	$ci->email->message($message);
	if($attach!=''){
		$ci->email->attach($attach);
	}
	if($ci->email->send()){
		
	}else{
		echo 'error';
	}
}
?>