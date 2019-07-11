<?php
class Admin extends CI_Controller {

	public function view($page = 'dashboard') 
	{
		if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);
		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/pages/'.$page, $data);
			$this->load->view('admin/templates/footer');
		}
		else
			redirect('login');
	}
	public function viewArchived() 
	{


		$data['title'] = ucfirst('Archived Employee');
		$data['posts']=$this->Manage_employee_model->archivedEmployeeList();
		// echo "adsfasd";
		// die();

		if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
		{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/pages/archived_employees', $data['posts']);
			$this->load->view('admin/templates/footer');
		}
		else
			redirect('login');
	}




	public function employee() {
		$posts = $this->Manage_employee_model->get_posts();

		$config = [
			'base_url' => base_url('admin/employee'),
			'per_page' => 10,
			'total_rows' =>count($posts)
		];
		$this->pagination->initialize($config);
		$data['posts'] = $this->Manage_employee_model->employeeList($config['per_page'], $this->uri->segment(3));
		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/employee', $data);
		$this->load->view('admin/templates/footer');
	}
// viewing single registered employees
	public function viewED($slug = NULL) {
		$data['post'] = $this->Manage_employee_model->get_posts($slug);
		if (empty($data['post'])) {
			show_404();
		}
		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/employee_detail', $data);
		$this->load->view('admin/templates/footer');
	}

	public function editEmp($slug = NULL) {
		$data['post'] = $this->Manage_employee_model->get_posts($slug);
		if (empty($data['post'])) {
			show_404();
		}
		$data['title'] = $data['post']['title'];

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/manage_employee', $data);
		$this->load->view('admin/templates/footer');
	}

	public function archiveEmployee() {
		extract($_POST);
		$this->Manage_employee_model->archiveEmployee($emp_id);
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

			if($this->Manage_employee_model->add_employee($data,$password))
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
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('surname','Surname','required');

		if($this->form_validation->run()===FALSE)
		{
			$result=$this->form_validation->error_array();
		}else
		{
			$data=array(
				'title'=>$title,
				'firstname'=>$firstname,
				'middlename'=>$middlename,
				'surname'=>$surname
			);

			$this->Manage_employee_model->update_employee($data);
			$result=array('true');
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

		$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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
				'country'=>$currentaddress_country
			);


// if(!empty($permanentaddress_street)||!empty($permanentaddress_municipality)||!empty($permanentaddress_district)||!empty($permanentaddress_state))
// {

// }

			$primary = array(
				'street' => $permanentaddress_street, 
				'municipality' => $permanentaddress_municipality,
				'district' => $permanentaddress_district,
				'country'=>$permanentaddress_country);

			$secondary = array(
				'street' => $currentaddress_street, 
				'municipality' => $currentaddress_municipality,
				'district' => $currentaddress_district,
				'country'=>$currentaddress_country);

			$error='';
			$check='';

			if($primary==NULL){
				$check=NULL;
				$error=NULL;
			}
			else{
				$query=$this->db->get_where("addresses",$primary);
				$check=$query->row_array();
			}

			if($check==NULL){
				if($error==NULL){
					$primary_id='1';
				}
				else{
					$primary_id=$this->Manage_employee_model->update_address($primaryAdd,$_SESSION['current_employee_id']);
				}
			}
			else{
				$primary_id=$check['address_id'];
			}

			$query=$this->db->get_where("addresses",$secondary);
			$check=$query->row_array();

			if($check==NULL){
				$secondary_id=$this->Manage_employee_model->update_address($secondaryAdd,$_SESSION['current_employee_id']);
			}
			else{
				$secondary_id=$check['address_id'];
			}

			$this->Manage_employee_model->update_employee_address($primary_id,$secondary_id,$_SESSION['current_employee_id']);

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

			$contact_id=$this->Manage_employee_model->update_contact($data,$_SESSION['current_employee_id']);
			if($this->Manage_employee_model->update_employee_contact($contact_id,$_SESSION['current_employee_id'])){
				$status=array('true');
			}

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

			$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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

			$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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

			$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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

			$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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

			$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
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

		$data=array(
			'responsibility'=>$responsibility,
			'organization'=>$organization,
			'from_date'=>$from_date,
			'to_date'=>$to_date,
			'emp_id'=>$_SESSION['current_employee_id']
		);

		$this->Manage_employee_model->add_work_experience($data);
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
		if($doc_title=='')
		{
			$doc_data=array(
				'doc_title'=>$realName,
				'doc_file'=>$realName,
				'emp_id'=>$_SESSION['current_employee_id']
			);

		}
		else{
			$doc_data=array(
				'doc_title'=>$doc_title,
				'doc_file'=>$realName,
				'emp_id'=>$_SESSION['current_employee_id']
			);}

			if(	$this->Manage_employee_model->add_documents($doc_data))
				{$status='true';}

			else{ $status='false'; }

			echo $status;

		}

// calculate percentage of form
		function progressBar(){
			$employee_tbl= $this->Manage_employee_model->user_detail('employees',array('emp_id' => $_SESSION['current_employee_id']));

			$employee_contacts_tbl=$this->Manage_employee_model->user_detail('employee_contacts',array('emp_id' => $_SESSION['current_employee_id']));

			$employee_addresses_tbl=$this->Manage_employee_model->user_detail('employee_addresses',array('empId' => $_SESSION['current_employee_id']));

			$employee_documents_tbl=$this->Manage_employee_model->user_detail('employee_documents',array('emp_id' => $_SESSION['current_employee_id']));

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
			if(!empty($employee_documents_tbl)){
				foreach ($employee_documents_tbl as $row) {
					$total++;
					if($row!=NULL) $filled++;
				}
			}


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