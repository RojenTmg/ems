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

	// public function generalPage($page = 'dashboard') 
	// {
	// 	if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) {
	// 		show_404();
	// 	}

	// 	$data['title'] = ucfirst($page);
	// 	if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
	// 		$this->view($page, $data);
	// 	else
	// 		redirect('login');
	// }

	public function dashboard() 
	{
		$title['title'] = 'Dashboard';
		$data['count'] = count($this->Admin_model->getEmployeeDetails());
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

	// viewing single registered employees
	public function employeeDetail($id = NULL) 
	{
		$title['title'] = 'Employee Detail';
		$data['post'] = $this->Admin_model->getEmployeeDetails($id);
		$data['work_experience'] = $this->Database_model->find('employee_work_experience', 'emp_id', $id);
		$data['documents'] = $this->Database_model->find('employee_documents', 'emp_id', $id);
		if (empty($data['post'])) {
			$posts = $this->Admin_model->getEmployeeDetails();
			$config = [
				'base_url' => base_url('admin/employee_list'),
				'per_page' => 4,
				'total_rows' =>count($posts)
			];
			$this->pagination->initialize($config);
			$data['posts'] = $this->Admin_model->employeeList($config['per_page'], $this->uri->segment(3));
			$data['posts']['user_not_found'] = true;
			$this->view('employee_list', $title, $data);
		} else {
			$this->view('employee_detail', $title, $data);			
		}
	}

	public function employeeList() 
	{
		$title['title'] = 'Employee List';
		$posts = $this->Admin_model->getEmployeeDetails();

		$config = [
			'base_url' => base_url('admin/employee_list'),
			'per_page' => 4,
			'total_rows' =>count($posts)
		];
		$this->pagination->initialize($config);
		$data['posts'] = $this->Admin_model->employeeList($config['per_page'], $this->uri->segment(3));
		$this->view('employee_list', $title, $data);
	}

	public function employeeManage($id = NULL) 
	{
		$title['title'] = 'Manage Employee';

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{
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

			if($this->Admin_model->add_employee($data,$password))
			{
				array_push($result, 'true');
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
			$data=array(
				'nationality'=>$nationality,
				'visa_permission'=>$visa_permission,
				'visa_type'=>$visa_type,
				'visa_expiry_date'=>$visa_expiry_date,
				'passport_no'=>$passport_no,
				'passport_issue_place'=>$passport_issue_place
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


//function for adding documents
	function addDocuments(){
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

// calculate percentage of form
		function progressBar(){

			if(isset($_SESSION['current_employee_id'])){
				$id=$_SESSION['current_employee_id'];
			}
     
			else{
				$id=$_SESSION['user_id'];
			}

			$this->db->select('first_name, last_name,dob,nationality,passport_no,passport_issue_place,e_name,e_relation,e_phone,highest_degree,institute');
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
			if(!empty($employee_addresses_tbl)){
				foreach ($employee_addresses_tbl as $row) {
					$total++;
					if($row!=NULL) $filled++;
				}
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
	?>