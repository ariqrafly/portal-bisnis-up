<?php

class Register extends CI_Controller {
	public function __construct()
	{
        parent:: __construct();
        $this->load->model('User');
    }

    public function index()
    {
        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/daftar');
    }
        
	public function registerUser()
	{
        $name = $this->input->post('name');
        $password = $this->input->post('psw');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        //$ktm = $this->input->post('ktm');

        $newUser = array(
            'nama' => $name,
            'email' => $email,
            'password' => $password,
            'telephone' => $telp,
            //'upload_ktm' => $ktm
            'role_id' => 2
        );

        $this->accountExist($email, $password, $name, $newUser);
    }

    //kalo udh punya akun tapi daftar lagi
    public function accountExist($email, $password, $name, $newUser)
    {
        $this->db->where('email',$email);
        $dataUser = $this->db->get('user')->row_array();

        if($dataUser > 0)
        {
            echo "<script>
                alert('This email is already registered! Please use another email!');
            </script>";
        }
        else
        {            
            $this->User->register($newUser);
        }
        redirect(base_url('masuk'),'refresh');
    }
}
?>