<?php
	class Recommender_controller extends CI_Controller {

		public function generalPage($page = 'dashboard') {
			if (!file_exists(APPPATH . 'views/recommender/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('recommender/templates/header');
			$this->load->view('recommender/pages/' . $page, $data);
			$this->load->view('recommender/templates/footer');
		}
	}
?>