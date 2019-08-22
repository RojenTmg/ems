<?php
	class Employee_controller extends CI_Controller {

		public function __construct()
        {
               parent::__construct();
               if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true|| $_SESSION['type']!='employee') {
					redirect('login');
				}
			date_default_timezone_set('Asia/Kathmandu');

        }
        public function view($page, $title = 'EMS', $data = FALSE)
         {
			if (!file_exists(APPPATH . 'views/employee/pages/' . $page . '.php')) 
				show_404();

			$this->load->view('employee/templates/header', $title);
			$this->load->view('employee/pages/' . $page . '', $data);
			$this->load->view('employee/templates/footer');
		}

		public function generalPage($page = 'dashboard') 
		{
			if (!file_exists(APPPATH . 'views/employee/pages/' . $page . '.php')) {
				show_404();
			}
 
			$data['title'] = ucfirst($page);
			$data['user']= $this->Admin_model->user_detail('users',$_SESSION['user_id']);
			$data['post'] = $this->Admin_model->getEmployeeDetails($_SESSION['user_id']);

		

			if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
			{
				$this->load->view('employee/templates/header');
				$this->load->view('employee/pages/' . $page, $data);
				$this->load->view('employee/templates/footer');
			}
			else { redirect('login');}
		}


		public function dashboard()
		{
			$data['title']= 'Dashboard';
			$data['employee_leaves'] = $this->Employee_model->findAllLeaves($_SESSION['user_id']);
			$data['employee_leaves_approve'] = $this->Employee_model->findApproveLeaves();
			$data['recommendations']=$this->Employee_model->recommendationList('0');
			$data['duty_by']=$this->Admin_model->employeeList();
			
			$data['leavelist']=$this->leaveBalance();

			$this->view('dashboard', $data);
		}

		// archive approved list
		public function leaveApproveArchive()
		{
			$data['title']= 'Archived Lists';
			$data['employee_leaves_approve'] = $this->Employee_model->findArchivedApproveLeaves();
			$data['duty_by']=$this->Admin_model->employeeList();
			$data['leavelist']=$this->leaveBalance();

			$this->view('leave_approve_archive', $data);
		}
		// archived recommended leaves list page
		public function leaveRecommendedArchive()
		{
			$data['title']= 'Archived Lists';
			$data['employee_leaves'] = $this->Employee_model->findAllLeaves();
			$data['recommendations']=$this->Employee_model->recommendationList('1');
			$data['duty_by']=$this->Admin_model->employeeList();
			$data['leavelist']=$this->leaveBalance();

			$this->view('leave_recommended_archive', $data);
		}

		public function leaveBalance(){
			return $this->Employee_model->leaveDetail($_SESSION['user_id']);	
		}

		public function leave_details($lid=NULL){

			$title['title']= 'Leave Details';
			$data['leavelist']=$this->leaveBalance();
			$data['leaveDetail']=$data['leavelist'][$lid];
			$data['leaveDetail']['taken']=$data['leaveDetail']['duration']-$data['leaveDetail']['remain_days'];

			$data['employee_leaves'] = $this->Employee_model->findAllLeaves($_SESSION['user_id'], $lid);

			$this->view('leave_details', $title, $data);

		}

		public function profileupdate($id = NULL) 
		{
		$title['title'] = 'Update Profile';

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{	
			$data['empList']=$this->Admin_model->employeeList();
			$data['departments']=$this->Database_model->findAll('departments');
			if($this->uri->segment(3)){
				 $id=$this->uri->segment(3);   
				$data['assigned']=$this->Admin_model->getAssign($id);
				$data['packagelist']=$this->Admin_model->packageManage();			}
			else{
				$data['assigned']='';
			}
			if ($id != NULL) {
				$data['post'] = $this->Admin_model->getEmployeeDetails($id);
				$data['work_experience'] = $this->Database_model->find('employee_work_experience', 'emp_id', $id);
				$data['documents'] = $this->Database_model->find('employee_documents', 'emp_id', $id);
				$data['recommender_id']=$this->Admin_model->getRecommenderApprover($id);
				$data['recommender_name']=$this->Admin_model->employeeList();
				$data['package_name']=$this->Admin_model->packageManage();
				$this->view('profile_update', $title, $data);
			} else
				$this->view('profile_update', $title);
		} else
			redirect('login');
	}

function checkExp(){
	if(isset($_SESSION['current_employee_id']))
		$id=$_SESSION['current_employee_id'];
	else $id = $_SESSION['user_id'];

	$this->db->where('emp_id',$id);
	$getlist=$this->db->get('employee_work_experience');
	$list=$getlist->result_array();

	if(count($list)>0) echo "true"; else echo "false";
}


		public function leaveForm()
		{
			$title['title'] = 'Leave Form';
			$data['duty_performed_by'] = $this->Database_model->findAll('employees');
			$data['leaves'] = $this->Employee_model->leaveDetail($_SESSION['user_id'], 0);
			$data['leavelist']=$this->leaveBalance();
			
			$i = TRUE; 
			foreach ($data['leaves'] as $value) {
            	if ($i == TRUE) {
              		$data['remainingDuration'] = $value['remain_days']; 
              		$data['initialLeave'] = $value['leave_name']; $i = FALSE;
            	}
            }
			if ($this->input->post('submit') != NULL) {
				$leave = $this->input->post();
						
				$data['clb'] = $this->Employee_model->checkLeaveBalance($_SESSION['user_id'], (int)$leave['leave_id']);

				// from_date and to_date validation
				if (!empty($leave['to_date'])) {	
					// if from-date is greater than to date
					if ($leave['to_date'] < $leave['from_date']) {	
						$data['leave_form'] = $leave; 
						$data['not_valid_inject'] = 'From-date cannot be greater than to-date';
						$this->view('leave_form', $title, $data);
						return;
					}
					// if user tries to submit more than 0.5 day for half day
					if ($leave['duration_type'] == 'half' && (round((strtotime($leave['to_date']) - strtotime($leave['from_date'])) / 86400)) > 0.5) { 
						$data['leave_form'] = $leave; 
						$data['not_valid_inject'] = 'Half day has exceeded 1/2 day.';
						$this->view('leave_form', $title, $data);
						return;
					}
					// if user tries to submit more than 1 day for full day
					if ($leave['duration_type'] == 'full' && (round((strtotime($leave['to_date']) - strtotime($leave['from_date'])) / 86400) + 1) > 1) {
						$data['leave_form'] = $leave; 
						$data['not_valid_inject'] = 'A full day cannot be greater than 1 day.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}

				// checking leave balance (if the remaining days exceeds more than the requested days)
				if ($leave['duration_type'] == 'half') {
					if ($data['clb']['elb_remain_days'] < 0.5) {
						$data['leave_form'] = $leave; 
						if ((int)$leave['leave_id'] == 1) $data['leave_form']['leave_name'] = 'casual'; 
						$data['not_valid'] = 'You have only <script type="text/javascript"> document.write(trim_day('. $data['clb']['elb_remain_days'] .')); </script> left for '. $data['clb']['l_leave_name'].'.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}
				elseif ($leave['duration_type'] == 'full') {
					if ($data['clb']['elb_remain_days'] < 1) {
						$data['leave_form'] = $leave; 
						if ((int)$leave['leave_id'] == 1) $data['leave_form']['leave_name'] = 'casual'; 
						$data['not_valid'] = 'You have only <script type="text/javascript"> document.write(trim_day('. $data['clb']['elb_remain_days'] .')); </script> left for '. $data['clb']['l_leave_name'].'.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}
				else {
					if ($data['clb']['elb_remain_days'] < (round((strtotime($leave['to_date']) - strtotime($leave['from_date'])) / 86400) + 1)) {
						$data['leave_form'] = $leave; 
						$data['not_valid'] = 'You have only <script type="text/javascript"> document.write(trim_day('. $data['clb']['elb_remain_days'] .')); </script> left for '. $data['clb']['l_leave_name'].'.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}

				$leaveData = array(
					'emp_id'=> $_SESSION['user_id'],	// inserts current user id
					'leave_id'=> (int)$leave['leave_id'],
					'from_date'=> $leave['from_date'],
					'duration_type' => $leave['duration_type'],
					'duty_performed_by'=> (int)$leave['duty_performed_by'],
					'reason'=> trim($leave['reason'])
				);

				if (!empty($leave['to_date'])) {
					$leaveData['to_date'] = $leave['to_date'];
				}

				$this->Database_model->insert('employee_leaves', $leaveData);

				$data['valid'] = TRUE; 

				// Testing day
				// echo $leave['from_date'] . ' + ' . date("D", strtotime(date("Y-m-d", strtotime($leave['from_date'] . ' -2 days')))); die();
				// // if ($leave['from_date'] - 3 ) {
				// // }				

				// var_dump($this->db->query('SELECT * from employee_leaves WHERE (emp_id = 278 AND from_date = "2019-08-23" AND duration_type != "half") OR (emp_id = 278 AND to_date = "2019-08-23"  AND duration_type != "half")')->num_rows()); die();

				// $data['leave_by_emp'] = $this->Database_model->find('employee_leaves', 'id', 291);
				
				// foreach ($data['leave_by_emp'] as $lbe) {
				// 	$from_date = $lbe['from_date'];
				// 	$emp_id = $lbe['emp_id'];
				// }
				// echo $from_date. ' ' . $emp_id; die();

				// echo  date("Y-m-d", strtotime("2019-08-25" . ' -2 days'));
				// echo $this->Employee_model->findLeaveOnFri(278, date("Y-m-d", strtotime("2019-08-25" . ' -2 days'))); die();



				// sending email to employee who requested leave
				$leavename=$this->Admin_model->getNameByLid($leave['leave_id']);
				$message="Your ".$leavename." from ".$leave['from_date']. " has been sent for processing.";
				$email=$this->Admin_model->getEmail();
				$this->Admin_model->sendEmail('Leave Applied',$message,$email);

				//sending mail to recommender
				$requester_name=$this->Admin_model->getName($_SESSION['user_id']);
				$message=$leavename." has been applied by ".$requester_name." from ".$leave['from_date'];
				$recId=$this->Admin_model->getRecommenderId($_SESSION['user_id']);
				$email=$this->Admin_model->getEmail($recId)
				;
				$title="Leave Requested by ".$requester_name;
				$this->Admin_model->sendEmail($title,$message,$email);

				$this->view('leave_form', $title, $data);
			} 
			else {
				$this->view('leave_form', $title, $data);
			}


		}

		public function leaveSubstituteForm()
		{
			$title['title'] = 'Substitute Leave Form';

			if ($this->input->post('submit') != NULL) {

				// $leaveData = array(
				// 	'emp_id'=> $_SESSION['user_id'],	// inserts current user id
				// 	'leave_id'=> (int)$leave['leave_id'],
				// 	'from_date'=> $leave['from_date'],
				// 	'duration_type' => $leave['duration_type'],
				// 	'duty_performed_by'=> (int)$leave['duty_performed_by'],
				// 	'reason'=> trim($leave['reason'])
				// );

				// $this->Database_model->insert('employee_leaves', $leaveData);

				$data['not_valid'] = TRUE; 
				// // send mail to recommender

				$this->view('leave_substitute_form', $title, $data);
			} 
			else {
				$this->view('leave_substitute_form', $title);
			}
		}


		// // recommenders page
		// public function recommendationList()
		// {

		// 	if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		// 	{
		// 		$title['title'] = 'Recommendation List';

		// 		$recommender_data['recommendations']=$this->Employee_model->recommendationList();
		// 		$recommender_data['duty_by']=$this->Admin_model->employeeList();
		// 		$this->view('recommendation_list', $title, $recommender_data);
				

		// 	}
		// 	else { redirect('login');}
		// }

		// leave recommend to approver
		public function recommendLeave()
		{
			
			extract($_POST);
			
			$data=array('is_recommended'=>'recommended','recommender_id'=>$_SESSION['user_id']);
			$this->db->where('id',$l_id);
			$this->db->update('employee_leaves',$data);

			$this->db->where('id',$l_id);
			$getDetail=$this->db->get('employee_leaves');
			$list=$getDetail->row_array();

			// send email to leave requester
			$recommender_name=$this->Admin_model->getName($_SESSION['user_id']);
			$leavename=$this->Admin_model->getNameById($l_id);

			$message="Your ".$leavename." from ".$list['from_date']." has been recommended by ".$recommender_name." and waiting to be approved";

			$email=$this->Admin_model->getEmail($list['emp_id']);
			$this->Admin_model->sendEmail('Leave Recommended',$message,$email);
			// end of send mail

			//send email to approver to approve the leave request
				$message=$recommender_name." has recommended a ".$leavename." and is waiting for your approval. ";
				$reqId=$this->Admin_model->getEmpIdbyLID($l_id);
				$recId=$this->Admin_model->getRecommenderId($reqId);
				$email=$this->Admin_model->getEmail($recId)
				;
				$title="New Leave Request";
				$this->Admin_model->sendEmail($title,$message,$email);
		
		}
		// deny leave by recommender
		public function denyLeaveFromRecommender()
		{
			
			extract($_POST);
			$data=array('is_recommended'=>'denied','denial_reason'=>$denial_reason,'recommender_id'=>$_SESSION['user_id']);
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);

			// send email to leave requester
			$this->db->where('id',$id);
			$getDetail=$this->db->get('employee_leaves');
			$list=$getDetail->row_array();

			$recommender_name=$this->Admin_model->getName($_SESSION['user_id']);
			$leavename=$this->Admin_model->getNameById($id);

			$message="Your ".$leavename." from ".$list['from_date']. " has been denied by ".$recommender_name.".";
			$message .='<br><br>';
			$message .="Reason for Leave Denied is:<br>".$denial_reason;
			$email=$this->Admin_model->getEmail($list['emp_id']);
			$this->Admin_model->sendEmail('Leave Denied by Recommender',$message,$email);
			// end of send mail

		}

		// deny leave by Approver
		public function denyLeaveFromApprover()
		{
			extract($_POST);
			$data=array('is_approved'=>'denied', 'denial_reason'=>$denial_reason,'approver_id'=>$_SESSION['user_id']);
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);

			// send email to leave requester
			$this->db->where('id',$id);
			$getDetail=$this->db->get('employee_leaves');
			$list=$getDetail->row_array();

			$approver_name=$this->Admin_model->getName($_SESSION['user_id']);
			$leavename=$this->Admin_model->getNameById($id);
			$message="Your ".$leavename." from ".$list['from_date']. " has been denied by ".$approver_name.".";
			$message .='<br><br>';
			$message .="Reason for Leave Denied is:<br>".$denial_reason;

			$email=$this->Admin_model->getEmail($list['emp_id']);
			$this->Admin_model->sendEmail('Leave Denied by Approver',$message,$email);
			// end of send mail
		}


// add personal details
	public function addPersonalInformation()
	{
		$status=array();
		extract($_POST);
		$data=array(
			'gender'=>$gender,
			'dob'=>$dob,
			'email'=>$email
		);

		$id=$_SESSION['user_id'];

		$this->Admin_model->update_employee($data,$id);
		$status=array('true');
		echo json_encode($status);
	}

//Address form
	public function addAddress()
	{
		$status=array();
		extract($_POST);

//validate
		$this->form_validation->set_rules('currentaddress_street','Current street','required|trim',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('currentaddress_municipality','Current municipality','required|trim',array('required' => 'You must provide a %s.'));

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{

			$primaryAdd=array(
				'street'=>$permanentaddress_street,
				'municipality'=>$permanentaddress_municipality,
				'district'=>$permanentaddress_district,
				'state'=>$permanentaddress_state,
				'country'=>$permanentaddress_country,

			);
			$secondaryAdd=array(
				'street'=>$currentaddress_street,
				'municipality'=>$currentaddress_municipality,
				'district'=>$currentaddress_district,
				'state'=>$currentaddress_state,
				'country'=>'NP'
			);

			// check is used in whether the adress is already in database or not
			$check=NULL;

	
				$query=$this->db->get_where("addresses",$primaryAdd);
				$check=$query->row_array();
		

			if($check==NULL){
				$id=$_SESSION['user_id'];
				$primary_id=$this->Admin_model->update_address($primaryAdd,$id);
					
			}
			else{
				$primary_id=$check['address_id'];
			}

			$query=$this->db->get_where("addresses",$secondaryAdd);
			$check=$query->row_array();

			if($check==''){
				$id=$_SESSION['user_id'];
				$secondary_id=$this->Admin_model->update_address($secondaryAdd,$id);
			}
			else{
				$secondary_id=$check['address_id'];
			}
				$id=$_SESSION['user_id'];

			$this->Admin_model->update_employee_address($primary_id,$secondary_id,$id);

			$status=array('true');
		}
		echo json_encode($status);
	} 

		public function profile()
		{	
			$data['post'] = $this->Database_model->getEmployeeDetails($_SESSION['user_id']);
			$data['work_experience'] = $this->Database_model->find('employee_work_experience', 'emp_id', $_SESSION['user_id']);
			$data['documents'] = $this->Database_model->find('employee_documents', 'emp_id', $_SESSION['user_id']);
		
			$title['title'] = $data['post']['first_name'] .' '. $data['post']['middle_name'] .' '. $data['post']['last_name'];
			$data['recommender_id']=$this->Admin_model->getRecommenderApprover($_SESSION['user_id']);
			$data['recommender_name']=$this->Admin_model->employeeList();
			$data['package_name']=$this->Admin_model->packageManage();
			$this->view('profile', $title, $data);
		}

		// approve status on table 'employee_leaves' and update leave balance on table 'employee_leave_balance'
		public function leaveApprove()
		{
			extract($_POST);

			$data['leave_by_emp'] = $this->Database_model->find('employee_leaves', 'id', $id);
			$data['leave_blnc_by_emp'] = $this->db->get_where('employee_leave_balance', array('emp_id =' => $e_id, 'leave_id =' => $leave_id))->row_array();

			$remaining_days = $this->Employee_model->checkLeaveBalance($e_id, $leave_id);
		
			if ($d_type == 'half') {
				$leaveBalance =  $remaining_days['elb_remain_days'] - 0.5;
			}
			else if ($d_type == 'full') { 
				$leaveBalance =  $remaining_days['elb_remain_days'] - 1;
			}
			else if ($d_type == 'multiple') {
				$leaveBalance =  $remaining_days['elb_remain_days'] - $no_of_days;
			}
			


			// if employee request leave for Friday and Sunday separately then, Saturday is also counted as a leave within a single week
			foreach ($data['leave_by_emp'] as $lbe) {
				$from_date = $lbe['from_date'];
				$emp_id = $lbe['emp_id'];
			}

			if (date("D", strtotime($from_date)) == 'Sun') {
				if ($this->Employee_model->findLeaveOnFri(278, date("Y-m-d", strtotime("2019-08-25" . ' -2 days'))) == TRUE) { 
				 	// $this->Employee_model->leaveApprove($id, $emp_id, $leave_id, 22);
					$leaveBalance =  $leaveBalance - 1;
				}
			}

				
			$this->Employee_model->leaveApprove($id, $e_id, $leave_id, $leaveBalance);

			// send email to leave requester
			$this->db->where('leave_id',$leave_id);
			$getDetail=$this->db->get('employee_leaves');
			$list=$getDetail->row_array();

			$approver_name=$this->Admin_model->getName($_SESSION['user_id']);
			$leavename=$this->Admin_model->getNameByLid($leave_id);
			$message="Your ".$leavename." from ".$list['from_date']. " to ".$list['to_date']. " has been approved by ".$approver_name.".";
			
			$email=$this->Admin_model->getEmail($list['emp_id']);
			$this->Admin_model->sendEmail('Leave Approved',$message,$email);
			// end of send mail

	}

		public function denyApprove()
		{
			extract($_POST);
			$data=array('is_approved'=>'denied', 'denial_reason'=>$denial_reason);
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);



		}

		// archive approval lists
		public function archiveApprovalRecord()
		{
			extract($_POST);
			$data=array('is_archived_by_approver'=>'1');
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
		}

		// archive recommender lists
		public function archiveRecommendRecord()
		{
			extract($_POST);
			$data=array('is_archived'=>'1');
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
		}

		// unarchive recommended leaves
		public function unArchiveRecommendedLeave()
		{
			extract($_POST);
			$data=array('is_archived'=>'0');
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
		}

		// unarchive approved leaves
		public function unArchiveApprovedLeave()
		{
			extract($_POST);
			$data=array('is_archived_by_approver'=>'0');
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
		}

		// public function appLeaveApprove()
		// {	
		// 	$title['title'] = 'Approve Leaves';
		// 	$data['employee_leaves'] = $this->Employee_model->findApproveLeaves();

		// 	$this->view('app_leave_approve', $title, $data);
		// }




// contact form
	public function addContact()
	{
		$status=array();
		extract($_POST);
		$this->form_validation->set_rules('mobile_phone','Mobile phone','required|trim',array('required' => 'You must provide a %s.'));

		if($home_phone!='')
		{
			if(!$this->contactNumber($home_phone))
			{
				$msg="errorContact";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if($other_phone1!='' || $other_phone2!='' || $other_phone3!='')
		{
			if(!$this->contactNumber($other_phone1) || !$this->contactNumber($other_phone2) || !$this->contactNumber($other_phone3))
			{
				$msg="errorContact";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if(!$this->contactNumber($mobile_phone))
		{
			$msg="errorContact";
			array_push($status, $msg);
			echo json_encode($status);
			return ;
		}

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'home_phone'=>$home_phone,
				'mobile_phone'=>$mobile_phone,
				'other_phone1'=>$other_phone1,
				'other_phone2'=>$other_phone2,
				'other_phone3'=>$other_phone3
			);
					
				$id=$_SESSION['user_id'];

			$contact_id=$this->Admin_model->update_contact($data,$id);
			$this->Admin_model->update_employee_contact($contact_id,$id);
				$status=array('true');
			

		}
		echo json_encode($status);
	}
// nationality
	public function addNationality()
	{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('nationality','nationality','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('visa_permission',' Visa Permission','required',array('required' => 'You must select a %s.'));


		$this->form_validation->set_rules('passport_no','Passport Number','required|trim',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('passport_issue_place','Place of Issue','required|trim',array('required' => 'You must provide a %s.'));

		if($visa_type!='')
		{
			if(!$this->textOnly($visa_type))
			{
				$msg="errorVisatype";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			if($nationality=='Nepalese')
			{
				$data=array(
				'nationality'=>$nationality,
				'visa_permission'=>'Not required',
				'visa_type'=>'',
				'visa_expiry_date'=>'',
				'passport_no'=>$passport_no,
				'passport_issue_place'=>$passport_issue_place
			);
			}
			else{
				$data=array(
				'nationality'=>$nationality,
				'visa_permission'=>$visa_permission,
				'visa_type'=>$visa_type,
				'visa_expiry_date'=>$visa_expiry_date,
				'passport_no'=>$passport_no,
				'passport_issue_place'=>$passport_issue_place
			);
			}
					
				$id=$_SESSION['user_id'];
					

			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}
		echo json_encode($status);
	}

// Emergency contact
	public function addEmergency()
	{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('e_name','Contact Person Name','required|trim',array('required' => 'You must provide detail of %s.'));

		$this->form_validation->set_rules('e_relation','Relation','required|trim',array('required' => 'You must provide relation to the person.'));

		$this->form_validation->set_rules('e_phone','Contact No.','required|trim',array('required' => 'You must provide contact details of person.'));


		if(!$this->textOnly($e_name)|| !$this->textOnly($e_relation))
		{
			$msg="errorEmergency";
			array_push($status, $msg);
			echo json_encode($status);
			return ;
		}

		if(!$this->contactNumber($e_phone))
		{
			$msg="errorEmergency";
			array_push($status, $msg);
			echo json_encode($status);
			return ;
		}

		if($e_address!='')
		{
			if(!$this->alphanumeric($e_address))
			{
				$msg="errorEmergency";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'e_name'=>$e_name,
				'e_relation'=>$e_relation,
				'e_address'=>$e_address,
				'e_phone'=>$e_phone
			);

						$id=$_SESSION['user_id'];


			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}
		echo json_encode($status);
	}

// Education tab
	public function addEducation()
	{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('highest_degree','Highest Degree','required',array('required' => 'You must provide your highest degree'));

		$this->form_validation->set_rules('institute','Institute','required|trim',array('required' => 'You must provide name of the Institute.'));
		
		if($highest_degree!='PhD' && $highest_degree!='Master' && $highest_degree!='Bachelor' && $highest_degree!='High School' && $highest_degree!='Middle School'  && $highest_degree!='None' ){
		$msg="error";
		array_push($status, $msg);
		echo json_encode($status);
		return ;
		}

		if(!$this->textOnly($degree_title)|| !$this->textOnly($university)|| !$this->textOnly($institute))
		{
			$msg="errorEducation";
			array_push($status, $msg);
			echo json_encode($status);
			return ;
		}

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'highest_degree'=>$highest_degree,
				'degree_title'=>$degree_title,
				'university'=>$university,
				'institute'=>$institute
			);
					
						$id=$_SESSION['user_id'];
					

			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}
		echo json_encode($status);
	}

// health information
	public function addHealth()
	{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('blood_group','Blood Group','required',array('required' => 'You must provide %s'));

		if($blood_group!='A +ve' && $blood_group!='A -ve' && $blood_group!='B +ve' && $blood_group!='B -ve' && $blood_group!='AB +ve'  && $blood_group!='AB -ve' && $blood_group!='O +ve'  && $blood_group!='O -ve' && $blood_group!=''){
			$msg="error";
			array_push($status, $msg);
			echo json_encode($status);
			return ;
		}
		if($medical_complications!='')
		{
			if(!$this->alphanumeric($medical_complications))
			{
				$msg="errorMedical";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}
		
		if($regular_medication!='')
		{
			if(!$this->alphanumeric($regular_medication) )
			{
				$msg="errorMedical";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if($allergy_description!='')
		{
			if(!$this->alphanumeric($allergy_description))
			{
				$msg="errorMedical";
				array_push($status, $msg);
				echo json_encode($status);
				return ;
			}
		}

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'blood_group'=>$blood_group,
				'medical_complications'=>$medical_complications,
				'regular_medication'=>$regular_medication,
				'allergies'=>$allergies,
				'allergy_description'=>$allergy_description
			);
					
						$id=$_SESSION['user_id'];
					

			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}
		echo json_encode($status);
	}
	



//function for adding documents
	function addDocuments(){
	$_SESSION['path']="document"; 
		$status='';
		$_POST = $this->security->xss_clean($_POST);

		extract($_POST);

		$tmpName = $_FILES['document']['tmp_name'];
		$realName= $_FILES['document']['name'];

		// list of allowed file types
		$allowed =  array('gif','png' ,'jpg','doc','docx','pdf');

		$ext = pathinfo($realName, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
		echo 'filerror';
		return ;
		}



		$target_path = 'assets/files/'.$realName;
		move_uploaded_file($tmpName,$target_path);

					
						$id=$_SESSION['user_id'];
					

		if($doc_title=='')
		{
			$doc_data=array(
				'doc_title'=>$realName,
				'doc_file'=>$realName,
				'emp_id'=>$id
			);

		}
		else{
			$doc_data=array(
				'doc_title'=>$doc_title,
				'doc_file'=>$realName,
				'emp_id'=>$id
			);}


			if(	$this->Admin_model->insert('employee_documents',$doc_data))

			// if(	$this->Admin_model->add_documents($doc_data))
				{$status='true';}

			else{ $status='false'; }

			echo $status;

		}
	// <!-- delete files from the database -->
	 function deleteFile()
	 {
	 	$_SESSION['path']="document";
		extract($_POST);
		$this->db->where('doc_id',$doc_id);
			$getFile = $this->db->get('employee_documents');
			$document= $getFile->row_array();

			$filename=$document['doc_file'];
			$path='assets/files/'.$filename;
		$this->Admin_model->deleteFile($path,$doc_id);
	}


	
// for work experience
function addWork(){
	extract($_POST);
$experience = trim($experience);

	if(strlen($experience)==0) {
		echo "error";
		return ;
	}	
	else{
		$data=[
			'experience'=>$experience,
			'emp_id'=>$_SESSION['user_id']
		];
		if($this->Admin_model->insert('employee_work_experience',$data))
		echo "success";
		else echo "error";
		return ;
	}
}

function editWork(){
	extract($_POST);
$experience = trim($experience);

	if(strlen($experience)==0) {
		echo "error";
		return ;
	}	
	else{
		$timestamp = date('Y-m-d G:i:s');
		$data=[
			'experience'=>$experience,
			'emp_id'=>$_SESSION['user_id'],
			'id'=>$id,
			'modified_date'=>$timestamp
		];
		$this->db->where('id',$id);
		if($this->db->update('employee_work_experience',$data))
		echo "success";
		else echo "error";
		return ;
	}
}

function deleteWorkExp(){
	extract($_POST);
	$status=$this->Admin_model->deleteWorkExperience($id);
	echo $status;
}
//employe profile update:  edits general information
	public function updateGeneralbyEmployee()
	{
		$_POST = $this->security->xss_clean($_POST);

		$result=array();
		extract($_POST);

		if($gender!='Male' && $gender!='Female' && $gender!='Others'){
			$msg="errorgender";
			array_push($result, $msg);
			echo json_encode($result);
			return ;
		}


		if($dob>Date('Y-m-d'))
		{
			return 0;
		}

		if( !$this->validateEmail($email))
			{
				$msg="emailInvalid";
				array_push($result, $msg);
				echo json_encode($result);
				return ;
			}

		$this->form_validation->set_rules('email','Email address','required|trim');

		if($this->form_validation->run()===FALSE)
		{
			$result=$this->form_validation->error_array();
		}
		else
		{
			$data=array(
				
				'gender'=>$gender,
				'dob'=>$dob,
				'email'=>$email
			);
			$id=$_SESSION['user_id'];
			$this->db->where('emp_id',$id);
			if($this->db->update('employees',$data))
			{
				
				array_push($result, 'true');
			}

		}

		echo json_encode($result);
	}


// checking input types
public function textOnly($text)
{
	if (preg_match('/^[a-zA-Z .]+$/',$text ))
		return true;
	else
		return false;
}

// checking input types number
public function numberonly($text)
{
	if (preg_match('/^[[0-9\s .]+$/',$text ))
		return true;
	else
		return false;
}

// checking phone number
public function contactNumber($value)
{
	if(preg_match('/^[0-9\-\(\)\/\+\s]*$/', $value))
		return true;
	else
		return false;
}

// alphanumeric but must contain alphabets
public function alphanumeric($value)
{
	if(preg_match('/^(?=.*[a-zA-Z])[a-zA-Z0-9 .]+$/',$value))
		return true;
	else
		return false;
}

// EMAIL VALIDATION
public function validateEmail($email)
{
	if(preg_match('/^(?=.*[a-zA-Z])\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email))
		return true;
	else
		return false;
}


// check date 
public function validateDate($date)
{
	if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) 
    	return true;
 	else  
   		return false; 
}
}
