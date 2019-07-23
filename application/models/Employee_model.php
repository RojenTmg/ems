<?php
	class Employee_model extends CI_Model {
	
		public function findAllLeaves($id = FALSE)
		{
			$project = "SELECT *
					    FROM employee_leaves el
					    LEFT JOIN employees e ON e.emp_id = el.duty_performed_by ORDER BY el.id DESC";

			if ($id === FALSE) {	
				// $project = $project . ' WHERE e.is_active = ' . 1;
				// $this->db->order_by('emp_id', 'DESC');
				$query = $this->db->query($project);
				return $query->result_array();
			}

			$project = $project . ' WHERE el.id = ' . $id;
			$query = $this->db->query($project);
			
			return $query->row_array();
		}
	}
