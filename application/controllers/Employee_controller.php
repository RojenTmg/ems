<?php
	class Employee_controller extends CI_Controller {

		public function view($page = 'dashboard') {
			if (!file_exists(APPPATH . 'views/employee/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);
			$data['user']= $this->Admin_model->user_detail('employees', 182);

			//showing percentage in the progress bar
		    $total=0;
		    $filled=0;
		    $percentage=0;
		      foreach ($data['user'] as $row) {
		        $total++;
		        if($row!='') $filled++;
		      }
		      
		      $percentage=(int)(($filled/$total)*100);
		      $data['percentage']=$percentage;

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
		      $data['color']=$color;

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