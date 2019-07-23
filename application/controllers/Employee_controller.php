<?php
	class Employee_controller extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
               if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true|| $_SESSION['type']!='employee') {
					redirect('login');
				}
        }
        public function view($page, $title = 'EMS', $data = FALSE) {
			if (!file_exists(APPPATH . 'views/employee/pages/' . $page . '.php')) 
				show_404();
			$this->load->view('employee/templates/header', $title);
			$this->load->view('employee/pages/' . $page . '', $data);
			$this->load->view('employee/templates/footer');
		}

		public function generalPage($page = 'dashboard') {
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
			$title['title'] = 'Dashboard';
			$data['employee_leaves'] = $this->Employee_model->findAllLeaves();

			$this->view('dashboard', $title, $data);
		}


		public function leaveForm()
		{
			$title['title'] = 'Leave Form';
			$data['duty_performed_by'] = $this->Database_model->findAll('employees');

			if ($this->input->post('submit') !== NULL) {
				$leave = $this->input->post();
				$leaveData = array(
					'emp_id'=> $_SESSION['user_id'],	// inserts current user id
					'leave_id'=> (int)$leave['leave_id'],
					'from_date'=> $leave['from_date'],
					'to_date'=> $leave['to_date'],
					'duty_performed_by'=> (int)$leave['duty_performed_by'],
					'reason'=> $leave['reason']
				);

				if ($leave['is_half_day'] == 1)  {
					$leaveData['is_half_day'] = '1';
				}
				else {
					$leaveData['is_half_day'] = '0';
				}

				$this->Database_model->insert('employee_leaves', $leaveData);

				$data['valid'] = TRUE;
				$this->view('leave_form', $title, $data);
			} 
			else {
				$this->view('leave_form', $title, $data);
			}
		}
	}
?>