<?php
	class Employee_model extends CI_Model {
	
		public function findAllLeaves($id = FALSE)
		{
			$project = "SELECT *
					    FROM employee_leaves el
					    LEFT JOIN leaves l ON l.leave_id = el.leave_id
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

		public function findApproveLeaves($id = FALSE)
		{
			$project = "SELECT *, e.first_name AS e_first_name, e.middle_name AS e_middle_name, e.last_name AS e_last_name, dpb.first_name AS dpb_first_name, dpb.middle_name AS dpb_middle_name, dpb.last_name AS dpb_last_name, ea.approver_id AS aid, eaid.first_name AS eaid_first_name, eaid.middle_name AS eaid_middle_name, eaid.last_name AS eaid_last_name
					    FROM employee_leaves el
					    LEFT JOIN leaves l ON l.leave_id = el.leave_id
					    LEFT JOIN employees e ON e.emp_id = el.emp_id
					    LEFT JOIN employee_approvers ea ON ea.emp_id = el.emp_id
					    LEFT JOIN employees eaid ON ea.approver_id = eaid.emp_id
					    LEFT JOIN employees dpb ON dpb.emp_id = el.duty_performed_by ORDER BY el.id DESC";

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
