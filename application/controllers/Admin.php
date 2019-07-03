<?php
	class Admin extends CI_Controller {

public function view($page = 'dashboard') 
{
			if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
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
		$status='';
		extract($_POST);

		$this->form_validation->set_rules('title','Title','required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('surname','Surname','required');

			if($this->form_validation->run()===FALSE)
			{
				$status=validation_errors();
			}else
			{
				$data=array(
					'title'=>$title,
					'firstname'=>$firstname,
					'middlename'=>$middlename,
					'surname'=>$surname
				);
				
				$this->Manage_employee_model->update_employee($data);
				$status='true';

			}
			echo $status;
}
public function addContact()
{
		$status='';
		extract($_POST);

		$this->form_validation->set_rules('permanentaddress','Permanent Address','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('currentaddress','Current Address','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('dob','Date of Birth','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('contact','Contact Number','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('email','Email Address','required',array('required' => 'You must provide a %s.'));

			if($this->form_validation->run()===FALSE)
			{
				$status=validation_errors();
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
				$status='true';

			}
			echo $status;
}
public function addNationality()
{
		$status='';
		extract($_POST);

		$this->form_validation->set_rules('nationality','nationality','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('permission','Permission','required',array('required' => 'You must select a %s.'));

		$this->form_validation->set_rules('visatype','Visa Type','required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_rules('passport','Passport Number','required',array('required' => 'You must provide a %s.'));

			if($this->form_validation->run()===FALSE)
			{
				$status=validation_errors();
			}else
			{
				$data=array(
					'nationality'=>$nationality,
					'permission'=>$permission,
					'visatype'=>$visatype,
					'passport'=>$passport
				);

				$this->Manage_employee_model->update_employee($data);
				$status='true';

			}
			echo $status;
}


	}
?>