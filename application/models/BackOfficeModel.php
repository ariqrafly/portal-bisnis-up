<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackOfficeModel extends CI_Model
{

    public function getAdmin($username, $password)
    {
        $query = $this->db->get_where('admin', array('email' => $username, 'password' => $password));
        return $query->result();
    }
    public function getAllUsers()
    {

        $query = $this->db->get('user');
        return $query->result();
    }
    public function getSomeUsers($status)
    {

        $query = $this->db->get_where('user', array('is_aktif' => $status));
        return $query->result();
    }
    public function getUser($uid)
    {
        $query = $this->db->get_where('user', array('userid' => $uid));
        return $query->result();
    }
    public function changeUserStatus($status, $uid)
    {
        $this->db->set('is_aktif', $status);
        $this->db->where('userid', $uid);
        $this->db->update('user');
    }
    public function hapusUser($uid)
    {
        $this->db->delete('report', array('uid' => $uid));
        $this->db->delete('usaha', array('uid' => $uid));
        $this->db->delete('user', array('userid' => $uid));
    }
    public function searchUser($search)
    {
        return $this->db->query("SELECT * FROM user 
        WHERE (userid LIKE '%" . $search . "%')
        OR (`nama` LIKE '%" . $search . "%')
        OR (email LIKE '%" . $search . "%')
        OR (telephone LIKE '%" . $search . "%')
        OR (photo_profile LIKE '%" . $search . "%')
        OR (date_created LIKE '%" . $search . "%')")->result();
    }

    //USAHA 

    public function getAllUsaha()
    {
        $query = $this->db->get('usaha');
        return $query->result();
    }
    public function getUsaha($uid)
    {
        $query = $this->db->get_where('usaha', array('id_usaha' => $uid));
        return $query->result();
    }
    public function getSomeUsaha($kategori)
    {

        $query = $this->db->get_where('usaha', array('kategori' => $kategori));
        return $query->result();
    }
    public function getUsahaByUser($uid)
    {
        $query = $this->db->get_where('usaha', array('uid' => $uid));
        return $query->result();
    }
    public function hapusUsaha($uid)
    {
        $this->db->delete('report', array('id_usaha' => $uid));
        $this->db->delete('usaha', array('id_usaha' => $uid));
    }
    public function searchUsaha($search)
    {
        return $this->db->query("SELECT * FROM usaha 
        WHERE (id_usaha LIKE '%" . $search . "%')
        OR (`uid` LIKE '%" . $search . "%')
        OR (foto_usaha LIKE '%" . $search . "%')
        OR (layanan LIKE '%" . $search . "%')
        OR (instagram LIKE '%" . $search . "%')
        OR (facebook LIKE '%" . $search . "%')
        OR (lokasi LIKE '%" . $search . "%')
        OR (`owner` LIKE '%" . $search . "%')
        OR (waktu_kerja LIKE '%" . $search . "%')
        OR (telegram LIKE '%" . $search . "%')
        OR (whatsapp LIKE '%" . $search . "%')
        OR (twitter LIKE '%" . $search . "%')")->result();
    }

    // Laporan
    public function searchLaporan($search)
    {
        return $this->db->query("SELECT * FROM report 
        WHERE (id_report LIKE '%" . $search . "%')
        OR (`uid` LIKE '%" . $search . "%')
        OR (id_usaha LIKE '%" . $search . "%')
        OR (comment LIKE '%" . $search . "%')")->result();
    }

    public function getAllLaporan()
    {
        $query = $this->db->get('report');
        return $query->result();
    }
    public function hapusLaporan($uid)
    {
        $this->db->delete('report', array('id_report' => $uid));
    }
    public function getLaporanByUser($uid)
    {
        $query = $this->db->get_where('report', array('uid' => $uid));
        return $query->result();
    }
    public function getLaporanByUsaha($uid)
    {
        $query = $this->db->get_where('report', array('id_usaha' => $uid));
        return $query->result();
    }
}
