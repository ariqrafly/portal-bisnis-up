
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

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $dataUser = $this->db->get('user');

        return $dataUser;

    }

     public function getUser($uid)
    {
        return $this->db->get_where('user', array('userid' => $uid));
    }

    public function updateData($uid, $dataUser)
    {
        $this->db->where('userid', $uid);
        $this->db->update('user', $dataUser);
    }

    public function updateUsaha($uid, $dataUser)
    {
        $this->db->where('id_usaha', $uid);
        $this->db->update('usaha', $dataUser);
    }

    public function ajukanUsaha($dataUser)
    {
        $this->db->insert('usaha', $dataUser);
    }

    public function getUsaha($uid){
        return $this->db->get_where('usaha', array('uid' => $uid));
    }

    public function laporan($uid){
        return $this->db->get_where('report', array('uid' => $uid));
    }

    public function usaha($uid){
        return $this->db->get_where('usaha', array('id_usaha' => $uid));
    }

    public function deleteUsaha($id_usaha){
         $this->db->where('id_usaha', $id_usaha);
         $this->db->delete('usaha');
    }

    public function lapor($dataUser)
    {
        $this->db->insert('report', $dataUser);
    }

}

