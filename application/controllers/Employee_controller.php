<?php
	class Employee_controller extends CI_Controller {
		public function __construct()
        {
                parent::__construct();
               if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
					redirect('login');
				}
        }

		public function view($page = 'dashboard') {
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
	}
?>