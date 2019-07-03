<?php
	class Login extends CI_Controller 
	{

		public function view() 
		{
			if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
				redirect('admin');
			}
			else{ $this->load->view('login/login'); }
			
		}

		//test login
		public function loginUser()
		{

			$this->form_validation->set_rules('user_id', 'Login Id', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('login/login');
                }
             else
             {
             	// check user id and password
             	if($this->Validate_login_form->validate_id_password())
             	{
             		$_SESSION['loggedin']=true;
             		redirect('admin');
             	}
             	else{
             		
             		redirect('login');
             	}
             }
		}
	}
?>