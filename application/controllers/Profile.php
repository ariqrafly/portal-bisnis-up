<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}
		else{
			$this->load->model('user');
     	$uid = $_SESSION['id'];
     	$data['users'] = $this->user->getUser($uid)->row_array();
		 $this->load->view('usaha/navbar_usaha',$data);
          $this->load->view('usaha/profil', $data);
         }
     	
	}

	public function update(){
		$this->load->model('user');
		$uid = $_SESSION['id'];

		$config = [
            'upload_path' => './assets/Profile_Picture/',
            'allowed_types' => 'jpg|png|jpeg|JPG|PNG|JPEG|'
        ];
        $this->load->library('upload',$config);
        $this->upload->do_upload('ganti');
        $info = $this->upload->data();
        var_dump($info);
        $image_path = base_url("assets/Profile_Picture/".$info['raw_name'].$info['file_ext']);

		$name = $this->input->post('nama');
		$email = $this->input->post('email');
		$telp = $this->input->post('telp');

		$newUser = array(
		'nama' => $name,
		'email' => $email,
		'telephone' => $telp,
		'photo_profile' => $image_path
		);

		$this->user->updateData($uid, $newUser);
		redirect(base_url('profile'),'refresh');
	}


}

