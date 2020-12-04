<?php
class Login extends CI_Controller {
	// public function __construct()
	// {
 //        parent:: __construct();
          
 //    }

    public function index()
    {
        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/masuk');
    }

    public function loginUser()
    {   
        $this->load->model('user');
        $password = $this->input->post('psw');
        $email = $this->input->post('email');

                        //model  //nama fungsi di model
        $userData = $this->user->login($email, $password)->row_array();
        

        if($userData > 0){
            //diset bahwa user udah login
            
            $_SESSION['login'] = true;
            $_SESSION['id'] = $userData['userid'];
            

            
          //  $_SESSION['email'] = $;
            
            //diarahin ke halaman utama
            redirect(base_url('profile'));
        }
        else
        {
            echo "<script>
                alert('Wrong email or password!');
            </script>";
             redirect(base_url('login'),'refresh');
        }
        
    }   
}
?>