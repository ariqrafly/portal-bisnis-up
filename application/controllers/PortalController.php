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
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('customer/cari');
    }
    public function profil()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
            $this->load->view('usaha/profil');
        }
    }
    public function dasbor()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
            $this->load->view('usaha/dasbor_header');

            $this->load->view('usaha/dasbor');
        }
    }
    public function usaha()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('customer/detail_usaha');
    }
    public function edit_usaha()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('usaha/detail_usaha');
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
    public function verifikasi_usaha()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('usaha/dasbor_header');

        $this->load->view('usaha/verifikasi_usaha');
    }

    public function laporan_usaha()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('usaha/dasbor_header');
        $this->load->view('usaha/cek_laporan');
    }
    public function hubungi_kami()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
        } else {
            $this->load->view('customer/navbar_customer');
        }
        $this->load->view('customer/hubungi_kami');
    }
    public function ganti_password()
    {
        $login = true;
        if ($login) {
            $this->load->view('usaha/navbar_usaha');
            $this->load->view('usaha/ganti_password');
        }
    }
}
