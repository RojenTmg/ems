<?php
	class Employee_controller extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
               if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true|| $_SESSION['type']!='employee') {
					redirect('login');
				}
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


			//showing percentage in the progress bar
		    // progressBar();

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
			$data['employee_leaves'] = $this->Employee_model->findAllLeaves();
			$data['employee_leaves_approve'] = $this->Employee_model->findApproveLeaves();
			$data['recommendations']=$this->Employee_model->recommendationList();
			$data['duty_by']=$this->Admin_model->employeeList();
			$data['leavelist']=$this->leaveBalance();

			$this->view('dashboard', $data);
		}

		public function leaveBalance(){
			return $this->Employee_model->leaveDetail($_SESSION['user_id']);	
		}

		public function leave_details($lid=NULL){

			$title['title']= 'Leave Details';
			$data['leavelist']=$this->leaveBalance();
			$data['leaveDetail']=$data['leavelist'][$lid];
			$data['leaveDetail']['taken']=$data['leaveDetail']['duration']-$data['leaveDetail']['remain_days'];
			$this->load->view('employee/templates/header',$title);
			$this->load->view('employee/pages/leave_details',$data);
			$this->load->view('employee/templates/footer');
		}


		public function profileupdate($id = NULL) 
		{
		$title['title'] = 'Update Profile';

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{	
			$data['empList']=$this->Admin_model->employeeList();

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
		
				$this->view('profile_update', $title, $data);
			} else
				$this->view('profile_update', $title);
		} else
			redirect('login');
	}


		public function leaveForm()
		{
			$title['title'] = 'Leave Form';
			$data['duty_performed_by'] = $this->Database_model->findAll('employees');
			$data['leaves'] = $this->Database_model->findAll('leaves');

			if ($this->input->post('submit') !== NULL) {
				$leave = $this->input->post();
		
				$data['clb'] = $this->Employee_model->checkLeaveBalance($_SESSION['user_id'], (int)$leave['leave_id']);

				if ($leave['duration_type'] == 'half') {
					if ($data['clb']['elb_remain_days'] < 0.5) {
						$data['not_valid'] = 'You have only '.$data['clb']['elb_remain_days'].' day left for '. $data['clb']['l_leave_name'].'.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}
				elseif ($leave['duration_type'] == 'full') {
					if ($data['clb']['elb_remain_days'] < 1) {
						$data['not_valid'] = 'You have only '.$data['clb']['elb_remain_days'].' day left for '. $data['clb']['l_leave_name'].'.';
						$this->view('leave_form', $title, $data);
						return;
					}
				}
				else {
					if ($data['clb']['elb_remain_days'] < (round((strtotime($leave['to_date']) - strtotime($leave['from_date'])) / 86400) + 1)) {
						$data['not_valid'] = 'You have only '.$data['clb']['elb_remain_days'].' days left for '. $data['clb']['l_leave_name'].'.';
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
					'reason'=> $leave['reason']
				);

				if (!empty($leave['to_date'])) {
					$leaveData['to_date'] = $leave['to_date'];
				}

				$this->Database_model->insert('employee_leaves', $leaveData);

				$data['valid'] = TRUE;
				$this->view('leave_form', $title, $data);
			} 
			else {
				$this->view('leave_form', $title, $data);
			}


		}

		// recommenders page
		public function recommendationList()
		{

			if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
			{
				$title['title'] = 'Recommendation List';

				$recommender_data['recommendations']=$this->Employee_model->recommendationList();
				$recommender_data['duty_by']=$this->Admin_model->employeeList();
				$this->view('recommendation_list', $title, $recommender_data);
				

			}
			else { redirect('login');}
		}

		// leave recommend to approver
		public function recommendLeave()
		{
			
			extract($_POST);
			$data=array('is_recommended'=>'recommended');
			$this->db->where('id',$l_id);
			$this->db->update('employee_leaves',$data);
		
		}
		// deny leave by recommender
		public function denyLeaveFromRecommender()
		{
			
			extract($_POST);
			$data=array('is_recommended'=>'denied','denial_reason'=>$denial_reason);
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
		}

		// deny leave by Approver
		public function denyLeaveFromApprover()
		{
			extract($_POST);
			$data=array('is_approved'=>'denied', 'denial_reason'=>$denial_reason);
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data);
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

			$this->view('profile', $title, $data);
		}

		public function leaveApprove()
		{
			extract($_POST);
			$data=array('is_approved'=>'approved');
			$this->db->where('id',$l_id);
			$this->db->update('employee_leaves',$data);
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
	public function addPan()
	{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('pan','PAN','required',array('required' => 'You must provide a PAN Number'));

		if($this->form_validation->run()===FALSE)
		{
			$status=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'pan'=>$pan
			);	
					
					
						$id=$_SESSION['user_id'];
					

			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}

		echo json_encode($status);

	}



// for work experience
	public function updateWork()
	{
			$_SESSION['path']="work";
		$status='';
		extract($_POST);

		$this->form_validation->set_rules('organization','Organization','required|trim',array('required' => 'Please provide the name of the orgarnization.'));

					
						$id=$_SESSION['user_id'];
					

		$data=array(
			'responsibility'=>$responsibility,
			'organization'=>$organization,
			'from_date'=>$from_date,
			'to_date'=>$to_date,
			'contact_address'=> $contact_address,
			'contact_person_name'=> $contact_person_name,
			'contact_person_phone'=> $contact_person_phone,
			'emp_id'=>$id
		);
		if($exp_id=='')
		$this->Admin_model->insert('employee_work_experience',$data);
		else
		$this->Admin_model->update_work_experience($data,$exp_id);

		// $this->Admin_model->add_work_experience($data);

		$status='true';

		echo $status;

	}


//function for adding documents
	function addDocuments(){
		$_SESSION['path']="document"; 
		$status='';
		extract($_POST);

		$tmpName = $_FILES['document']['tmp_name'];
		$realName= $_FILES['document']['name'];
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


	// delete work Experience from the database
	function deleteWorkExperience()
	{
		$_SESSION['path']="work";
		extract($_POST);
		// $this->db->where('id',$id);
		// 	$getrow = $this->db->get('employee_work_experience');
		// 	$row= $getrow->row_array();

		$this->Admin_model->deleteWorkExperience($id);
	}

// calculate percentage of form
		function progressBar(){

			
				$id=$_SESSION['user_id'];
			

			$this->db->select('first_name, last_name,dob,email,nationality,passport_no,passport_issue_place,e_name,e_relation,e_phone,highest_degree,institute,blood_group,pan');
			$employee_tbl= $this->Admin_model->user_detail('employees',array('emp_id' => $id));

			$this->db->select('contact_id');
			$employee_contacts_tbl=$this->Admin_model->user_detail('employee_contacts',array('emp_id' => $id));

			$this->db->select('secondary_addressId');
			$employee_addresses_tbl=$this->Admin_model->user_detail('employee_addresses',array('emp_id' => $id));

			

	

//showing percentage in the progress bar
			$total=0;
			$filled=0;
			$percentage=0;
			foreach ($employee_tbl as $row) {
				$total++;
				if($row!=NULL) $filled++;
			}
			if(!empty($employee_contacts_tbl)){
				foreach ($employee_contacts_tbl as $row) {
					$total++;
					if($row!=NULL) $filled++;
				}
			}
			else{
				$total=$total+1;
			}
			if(!empty($employee_addresses_tbl)){
				foreach ($employee_addresses_tbl as $row) {
					$total++;
					if($row!=NULL) $filled++;
				}
			}
			else{
				$total++;
			}
			

			if($total==0) $percentage=0;
			else
			$percentage=(int)(($filled/$total)*100);

// for showing profile strength
			$strength='';
			if($percentage>=100) {
				$color='#28a745';
			}
			else if($percentage>70){
				$color='#ffc107';
			}
			else if($percentage>30){
				$color='#dc3545';
			}
			else {
				$color='#dc3545';
			}
//sending data

			$progress_data=array(
				'color'=>$color,
				'percentage'=>$percentage
			);


			echo json_encode($progress_data);
		}

}
