<?php
class Login extends CI_Controller {
	public function __construct()
	{
        parent:: __construct();
        $this->load->model('user');  
    }

    public function index()
    {
        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/masuk');
    }

    public function loginUser()
    {
        $password = $this->input->post('psw');
        $email = $this->input->post('email');

                        //model  //nama fungsi di model
        $userData = $this->user->login($email, $password);

        if($userData > 0){
            //diset bahwa user udah login
            $this->session->isLoggedin = true;
            //diarahin ke halaman utama
            redirect(base_url('profil'),'refresh');
        }
        else
        {
            echo "<script>
                alert('Wrong email or password!');
            </script>";
        }
        
    }   
}
?>