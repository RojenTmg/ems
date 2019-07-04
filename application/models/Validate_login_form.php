<?php 

/**
 * to check login
 */
class Validate_login_form extends CI_Model
{
	//validate login id and password
	function validate_id_password()
	{
		
		$msg='';
		$id= $this->input->post('user_id');
		$password=$this->input->post('password');

		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where('id',$id);
		$query = $this->db->get();
		
	if ($query->num_rows()>0) 
		{
		foreach($query->result() as $row)
  			{
  						 	// $store_password = $this->encrypt->decode($row->password);
  				if($row->is_logged_in==0)
  				{
  						$store_password=$row->user_pass;
			     if($password == $store_password)
			     {
				    $_SESSION['loggedin']=true;
				    $_SESSION['firstname']=$row->firstname;
				    $_SESSION['surname']=$row->surname;
					$_SESSION['type']=$row->role;
					$_SESSION['userid']=$row->id;
			     }
			     else
			     	$msg=$msg.'Invalid Password.';
			}
		}
	}
		else { 	$msg=$msg.'Invalid Login Id.';	}

			//message for invalid credentials 
			return $msg;
	}
}

 ?>