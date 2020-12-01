<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporkan extends CI_Controller {

	public function index()
	{	$id_usaha = $_GET['iu'];
		$uid = $_GET['uid'];
		$_SESSION['uid'] = $uid;
		$_SESSION['idu'] = $id_usaha;
		$this->load->view('usaha/navbar_usaha');
		$this->load->view('customer/lapor');
	}

	public function lapor(){
		$this->load->model('user');
		$id_usaha = $_SESSION['idu'];
		$uid = $_SESSION['uid'];
		$deskripsi_array = explode(PHP_EOL, $_POST['lapor']);
		$laporan = implode("", $deskripsi_array); 

		$usaha = $this->user->usaha($id_usaha)->row();
		$nama = $usaha->nama_usaha;

		

		$array =  array(
			'id_usaha' => $id_usaha ,
			'uid' => $uid,
			'comment' => $laporan,
			'nama_usaha' => $nama

		 );

		$this->user->lapor($array);
		redirect('lapor','refresh');


	}

	public function lapor_after(){
		$this->load->view('usaha/navbar_usaha');
		$this->load->view('customer/lapor_after');
	}

}

/* End of file Laporkan.php */
/* Location: ./application/controllers/Laporkan.php */