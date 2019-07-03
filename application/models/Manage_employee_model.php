<?php
	class Manage_employee_model extends CI_Model{
	
		public function update_employee($data){
			$this->db->where('id','1');	
			return $this->db->update('employee',$data);
		}



	

	}
