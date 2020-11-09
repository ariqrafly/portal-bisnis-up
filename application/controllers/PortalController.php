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

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $login = true;
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

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        

        $this->load->view('customer/navbar_customer');
        $this->load->view('usaha/masuk');
    }
    public function daftar()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('notelp', 'Telephone', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Sandi', 'required|trim|min_length[8]|matches[Konfirmasi]', [
            'matches'=>'Password dont match.!',
            'min_length'=>'Password too short.!'
        ]);
         $this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'required|trim|min_length[8]|matches[sandi]');

        if($this->form_validation->run()==false){
            $this->load->view('customer/navbar_customer');
            $this->load->view('usaha/daftar');
        }else{
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'upload_ktm' => $this->input->post('ktm'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_aktif' => 1,
                'date_created' =>time(),
                'photo_profile' => 'defautl.jpg',
                'telephone' => $this->input->post('notelp'),


            ];

            $this->load->model->register($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created.!</div>');
            
        }

        
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
