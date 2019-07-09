<?php
	class Manage_employee_model extends CI_Model{
		
		public function archiveEmployee($id) {
			$this->db->where('emp_id',$id);	
			$this->db->update('employees', ['is_active'=>'0',]);
		}

		public function update_employee($data,$userid=''){
			if(!isset($_SESSION['user_id'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$this->db->where('emp_id',$userid);	
			return $this->db->update('employees',$data);

		}

		public function get_posts($slug = FALSE) {
			if ($slug === FALSE) {
				$query = $this->db->get('employees');
				return $query->result_array();
			}

			$this->db->select('*');
		    $this->db->from('employees e'); 
		    $this->db->join('departments d', 'e.department_id=d.department_id', 'inner');
		    $this->db->join('employee_addresses ea', 'e.emp_id=ea.empId', 'inner');
		    $this->db->join('employee_contacts ec', 'e.emp_id=ec.emp_id', 'inner');
		    $this->db->where('e.emp_id',$slug);
		    $query = $this->db->get(); 

			// $query = $this->db->get_where('employees', array('emp_id' => $slug));

			return $query->row_array();
		}
		
		public function add_employee($data,$password){
			$this->db->insert('employees',$data);
			$user_id = $this->db->insert_id();
			// this helps to set session id for admin to add more info
			//sets the curent new staff's id in session
			$_SESSION['current_employee_id']=$this->db->insert_id();
			$userData=array(
					'user_id'=>$user_id,
					'user_pass'=>$password,
			);
			$this->db->insert('users',$userData);
			$user_num=$this->db->insert_id();
			$userRoleData=array(
				'user_id'=>$user_num,
				'role_id'=>'2'
			);
			return $this->db->insert('user_roles',$userRoleData);
		}

		public function user_detail($tablename,$userid){
			$user=$this->db->get_where($tablename,$userid);	
			return $user->row_array();
		}





	// For Address
		public function getAddress($data) {
			$query = $this->db->get_where('address', $data);
			return $query;
		}

		public function update_address($data,$userid=''){
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$this->db->insert('addresses',$data);
			$insertedId=$this->db->insert_id();
			return $insertedId;
		}

		public function update_employee_address($primary,$secondary,$userid=''){
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$data=array(
				'primary_addressId'=>$primary,
				'secondary_addressId'=>$secondary,
				'empId'=>$userid
			);
			$this->db->insert('employee_addresses',$data);

		}

// for contact form
public function update_contact($data,$userid=''){
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$this->db->insert('contacts',$data);
			$insertedId=$this->db->insert_id();
			return $insertedId;
		}

public function update_employee_contact($contact,$userid=''){
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$data=array(
				'contact_id'=>$contact,
				'emp_id'=>$userid
			);
			$this->db->insert('employee_contacts',$data);
		}


		// documents
		public function add_documents($data) {
			return	$this->db->insert('employee_documents',$data);
		}

		//contact 
		public function add_contact($data) {
			return	$this->db->insert('contacts',$data);
		}

		//work experience
		public function add_work_experience($value){
			return $this->db->insert('employee_work_experience',$value);
		}
		

	}
