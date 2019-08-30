<?php
    class Login_controller extends CI_Controller 
    {

        public function generalPage() 
        {
            if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
                if($_SESSION['type']=='admin')
                redirect('admin');
                else
                    redirect('employee');
            }
            else{ $this->load->view('login/login'); }
            
        }

         //test login
        public function checkLogin()
        {
            //checks the forms for data required
            $this->form_validation->set_rules('user_id', 'Login Id', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('login/login');
                }
             else
             {
                // check user id and password if the form is filled
                $result=$this->Validate_login_form->validate_id_password();

                //to redierect to the right user
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                    
                    if( $_SESSION['type']=='employee')
                        redirect('employee');
                    else
                        redirect('admin');
                }
                else{
                    $_SESSION['error_msg']=$result;
                     $this->load->view('login/login');
                }
             }
        }
        // to change password
        public function changePassword(){

           if ($this->input->post('submit') != NULL) {
                $result = $this->input->post();

               $this->db->where('user_id',$_SESSION['user_id']);
               $users=$this->db->get('users');
               $user=$users->row_array();

                $data['emp_id']=$_SESSION['user_id'];
                $data['cp']=trim($result['cp']);
                $data['np']=trim($result['np']);
                $data['rnp']=trim($result['rnp']);
                $error=false;

                    if(empty( $data['cp'])||empty($data['np'])||empty($data['rnp'])){
                    $data['error']="Fill All Fields";
                     $error=true;
                      $this->load->view('login/changePassword',$data);
                      return;
                    }

                    if($user['user_pass']!= $data['cp']){
                     $data['error']="Invalid Current Password";
                     $error=true;
                      $this->load->view('login/changePassword',$data);
                      return;
                    }
                    if($data['np']!=$data['rnp']){
                    $data['error']="Password Do Not Match";
                    $error=true;
                     $this->load->view('login/changePassword',$data);
                     return;
                    }

                    if($error==false){
                        $this->db->where('user_id',$_SESSION['user_id']);
                        $udata=[
                            'user_pass'=>$data['np'],
                            'modified_date'=>strtotime(Date('Y-m-d')),
                            'is_logged_in'=>'0'
                        ];
                        $this->db->update('users',$udata);
                        $message='Your new password is: '.$data['np'].'<br> Please Delete this mail if you have read the mail.';
                        $email=$this->Admin_model->getEmail($_SESSION['user_id']);
                        $this->Admin_model->sendEmail('Password Changed',$message,$email);

                        $_SESSION['success_msg']="Password Changed. Login With New Password";
                        session_destroy();
                        $this->load->view('login/login');

                    }
               
             
            }
            else
            $this->load->view('login/changePassword');
        }
    }
?>