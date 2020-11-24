<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function index()
	{
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$this->load->view('usaha/navbar_usaha');
        $this->load->view('usaha/dasbor_header');
        

        $this->load->model('user');
        $uid = $_SESSION['id'];
        $data['usaha'] = $this->user->getUsaha($uid)->result();

        if($data > 0){
        	$this->load->view('usaha/dasbor', $data);
        }else{
        	$this->load->view('usaha/kosong');
        }

    	}
	}

	public function verifikasi_usaha()
    {
        if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
        $this->load->view('usaha/navbar_usaha');
        $this->load->view('usaha/dasbor_header');
        $this->load->view('usaha/verifikasi_usaha');
    	}
    }

    public function ajukan(){
    	if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
    	$uid = $_SESSION['id'];
    	$config = [
            'upload_path' => './assets/FotoUsaha/',
            'allowed_types' => 'jpg|png|jpeg|JPG|PNG|JPEG|'
        ];
        $this->load->library('upload',$config);
        $this->upload->do_upload('foto');
        $info = $this->upload->data();
        $image_path = base_url("assets/FotoUsaha/".$info['raw_name'].$info['file_ext']);

        $name = $this->input->post('namaUsaha');
    	$deskripsi_array = explode(PHP_EOL, $_POST['deskripsi']);
    	$layanan_array = explode(PHP_EOL, $_POST['layanan']);

    	$deskripsi = implode("", $deskripsi_array); 
		$layanan = implode("", $layanan_array);

        $newUser = array(
        	'uid' => $uid,
            'nama_usaha' => $name,
            'deskripsi' => $deskripsi,
            'layanan' => $layanan,
            'foto_usaha' => $image_path,
        );

         $this->User->ajukanUsaha($newUser);
        	
        redirect(base_url('dasbor'),'refresh');
    	}
    }

    public function edit_usaha()
    {
    	$id_usaha = $_GET['iu'];
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$this->load->model('user');
        $data['usaha'] = $this->user->usaha($id_usaha)->row_array();
		$this->load->view('usaha/navbar_usaha');
		$this->load->view('usaha/detail_usaha', $data);
		}

		$_SESSION['usaha'] = $id_usaha;
		
		// redirect(base_url('dasbor'),'refresh');
	}

	public function edit(){
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$id_usaha = $_SESSION['usaha'];
		$this->load->model('user');
		$buka = $this->input->post('buka');
		$lokasi = $this->input->post('lokasi');
		$pemilik = $this->input->post('pemilik');
		$telp = $this->input->post('telp');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$whatsapp = $this->input->post('whatsapp');
		$telegram = $this->input->post('telegram');
		$twitter = $this->input->post('twitter');

		$deskripsi_array = explode(PHP_EOL, $_POST['deskripsi']);
    	$layanan_array = explode(PHP_EOL, $_POST['layanan']);

    	$deskripsi = implode("", $deskripsi_array); 
		$layanan = implode("", $layanan_array);

		$newUser = array(
		'deskripsi' => $deskripsi,
		'layanan' => $layanan,
		'kontak' => $telp,
		'waktu_kerja' => $buka,
		'lokasi' => $lokasi,
		'owner' => $pemilik,
		'facebook' => $facebook,
		'instagram' => $instagram,
		'whatsapp' => $whatsapp,
		'telegram' => $telegram,
		'twitter' => $twitter,
		);

		$this->user->updateUsaha($id_usaha, $newUser);
		 redirect(base_url('dasbor'),'refresh');
		}
	}

	public function hapus(){
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$id_usaha = $_SESSION['usaha'];
		$this->load->model('user');
		$this->user->deleteUsaha($id_usaha);
		 redirect(base_url('dasbor'),'refresh');
		}
	}

	public function cek_laporan(){
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
			$uid = $_SESSION['id'];
			$this->load->model('user');
			$data['laporan'] = $this->user->laporan($uid)->result();
			$this->load->view('usaha/navbar_usaha');
			$this->load->view('usaha/dasbor_header');
        	$this->load->view('usaha/cek_laporan', $data);
        }
	}




}
