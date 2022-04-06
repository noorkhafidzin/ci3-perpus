<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
        $data['judulhlm'] = 'Perpus Tiga Serangkai';
        $this->load->view('layout/header', $data);
        $this->load->view('dashboard');
        $this->load->view('layout/footer');
    }
}
