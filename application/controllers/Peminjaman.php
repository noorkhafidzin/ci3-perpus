<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('koleksimodel');
        $this->load->model('usermodel');
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

    public function tambah($a = null)
    {
        $data['listpeminjaman'] = $this->peminjamanmodel->get_peminjaman();
        $data['detailbuku'] = $this->koleksimodel->get_detail($a);
        $judulhlm['judulhlm'] = 'Pinjam Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('peminjaman/tambah', $data);
        $this->load->view('layout/footer');
    }

    public function pinjam()
    {
        $email = $this->input->post('email');
        $pwd = md5($this->input->post('password'));
        $auth = $this->usermodel->auth($email, $pwd);
        if ($auth == true) {
            if ($this->peminjamanmodel->pinjam($this->input->post())) {
                $this->session->set_flashdata('pesan', ('Buku berhasil dipinjam'));
                redirect(base_url('peminjaman'));
            } else {
                echo 'data tidak berhasil ditambah';
            }
        } else {
            $this->session->set_flashdata('pesan', 'Email atau Password salah');
            redirect(base_url('peminjaman'));
        }
    }
}
