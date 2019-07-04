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
public function addGeneral()
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
					'padd'=>$permanentaddress,
					'caddd'=>$currentaddress,
					'dob'=>$dob,
					'ctno'=>$contact,
					'email'=>$email
				);

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
			echo json_encode($status);
}
public function addNationality()
{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('nationality','nationality','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('permission','Permission','required',array('required' => 'You must select a %s.'));

		$this->form_validation->set_rules('visatype','Visa Type','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('passport','Passport Number','required',array('required' => 'You must provide a %s.'));

			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'nationality'=>$nationality,
					'permission'=>$permission,
					'visatype'=>$visatype,
					'passport'=>$passport
				);

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
			echo json_encode($status);
}
public function addEmergency()
{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('cpname','Contact Person Name','required',array('required' => 'You must provide detail of %s.'));

		$this->form_validation->set_rules('cpaddress','Address','required',array('required' => 'You must provide address of contact person'));

		$this->form_validation->set_rules('cpcontact','contact','required',array('required' => 'You must provide contact details of person.'));



			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'cpname'=>$cpname,
					'cpaddress'=>$cpaddress,
					'cpcontact'=>$cpcontact
				);

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
			echo json_encode($status);
}
public function addEducation()
{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('highestdegree','Highest Degree','required',array('required' => 'You must provide your highest degree'));

		$this->form_validation->set_rules('previousemployer','previousemployer','required',array('required' => 'You must provide name of previous employer'));

			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'highestdegree'=>$highestdegree,
					'previousemployer'=>$previousemployer
				);

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
			echo json_encode($status);
}
public function addHealth()
{
		$status=array();
		extract($_POST);

		$this->form_validation->set_rules('bloodgroup','Blood Group','required',array('required' => 'You must provide %s'));

			if($this->form_validation->run()===FALSE)
			{
				$status=$this->form_validation->error_array();
			}else
			{
				$data=array(
					'bloodgroup'=>$bloodgroup,
					'medicalcomplications'=>$medicalcomplications,
					'regularmedication'=>$regularmedication,
					'others'=>$others
				);

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
			echo json_encode($status);
}
public function addPan()
{
		$status=array();
		$newstatus=array();
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

				$this->Manage_employee_model->update_employee($data);
				$status=array('true');

			}
		
			echo json_encode($status);

}
}
?>