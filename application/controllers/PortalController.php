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


    public function cari()
    {
       
        if ($_SESSION['login'] == true) {
            $this->load->model('user');
            $uid = $_SESSION['id'];
            $data['usaha'] = $this->user->getUsaha($uid)->result();

            $this->load->view('usaha/navbar_usaha');
            $this->load->view('customer/cari', $data);

        } 
        // else {
        //     $this->load->view('customer/navbar_customer');
        //     $this->load->view('customer/cari');
        // }
       
    }
    
    
    public function lapor()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('customer/lapor');
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
    
}
