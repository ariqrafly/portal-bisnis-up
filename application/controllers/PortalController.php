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
    public function masuk()
    {
        $login = false;
        if ($login) {
            redirect(base_url());
        }

        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/masuk');
    }
    public function daftar()
    {
        $login = false;
        if ($login) {
            redirect(base_url());
        }

        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/daftar');
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
            $this->load->view('usaha/dasbor');
        }
    }
}
