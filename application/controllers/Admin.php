<?php
	class Admin extends CI_Controller {

public function view($page = 'dashboard') 
{
			if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);
			if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
				$this->load->view('admin/templates/header');
			$this->load->view('admin/pages/' . $page, $data);
			$this->load->view('admin/templates/footer');
			}
			else
				redirect('login');
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
				
				$this->Manage_employee_model->add_employee($data,$password);
				array_push($result, 'true');
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

		$this->form_validation->set_rules('permanentaddress_country','Country','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('currentaddress_street','Current Street','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('currentaddress_district','Current District','required',array('required' => 'You must provide a %s.'));



			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'permanentaddress_street'=>$permanentaddress_street,
					'permanentaddress_municipality'=>$permanentaddress_municipality,
					'permanentaddress_district'=>$permanentaddress_district,
					'permanentaddress_state'=>$permanentaddress_state,
					'permanentaddress_country'=>$permanentaddress_country,
					'currentaddress_street'=>$currentaddress_street,
					'currentaddress_municipality'=>$currentaddress_municipality,
					'currentaddress_district'=>$currentaddress_district,
					'currentaddress_state'=>$currentaddress_state,
					'currentaddress_country'=>$currentaddress_country
				);

				$this->Manage_employee_model->update_address($data,$_SESSION['current_employee_id']);
				$status=array('true');

			}
			echo json_encode($status);
} 

// contact form
public function addContact()
{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('permanentaddress','Permanent Address','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('currentaddress','Current Address','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('dob','Date of Birth','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('contact','Contact Number','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('email','Email Address','required',array('required' => 'You must provide a %s.'));

			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'permanentaddress'=>$permanentaddress,
					'currentaddress'=>$currentaddress,
					'dob'=>$dob,
					'contact'=>$contact,
					'email'=>$email
				);

				$this->Manage_employee_model->update_employee($data);
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

		$this->form_validation->set_rules('visa_type','Visa Type','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('visa_expiry_date','Visa Expiry Date','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('passport_no','Passport Number','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('passport_issue_place','Place of Issue','required',array('required' => 'You must provide a %s.'));

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

		$this->form_validation->set_rules('e_name','Contact Person Name','required',array('required' => 'You must provide detail of %s.'));

		$this->form_validation->set_rules('e_relation','Relation','required',array('required' => 'You must provide relation to the person.'));

		$this->form_validation->set_rules('e_phone','Contact No.','required',array('required' => 'You must provide contact details of person.'));



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

		$this->form_validation->set_rules('institute','Institute','required',array('required' => 'You must provide name of the Institute.'));

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
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('previous_employer','Previous Employer','required',array('required' => 'Please provide the previous employer information.'));

			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'previous_employer'=>$previous_employer
				);

				$this->Manage_employee_model->update_employee($data,$_SESSION['current_employee_id']);
				$status=array('true');

			}
		
			echo json_encode($status);

}

//function for adding documents
function addDocuments(){
		extract($_POST);

		$tmpName = $_FILES['document']['tmp_name'];
		$realName= $_FILES['document']['name'];
		$target_path = 'assets/files/'.$realName;
		move_uploaded_file($tmpName,$target_path);

		$doc_data=array(
			'doc_title'=>$doc_title,
			'doc_file'=>$realName,
			'emp_id'=>$_SESSION['current_employee_id']
		);

		$this->Manage_employee_model->add_documents($doc_data);

}
}
?>