<?php
	class Leave_form_model extends CI_Model{
	
	public function request_leave()
	{
		$data= array(
				'type'=> $this->input->post('type'),
				'daytime'=> $this->input->post('daytime'),
				'from_date'=> $this->input->post('from_date'),
				'to_date'=> $this->input->post('to_date'),
				'duration'=> $this->input->post('duration'),
				'duty'=> $this->input->post('duty'),
				'reason'=> $this->input->post('reason')
			);
			
			return $this->db->insert('ems_leave',$data);
	}

	}
