<?php 

/**
 * to check login
 */
class Validate_login_form extends CI_Model
{
	//validate login id and password
	function validate_id_password()
	{
		$id= $this->input->post('user_id');
		
		$password=$this->input->post('password');
		// $array=array('user_id'=>$id, 'password'=>$password);
		// $query= $this->db->where('employee',$array);

		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where('user_id',$id);
		$this->db->where('password',$password);
		$query = $this->db->get();

		if ($query->num_rows()==1) {

				return true;
			}
			
			else{
				return false;
			}
	}
}

 ?>