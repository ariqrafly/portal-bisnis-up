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
        $config = [
            'upload_path' => './assets/UserKTM/',
            'allowed_types' => 'jpg|png|jpeg'
        ];
        $this->load->library('upload',$config);
        $this->upload->do_upload('image');
        $info = $this->upload->data();
        $image_path = base_url("assets/UserKTM/".$info['raw_name'].$info['file_ext']);
  

        $name = $this->input->post('name');
        $password = $this->input->post('psw');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
    

        $newUser = array(
            'nama' => $name,
            'email' => $email,
            'password' => $password,
            'telephone' => $telp,
            'upload_ktm' => $image_path
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