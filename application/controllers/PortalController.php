<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PortalController extends CI_Controller
{


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $login = false;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('customer/index');
    }
  
    
    public function lapor()
    {

        // $this->load->model('user');
		// $id_usaha = $_SESSION['idu'];
		// $uid = $_SESSION['uid'];
		// $deskripsi_array = explode(PHP_EOL, $_POST['lapor']);
		// $laporan = implode("", $deskripsi_array); 

		// $usaha = $this->user->usaha($id_usaha)->row();
		// $nama = $usaha->nama_usaha;

		

		// $array =  array(
		// 	'id_usaha' => $id_usaha ,
		// 	'uid' => $uid,
		// 	'comment' => $laporan,
		// 	'nama_usaha' => $nama

		//  );

		// $this->user->lapor($array);
        // redirect('lapor','refresh');


        // $id_usaha = $_GET['iu'];

        $id_usaha = $_SESSION['usaha'];

        $this->load->model('user');
        $data['usaha'] = $this->user->usaha($id_usaha)->row_array();

        $deskripsi_array = explode(PHP_EOL, $_POST['lapor']);
        $laporan = implode("", $deskripsi_array); 

        $usaha = $this->user->usaha($id_usaha)->row();
		$nama = $usaha->nama_usaha;

		
		$array =  array(
			'id_usaha' => $id_usaha ,
			// 'uid' => $uid,
			'comment' => $laporan,
			'nama_usaha' => $nama

		 );
        
        $this->user->lapor($array);

         redirect(base_url('cari'),'refresh');
        
         // $_SESSION['usaha'] = $id_usaha;
        
    }
    

    public function hubungi_kami()
    {
     
        if($_SESSION['login'] == true)
        {
            $this->load->view('usaha/navbar_usaha');
            $this->load->view('customer/hubungi_kami');
        }
        
        
    }

    public function hubungi_kami_general()
    {
        $this->load->view('customer/navbar_customer');
        $this->load->view('customer/hubungi_kami');
    }


    public function kategoriUsaha()
    {
        if ($_SESSION['login'] == true) {
            // $this->load->model('user');
            // $uid = $_SESSION['id'];
            // $data['usaha'] = $this->user->getUsaha($uid)->result();

            $this->load->model('BackOfficeModel');
            if (isset($_GET['q'])) {
                $data['usaha'] = $this->BackOfficeModel->getSomeUsaha($_GET['q']);
            } else if (isset($_GET['uid'])) {
                $data['usaha'] = $this->BackOfficeModel->getUsahaByUser($_GET['uid']);
            } else if (!isset($_GET['search'])) {
                $data['usaha'] = $this->BackOfficeModel->getAllUsaha();
            } else {
                $data['usaha'] = $this->BackOfficeModel->searchUsaha($_GET['search']);
            }

            $this->load->view('usaha/navbar_usaha');
            $this->load->view('usaha/cari', $data);

        } 
       
    }


    public function detail_usaha()
    {
    	$id_usaha = $_GET['iu'];
		if($_SESSION['login'] != true)
		{
			redirect(base_url('login'));
		}else{
		$this->load->model('user');
        $data['usaha'] = $this->user->usaha($id_usaha)->row_array();
		$this->load->view('usaha/navbar_usaha');
		$this->load->view('customer/detail', $data);
		// $this->load->view('customer/detail');
		}

		$_SESSION['usaha'] = $id_usaha;

		
	}
    
    
}
