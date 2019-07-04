<?php
	class Manage_employee_model extends CI_Model{
	
		public function update_employee($data,$userid=''){
			if(!isset($_SESSION['userid'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['userid'];
			}
			$this->db->where('id',$userid);	
			return $this->db->update('employee',$data);

		}

		public function add_employee($data){
			return $this->db->insert('employee',$data);
		}

		public function user_detail($userid=''){
			if(!isset($_SESSION['userid'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['userid'];
			}
			$user=$this->db->get_where('employee',array('id' => $userid));	
			return $user->row_array();
		}



	

	}
