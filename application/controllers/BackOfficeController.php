<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackOfficeController extends CI_Controller
{

    public function index()
    {
        if (isset($_GET['s'])) {
            session_destroy();
        }
        if (!isset($_SESSION['backoffice_login'])) {
            $this->load->model('BackOfficeModel');
            if (!isset($_POST['email'])) {
                $this->load->view('backoffice/login');
            } else {
                $isLogin = $this->BackOfficeModel->getAdmin($_POST['email'], $_POST['password']);
                if ($isLogin == NULL) {
                    $this->load->view('backoffice/login');
                } else {

                    $_SESSION['backoffice_login'] = true;
                    $_SESSION['backoffice_admin'] = $_POST['email'];
                    $_SESSION['backoffice_name'] = $isLogin[0]->nama;

                    redirect(base_url('kelola_user'));
                }
            }
        } else {
            redirect(base_url('kelola_user'));
        }
    }
    public function kelolaUser()
    {

        if ($_SESSION['backoffice_login'] != true) {
            redirect(base_url('backOffice'));
        }

        $this->load->model('BackOfficeModel');
        if (isset($_GET['search'])) {
            $data['users'] = $this->BackOfficeModel->searchUser($_GET['search']);
        } else if (isset($_GET['q'])) {
            $data['users'] = $this->BackOfficeModel->getSomeUsers($_GET['q']);
        } else {
            $data['users'] = $this->BackOfficeModel->getAllUsers();
        }
        if (isset($_GET['id'])) {
            $this->BackOfficeModel->hapusUser($_GET['id']);
        }

        $this->load->view('backoffice/sidebar');
        $this->load->view('backoffice/kelola_user', $data);
    }
    public function user()
    {
        if ($_SESSION['backoffice_login'] != true) {
            redirect(base_url('backOffice'));
        }
        $this->load->model('BackOfficeModel');
        $this->load->view('backoffice/sidebar');
        if (isset($_GET['status'])) {
            $this->BackOfficeModel->changeUserStatus($_GET['status'], $_GET['i']);
        }
        if (isset($_GET['state'])) {
            $data['state'] = true;
        }
        $data['user'] = $this->BackOfficeModel->getUser($_GET['i']);

        $this->load->view('backoffice/user', $data);
    }

    public function kelolaUsaha()
    {

        if ($_SESSION['backoffice_login'] != true) {
            redirect(base_url('backOffice'));
        }
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

        if (isset($_GET['id'])) {
            $this->BackOfficeModel->hapusUsaha($_GET['id']);
        }

        $this->load->view('backoffice/sidebar');
        $this->load->view('backoffice/kelola_usaha', $data);
    }

    public function usaha()
    {
        if ($_SESSION['backoffice_login'] != true) {
            redirect(base_url('backOffice'));
        }
        $this->load->model('BackOfficeModel');
        $this->load->view('backoffice/sidebar');

        if (isset($_GET['state'])) {
            $data['state'] = true;
        }
        $data['usaha'] = $this->BackOfficeModel->getUsaha($_GET['i']);
        $this->load->view('backoffice/usaha', $data);
    }

    // Laporan
    public function kelolaLaporan()
    {

        if ($_SESSION['backoffice_login'] != true) {
            redirect(base_url('backOffice'));
        }
        $this->load->model('BackOfficeModel');
        if (isset($_GET['id'])) {
            $this->BackOfficeModel->hapusLaporan($_GET['id']);
        }
        if (isset($_GET['uid'])) {
            $data['laporan'] = $this->BackOfficeModel->getLaporanByUser($_GET['uid']);
        } else if (isset($_GET['id_usaha'])) {
            $data['laporan'] = $this->BackOfficeModel->getLaporanByUsaha($_GET['id_usaha']);
        } else if (isset($_GET['search'])) {
            $data['laporan'] = $this->BackOfficeModel->searchLaporan($_GET['search']);
        } else {
            $data['laporan'] = $this->BackOfficeModel->getAllLaporan();
        }

        if (isset($_GET['id'])) {
            $this->BackOfficeModel->hapusUsaha($_GET['id']);
        }

        $this->load->view('backoffice/sidebar');
        $this->load->view('backoffice/kelola_laporan', $data);
    }
}
