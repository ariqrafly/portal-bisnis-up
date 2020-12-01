<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CariController extends CI_Controller
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

    public function cari()
    {
            $this->load->model('BackOfficeModel');
            $data['usaha'] = $this->BackOfficeModel->getAllUsaha();
            $this->load->view('customer/navbar_customer');
            $this->load->view('customer/cari', $data);

    }
    

    public function kategoriCari()
    {
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

            $this->load->view('customer/navbar_customer');
            $this->load->view('customer/cari', $data);
       
    }


    public function detail_cari()
    {
    	$id_usaha = $_GET['iu'];
		$this->load->model('user');
        $data['usaha'] = $this->user->usaha($id_usaha)->row_array();
		$this->load->view('customer/navbar_customer');
		$this->load->view('customer/detail', $data);
		
	}
    
    
}
