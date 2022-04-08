<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('koleksimodel');
        $this->load->model('peminjamanmodel');
        $this->load->library('form_validation', 'session');
        $this->load->helper(array('text', 'url'));
    }

    public function index()
    {
        $data['listpeminjaman'] = $this->peminjamanmodel->get_peminjaman();
        $data['listkoleksi'] = $this->koleksimodel->get_koleksi();
        $judulhlm['judulhlm'] = 'Peminjaman Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('peminjaman/peminjaman', $data);
        $this->load->view('layout/footer');
    }

    public function detail($a = null)
    {
        $data['listpeminjaman'] = $this->peminjamanmodel->get_peminjaman();
        $data['detailbuku'] = $this->koleksimodel->get_detail($a);
        $judulhlm['judulhlm'] = 'Detail Peminjaman Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('peminjaman/detail', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['listpeminjaman'] = $this->peminjamanmodel->get_peminjaman();
        $data['listkoleksi'] = $this->koleksimodel->get_koleksi();
        $judulhlm['judulhlm'] = 'Pinjam Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('peminjaman/tambah', $data);
        $this->load->view('layout/footer');
    }
}
