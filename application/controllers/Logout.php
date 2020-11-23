<?php
class Logout extends CI_Controller {
	public function __construct()
	{
        parent:: __construct();  
    }
    
    public function index()
    {
        $_SESSION['login'] = false;
        session_destroy();
        redirect(base_url(),'refresh');
    }

}

?>