<?php

class User extends CI_Model
{
    public function __construct()
	{
        parent:: __construct();
    }
    public function register($dataUser)
    {
        $this->db->insert('user', $dataUser);
    }

    public function login($email, $password)
    {
        $this->db->where('e-mail',$email);
        $this->db->where('password',$password);
        $dataUser = $this->db->get('user')->row_array();

        return $dataUser;

    }
}