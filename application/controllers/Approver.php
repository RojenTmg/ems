<?php
	class Approver extends CI_Controller {

		public function view($page = 'dashboard') {
			if (!file_exists(APPPATH . 'views/approver/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('approver/templates/header');
			$this->load->view('approver/pages/' . $page, $data);
			$this->load->view('approver/templates/footer');
		}
	}
?>