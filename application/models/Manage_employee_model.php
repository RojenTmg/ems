<?php
	class Manage_employee_model extends CI_Model{
	
		public function update_employee($data,$userid=''){
			if(!isset($_SESSION['user_id'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$this->db->where('emp_id',$userid);	
			return $this->db->update('employees',$data);

		}

		public function add_employee($data){
			return $this->db->insert('employees',$data);
		}

		public function user_detail($userid=''){
			if(!isset($_SESSION['user_id'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$user=$this->db->get_where('employees',array('emp_id' => $userid));	
			return $user->row_array();
		}



	

	}
