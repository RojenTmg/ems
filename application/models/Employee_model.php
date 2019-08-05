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

		public function leaveDetail($id){
			$leaves= "SELECT e.emp_id,e.package_id,p.package_name,lp.leave_id,l.leave_name,lp.duration,elb.remain_days
					FROM employees e
					JOIN packages p ON e.package_id=p.package_id
					JOIN leave_packages lp ON p.package_id=lp.package_id
					JOIN leaves l ON lp.leave_id=l.leave_id
					JOIN employee_leave_balance elb ON l.leave_id=elb.leave_id AND e.emp_id=elb.emp_id
					WHERE e.emp_id=$id";
			$query = $this->db->query($leaves);
				return $query->result_array();



			// $this->db->select('e.emp_id,e.package_id,p.package_name,lp.leave_id,l.leave_name,lp.duration,elb.remain_days');
			// $this->db->from('employees e');
			// $this->db->join('packages p', 'e.package_id = p.package_id');
			// $this->db->join('leave_packages lp','p.package_id=lp.package_id');
			// $this->db->join('leaves l','lp.leave_id=l.leave_id');
			// $this->db->join('employee_leave_balance elb','l.leave_id=elb.leave_id');
			// $this->db->join('employee_leave_balance elb2','e.emp_id=elb2.emp_id');
			// $this->db->where('e.emp_id',$id);
			// $query = $this->db->get();		
			// return $query->result_array();

		}

		public function checkLeaveBalance($id, $leave_id){
			$leaves= "SELECT l.leave_name AS l_leave_name, elb.remain_days AS elb_remain_days
					FROM employees e
					JOIN packages p ON e.package_id=p.package_id
					JOIN leave_packages lp ON p.package_id=lp.package_id
					JOIN leaves l ON lp.leave_id=l.leave_id
					JOIN employee_leave_balance elb ON l.leave_id=elb.leave_id AND e.emp_id=elb.emp_id
					WHERE e.emp_id=$id AND elb.leave_id = $leave_id";
			$query = $this->db->query($leaves);
			return $query->row_array();
		}

		public function findApproveLeaves($id = FALSE)
		{

			$approver=$_SESSION['user_id'];
			$project = "SELECT *, el.emp_id AS e_id, e.first_name AS e_first_name, e.middle_name AS e_middle_name, e.last_name AS e_last_name, dpb.first_name AS dpb_first_name, dpb.middle_name AS dpb_middle_name, dpb.last_name AS dpb_last_name, ea.approver_id AS aid, eaid.first_name AS eaid_first_name, eaid.middle_name AS eaid_middle_name, eaid.last_name AS eaid_last_name, l.leave_id AS lID

					    FROM employee_leaves el
					    LEFT JOIN leaves l ON l.leave_id = el.leave_id 
					    LEFT JOIN employees e ON e.emp_id = el.emp_id 
					    LEFT JOIN employee_approvers ea ON ea.emp_id = el.emp_id 
					    LEFT JOIN employees eaid ON ea.approver_id = eaid.emp_id 
					    LEFT JOIN employees dpb ON dpb.emp_id = el.duty_performed_by 
						WHERE el.is_archived_by_approver = '0' AND  ea.approver_id=$approver AND el.is_recommended = 'recommended' OR el.is_approved = 'denied' AND el.is_archived_by_approver = '0' AND  ea.approver_id=$approver
						ORDER BY el.id DESC";

			if ($id === FALSE) {	
				// $project = $project . ' WHERE el.is_recommended = recommended';ss
				// $this->db->order_by('emp_id', 'DESC');
				$query = $this->db->query($project);
				return $query->result_array();
			}

			$project = $project . ' WHERE el.id = ' . $id ;
			$query = $this->db->query($project);
			
			return $query->row_array();
		}



		// fetch leaves information
		public function recommendationList()
		{
			$recommender = $_SESSION['user_id'];
			$this->db->join('employees', 'employee_leaves.emp_id = employees.emp_id');
			$this->db->join('leaves', 'employee_leaves.leave_id = leaves.leave_id');
			$this->db->join('employee_approvers', 'employee_leaves.emp_id =employee_approvers.emp_id');
			$this->db->where('employee_leaves.is_archived', '0');
			$this->db->where('employee_approvers.recommender_id', $recommender);
			$query = $this->db->get('employee_leaves');
			return $query->result_array();
		}

		public function leaveApprove($id, $e_id, $leave_id, $leaveBalance)
		{
			// update leave balance on table 'employee_leave_balance'
			$data1=array('remain_days'=>$leaveBalance);
			$array = array('emp_id' => $e_id, 'leave_id' => $leave_id);
			$this->db->where($array); 
			$this->db->update('employee_leave_balance',$data1);		

			// update status on column 'is_archived' on table 'employee_leave_balance'
			$data2=array('is_approved'=>'approved');
			$this->db->where('id',$id);
			$this->db->update('employee_leaves',$data2);
		}
	}
