<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePassword extends CI_Controller {

	public function index()
	{
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$this->load->view('usaha/navbar_usaha');
        $this->load->view('usaha/ganti_password');
    	}
	}

	public function ganti(){
		$this->load->model('user');
		$uid = $_SESSION['id'];
     	$data = $this->user->getUser($uid)->row_array();
     	$pass = $data['password'];

     	$passLama = $this->input->post('oldSandi');
     	$passBaru = $this->input->post('newSandi');
     	$passKonf = $this->input->post('confSandi');
     	
     	if($passLama !== $pass){
     		echo "<script>
                alert('Kata sandi lama tidak cocok');
            </script>";
             redirect(base_url('changepassword'),'refresh');
     	}elseif ($passBaru !== $passKonf) {
     		echo "<script>
                alert('Konfirmasi sandi tidak cocok');
            </script>";
             redirect(base_url('changepassword'),'refresh');
     	}else{
     		$this->load->model('user');
			$uid = $_SESSION['id'];
     		$this->user->updateData($uid, array('password' => $passBaru));
			redirect(base_url('logout'),'refresh');
     	}

	}

}
