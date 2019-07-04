<?php
    class Login extends CI_Controller 
    {

        public function view() 
        {
            if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
                if( $_SESSION['type']=='admin')
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
                if(isset($_SESSION['loggedin'])&&  $_SESSION['loggedin']==true){
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
    }
?>