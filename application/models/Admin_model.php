<?php
	class Admin_model extends CI_Model {
		
		
		public function update_employee($data,$userid='')
		{
			if(!isset($_SESSION['user_id'])) $this->load->view('login/login');
			if($userid==''){
				$userid=$_SESSION['user_id'];
			}
			$this->db->where('emp_id',$userid);	
			return $this->db->update('employees',$data);
		}

		public function employeeList($limit, $offset) {
			$this->db->join('departments', 'departments.id=employees.department_id');
			$this->db->limit($limit, $offset); 
			$query = $this->db->get('employees');

			return $query->result_array();
		}
		public function archivedEmployeeList() {
			$this->db->join('departments', 'departments.id=employees.department_id');
			// $this->db->limit($limit, $offset); 
			$query = $this->db->get('employees');

			return $query->result_array();
		}
		
	
		public function add_employee($data,$password){
			// save('employees',$data, $pk = '',$id='')
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
		public function update_contact($data,$userid='')
		{
			if($userid==''){
				$userid=$_SESSION['user_id'];
		}
			$this->db->insert('contacts',$data);
			$insertedId=$this->db->insert_id();
			return $insertedId;
		}

		public function update_employee_contact($contact,$userid='')
		{
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



	
	// update function
		public function update($tablename,$data,$pk,$id)
		{
			$this->db->where($pk, $id);
			$this->db->update($tablename, $data);
			return true;
		}

		// insert function
		 public function insert($tablename,$data)
		 {
			$this->db->insert($tablename,$data);
			return true;
		}


		// public save function\
		public function save($tablename,$data, $pk = '',$id='')
		{
			try{ insert_table($tablename,$data); }
	       
	   		catch(Exception $e){  update_table($tablename,$data, $pk);  }
		}
		
		// querying all data related to employee
		public function getEmployeeDetails($id = FALSE) {

			$project = "SELECT *, e.email as email,
				               a.street as p_street, a.municipality as p_municipality, a.district as p_district, a.state as p_state, a.country as p_country, 
				               asec.street as t_street, asec.municipality as t_municipality, asec.district as t_district, asec.state as t_state, asec.country as t_country 
					    FROM employees e
					    JOIN departments d ON d.id = e.department_id
					    LEFT JOIN employee_addresses ea ON ea.empId = e.emp_id
					    LEFT JOIN addresses a ON a.address_id = ea.primary_addressId
					    LEFT JOIN addresses asec ON asec.address_id = ea.secondary_addressId 
					    LEFT JOIN employee_contacts ec ON ec.emp_id = e.emp_id
					    LEFT JOIN contacts c ON c.contact_id = ec.contact_id";

			if ($id === FALSE) {	
				$this->db->order_by('emp_id', 'DESC');
				$query = $this->db->query($project);
				return $query->result_array();
			}

			$project = $project . ' WHERE e.emp_id = ' . $id;
			$query = $this->db->query($project);
			
			return $query->row_array();
		}

	}











