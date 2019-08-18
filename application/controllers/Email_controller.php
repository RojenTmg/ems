<?php
class Email_controller extends CI_Controller {


public function checkdatabase(){
	$this->db->where('status','0');
	$list=$this->db->get('email_notifications');
	$lists = $list->result_array();

	foreach ($lists as $elist) {
		if($this->notifyByEmail($elist['title'],nl2br($elist['message']),$elist['email'])){
			$this->db->where('id',$elist['id']);
			$this->db->update('employee_notifications',"array['status'=>'1']");
		}
	}

}	

public function notifyByEmail($title,$message,$email){
// title, message,email
//reset time limit to 30 seconds
set_time_limit(30);

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
return false;
}
else{
return true;
}

}




}
?>