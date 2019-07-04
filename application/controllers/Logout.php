<?php
	class Logout extends CI_Controller
	 {
		public function view()
		{
			//make user logged out
			$this->Logout_user_model->logout();
			
			$this->load->view('login/logout');



		}

	}