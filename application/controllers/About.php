<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['judulhlm'] = 'About | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $data);
        $this->load->view('about');
        $this->load->view('layout/footer');
    }
}
