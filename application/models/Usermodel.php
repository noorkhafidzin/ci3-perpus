<?php
class Usermodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('usermodel');
    }

    function get_user()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query->result();
    }

    function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row_array();
    }

    function insert($a, $picture)
    {
        $data = array(
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => md5($a['password']),
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon'],
            'picture' => $picture
        );
        return $this->db->insert('user', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function update($a, $id)
    {
        $data = array(
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => md5($a['password']),
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon']
        );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function update_picture($a, $id)
    {
        $data = array(
            'picture' => $a
        );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('user')->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('user')->row_array();
    }

    function update_cookie($cookie, $email)
    {
        $data = array(
            'cookie' => $cookie
        );
        $this->db->where('email', $email);
        return $this->db->update('user', $data);
    }
}
