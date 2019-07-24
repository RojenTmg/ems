<?php
class Admin_controller extends CI_Controller {

 	public function __construct()
        {
           parent::__construct();
           if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true || $_SESSION['type']!='admin') {
				redirect('login');
			}
        }
		
	public function view($page, $title = 'EMS', $data = FALSE) {
		if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) 
			show_404();
		$this->load->view('admin/templates/header', $title);
		$this->load->view('admin/pages/' . $page . '', $data);
		$this->load->view('admin/templates/footer');
	}

	// public function showingEntries($total, $from, $to) {
	// 	if (empty($from)) $from = '0';

	// 	$data['total'] = $total;
	// 	if ($from >= $total) {
	// 		$data['from'] = 0;
	// 		$data['to'] = 0;
	// 	}
	// 	else {
	// 		$data['from'] = $from;
	// 		$data['to'] = $data['from'] + $to;
	// 	}
	// 	return $data;
	// }

	public function dashboard() 
	{
		$title['title'] = 'Dashboard';
		$data['count'] = count($this->Database_model->findAll('employees'));
		$data['assigned']=count($this->Admin_model->assignList());

		$data['remaining']=$data['count']-$data['assigned'];

		$data['emp_added_this_month'] = count($this->Admin_model->findAllByCertainMonth('employees', 'created_date', 'MONTH', date('m')));
		
		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
			$this->view('dashboard', $title, $data);
		else
			redirect('login');
	}
	
	public function employeeArchive() 
	{
		$title['title'] = 'Archived Employee\'s';
		$data['posts']=$this->Admin_model->archivedEmployeeList();

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
			$this->view('employee_archive', $title, $data);
		else
			redirect('login');
	}

	public function employeeAssign() 
	{
		$title['title'] = 'Assign Employee';

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
			$this->view('employee_assign', $title);
		else
			redirect('login');
	}



		public function assignEmployee(){
				extract($_POST);
				$id=$_SESSION['current_employee_id'];
				$data=[
					'approver_id'=>$approver_id,
					'recommender_id'=>$recommender_id,
					'emp_id'=>$id,
					'created_by'=>$_SESSION['user_id']	
				];	
				$this->Admin_model->assign($data,$id);
			
		}

	// viewing single registered employees
	public function employeeDetail($id = NULL) 
	{
		$title['title'] = 'Employee Detail';
		$data['post'] = $this->Admin_model->getEmployeeDetails($id);
		$data['work_experience'] = $this->Database_model->find('employee_work_experience', 'emp_id', $id);
		$data['documents'] = $this->Database_model->find('employee_documents', 'emp_id', $id);
		if (empty($data['post'])) {
			$data['posts']['user_not_found'] = true;
			$this->view('employee_list', $title, $data);
		} else {
			$this->view('employee_detail', $title, $data);			
		}
	}

	public function employeeList() 
	{
		$title['title'] = 'Employee List';
		$data['posts'] = $this->Admin_model->employeeList();
		$this->view('employee_list', $title, $data);
	}

	public function employeeManage($id = NULL) 
	{
		$title['title'] = 'Manage Employee';

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{	
			$data['empList']=$this->Admin_model->employeeList();
			if(isset($_SESSION['current_employee_id'])){
				 $id=$_SESSION['current_employee_id']; 
				$data['assigned']=$this->Admin_model->getAssign($id);
				$data['packagelist']=$this->Admin_model->packageManage();			}
			else{
				$data['assigned']='';
			}
			if ($id != NULL) {
				$data['post'] = $this->Admin_model->getEmployeeDetails($id);
				$data['work_experience'] = $this->Database_model->find('employee_work_experience', 'emp_id', $id);
				$data['documents'] = $this->Database_model->find('employee_documents', 'emp_id', $id);
		
				$this->view('employee_manage', $title, $data);
			} else
				$this->view('employee_manage', $title);
		} else
			redirect('login');
	}

	// leave page

	public function leaveManage() 
	{

		$title['title'] = 'Leaves';
		$data['posts'] = $this->Admin_model->leaveManage();

		$data['packages']=$this->Admin_model->packageManage();

		if(isset($_POST['id'])){
			extract($_POST);

		$data['detailLeave']=$this->Admin_model->getLeaveDetails($id);
		}

		if(isset($_POST['pkgId'])){
		extract($_POST);
		$data['detailPackage']=$this->Admin_model->getPackageName($pkgId);
		$data['selectedPackages']=$this->Admin_model->getPackageDetails($pkgId);
		}


		$this->view('leave_manage', $title, $data);
	}



	// public function employeeSearch() 
	// { 
	// 	$id = $this->input->post('search_emp');
	// 	$title['title'] = 'Employee Search List';
	// 	$posts = $this->Admin_model->employeeSearchTotal($id);
	// 	$perPage = 4;
	// 	$data['posts'] = $this->Admin_model->employeeSearch($perPage, $this->uri->segment(3), $id);
	// 	$data['showing_entries'] = $this->showingEntries(count($posts), $this->uri->segment(3), count($data['posts']));
	// 	$config = [
	// 		'base_url' => base_url('admin/employee_search'),
	// 		'per_page' => $perPage,
	// 		'total_rows' => $data['showing_entries']['total']
	// 	];
	// 	$this->pagination->initialize($config);
		
	// 	if (empty($data['posts'])) 
	// 		$data['posts']['user_not_found'] = TRUE;
	// 	$this->view('employee_search', $title, $data);
	// }

// to archive staff
	public function archiveEmployee()
	 {
		extract($_POST);
		$data= array('is_active'=>0);
		$this->Admin_model->update('employees',$data,'emp_id',$emp_id);
	}

// unarchive staff
	public function unArchiveEmployee()
	{
		extract($_POST);
		$data= array('is_active'=>1);
		$this->Admin_model->update('employees',$data,'emp_id',$emp_id);
	}



// this fucntion adds general data of add staff form
	public function addGeneral()
	{			
		$result=array();
		extract($_POST);

		$this->form_validation->set_rules('title','Title','required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('first_name','First Name','required|trim');
		$this->form_validation->set_rules('last_name','Last Name','required|trim');

		if($this->form_validation->run()===FALSE)
		{
			$result=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'title'=>$title,
				'first_name'=>$first_name,
				'middle_name'=>$middle_name,
				'last_name'=>$last_name,
				'join_date'=>$join_date,
				'is_active'=>'1',
				'department_id'=>'1'
			);

			if($id=$this->Admin_model->add_employee($data,$password))
			{
				array_push($result, $id);
			}

		}
		echo json_encode($result);
	}

//this  edits general information
	public function updateGeneral()
	{
		$result=array();
		extract($_POST);

		$this->form_validation->set_rules('title','Title','required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('first_name','First Name','required|trim');
		$this->form_validation->set_rules('last_name','Last Name','required|trim');

		if($this->form_validation->run()===FALSE)
		{
			$result=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'title'=>$title,
				'first_name'=>$first_name,
				'middle_name'=>$middle_name,
				'last_name'=>$last_name,
				'join_date'=>$join_date,
				'is_active'=>'1',
				'department_id'=>'1'
			);

		if($this->Admin_model->update_employee($data,$_SESSION['current_employee_id']))
				array_push($result, 'true');
		}
		echo json_encode($result);
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

		if(isset($_SESSION['current_employee_id'])){
			$id=$_SESSION['current_employee_id'];
		}
		else{
			$id=$_SESSION['user_id'];
		}

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
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

					$primary_id=$this->Admin_model->update_address($primaryAdd,$id);
					
			}
			else{
				$primary_id=$check['address_id'];
			}

			$query=$this->db->get_where("addresses",$secondaryAdd);
			$check=$query->row_array();

			if($check==''){
				if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}
				$secondary_id=$this->Admin_model->update_address($secondaryAdd,$id);
			}
			else{
				$secondary_id=$check['address_id'];
			}
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

			$this->Admin_model->update_employee_address($primary_id,$secondary_id,$id);

			$status=array('true');
		}
		echo json_encode($status);
	} 




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
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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
			

					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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
			if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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
					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

			$this->Admin_model->update_employee($data,$id);
			$status=array('true');

		}

		echo json_encode($status);

	}

// for work experience
	public function addWork()
	{
					$_SESSION['path']="work";

		$status='';
		extract($_POST);

		$this->form_validation->set_rules('organization','Organization','required|trim',array('required' => 'Please provide the name of the orgarnization.'));

					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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


		$this->Admin_model->insert('employee_work_experience',$data);

		// $this->Admin_model->add_work_experience($data);

		$status='true';

		echo $status;

	}

// for work experience
	public function updateWork()
	{
			$_SESSION['path']="work";
		$status='';
		extract($_POST);

		$this->form_validation->set_rules('organization','Organization','required|trim',array('required' => 'Please provide the name of the orgarnization.'));

					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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

					if(isset($_SESSION['current_employee_id'])){
						$id=$_SESSION['current_employee_id'];
					}
					else{
						$id=$_SESSION['user_id'];
					}

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

			if(isset($_SESSION['current_employee_id'])){
				$id=$_SESSION['current_employee_id'];
			}
     
			else{
				$id=$_SESSION['user_id'];
			}

			$this->db->select('first_name, last_name,dob,email,nationality,passport_no,passport_issue_place,e_name,e_relation,e_phone,highest_degree,institute');
			$employee_tbl= $this->Admin_model->user_detail('employees',array('emp_id' => $id));

			$this->db->select('contact_id');
			$employee_contacts_tbl=$this->Admin_model->user_detail('employee_contacts',array('emp_id' => $id));

			$this->db->select('secondary_addressId');
			$employee_addresses_tbl=$this->Admin_model->user_detail('employee_addresses',array('emp_id' => $id));

			$this->db->select('recommender_id','approver_id');
			$employee_assign=$this->Admin_model->user_detail('employee_approvers',array('emp_id'=>$id));

	

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
			if(!empty(($employee_assign))){
				foreach ($employee_assign as $row) {
					$total++;
					if($row!=NULL) $filled++;
				}
			}
			else{
				$total+=2;
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



// while adding leave, if same leave is already in database,
// 	error is shown else leave is created.

// while editing leave, leave name is updated

		public function saveLeave()
		{
			extract($_POST);
			$data=[
				'leave_name'=>$leave_name,
				'created_by'=>$_SESSION['user_id']
			];

			if($leave_id=='')
			{
				$leave=$this->db->where('leave_name',$leave_name);
				$list=$this->db->get('leaves');
				$getList= $list->row_array();
				if(count($getList)==0)
				{
					$this->db->insert('leaves',$data);
					echo "inserted";
				}

				else echo "already";
				}			
			else{
				$data=[
					'leave_name'=>$leave_name,
					'created_by'=>$_SESSION['user_id'],
					'leave_id'=>$leave_id
				];
				$leave=$this->db->where('leave_name',$leave_name);
				$list=$this->db->get('leaves');
				$getList= $list->row_array();
				if(count($getList)==0)
				{
					$this->db->where('leave_id',$leave_id);
					$this->db->update('leaves',$data);
					echo "updated";
				}
				else echo "already";
			}

		}

		public function deleteLeave(){
			extract($_POST);
			$data=[ 'leave_id'=>$leave_id ];
			// $this->db-where('leave_id',$id);
			$this->db->delete('leaves',$data);
			
		}

// save package
		public function savePackage(){
			extract($_POST);

			$arrayLeave=json_decode($leaveArr, true);
			$arrayDuration=json_decode($durationArr, true);

			$data=[ 'package_name'=>$package_name, 'created_by'=>$_SESSION['user_id'] ];

			if($package_id=='')
			{
				$leave=$this->db->where('package_name',$package_name);
				$list=$this->db->get('packages');
				$getList= $list->row_array();

				if(count($getList)==0)
				{
					$this->db->insert('packages',$data);
					$pkgId=$this->db->insert_id();
					$this->addLeaveToPackage($arrayLeave,$arrayDuration,$pkgId,'insert');
					echo "inserted";
				}
				else
					echo "already";
			}
			else{
				$data=[
					'package_name'=>$package_name,
					'created_by'=>$_SESSION['user_id'],
					'package_id'=>$package_id
				];
				$leave=$this->db->where('package_name',$package_name);
				$list=$this->db->get('packages');
				$getList= $list->row_array();
				if(count($getList)==0)
				{
					$this->db->where('package_id',$package_id);
					$this->db->update('packages',$data);
					$this->addLeaveToPackage($arrayLeave,$arrayDuration,$package_id,'update');
					echo "updated";
				}
				else echo "already";
			}
	
		}
		

		function addLeaveToPackage($leave,$duration,$id,$operation){

			if($operation=="insert"){
				foreach ($leave as $index => $leaveId) {
					$data=['leave_id'=>$leaveId, 'package_id'=>$id, 'duration'=>$duration[$index],'created_by'=>$_SESSION['user_id']];
					$this->db->insert('leave_packages',$data);
				}
			}
			if($operation=="update"){
				$this->db->where('package_id',$id);
				$this->db->delete('leave_packages');

				foreach ($leave as $index => $leaveId) {
					$data=['leave_id'=>$leaveId, 'package_id'=>$id, 'duration'=>$duration[$index],'created_by'=>$_SESSION['user_id']];
					$this->db->insert('leave_packages',$data);
				}
			}
		}

		// delete package
		public function deletePackage(){
			extract($_POST);
			$data=[ 'package_id'=>$package_id ];
			// $this->db-where('package_id',$id);
			$this->db->delete('packages',$data);
		}





	}
	?>