<?php
class Email_controller extends CI_Controller {

//x
	

public function checkdatabase(){
	$this->db->limit(10);
	$this->db->where('status','pending');
	$list=$this->db->get('email_notifications');
	$lists = $list->result_array();


	foreach ($lists as $elist) {
		$title=$elist['title'];
		$message=$elist['message'];
		$email=$elist['email'];;
		$id=$elist['id'];
	$status=$this->notifyByEmail($title,$message,$email,$id);
		
	}

}	

public function notifyByEmail($title,$message,$email,$id){
// title, message,email
//reset time limit to 30 seconds
// set_time_limit(30);


$data['title']=$title;
$data['message']=$message;

$content = $this->load->view('email/index', $data, TRUE);

$config = Array(
'protocol' => 'smtp',
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587, //465,
'smtp_user' => 'emsnotificationsystem@gmail.com',
'smtp_pass' => 'AccessDenied',
'smtp_crypto' => 'tls',
'smtp_timeout' => '60',
'mailtype'  => 'html', 
'charset'   => 'iso-8859-1'
);
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";
$this->load->library('email', $config);
$this->email->from('emsnotificationsystem@gmail.com', 'EMS');
$this->email->to($email);
$this->email->subject($title);
$this->email->message($content);

//$this->email->send();
if ( ! $this->email->send()) {

}
else{
$edata = ['status'=>'sent'];
$this->db->where('id',$id);
$this->db->update('email_notifications',$edata);
}

}




}
?>