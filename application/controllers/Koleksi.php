<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('koleksimodel');
        $this->load->library('form_validation', 'session');
        $this->load->helper(array('text', 'url'));
    }

    public function index()
    {
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
        $data['listkoleksi'] = $this->koleksimodel->get_koleksi();
        $judulhlm['judulhlm'] = 'Koleksi Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('koleksi', $data);
        $this->load->view('layout/footer');
    }

    public function detail($a = null)
    {
        $data['detailbuku'] = $this->koleksimodel->get_detail($a);
        $judulhlm['judulhlm'] = 'Detail Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('detail', $data);
        $this->load->view('layout/footer');
    }

    public function tambah_buku()
    {
        $judulhlm['judulhlm'] = 'Tambah Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('tambah_buku');
        $this->load->view('layout/footer');
    }

    public function insert_tambah_buku()
    {
        $cover = $_FILES['cover']['name'];
        $config = array(
            'upload_path' => './assets/img/cover/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => '2048000',
            'overwrite' => true
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->koleksimodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', ('Data Tersimpan'));
            redirect('koleksi');
        } else {
            echo 'data tidak berhasil ditambah';
        }
    }

    public function delete($id = null)
    {
        $this->koleksimodel->delete($id);
        $this->session->set_flashdata('pesan', ('Data Terhapus'));
        redirect('koleksi');
    }

    public function edit($id = null)
    {
        $data['listkoleksi'] = $this->koleksimodel->get_detail($id);
        $judulhlm['judulhlm'] = 'Edit Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('edit', $data);
        $this->load->view('layout/footer');
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = array(
            'upload_path' => './assets/img/cover/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => '2048000',
            'overwrite' => true
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->koleksimodel->update_cover($cover, $id);
        }
        if ($this->koleksimodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', ('Data Diubah'));
            redirect('koleksi');
        }
    }

    public function peminjaman()
    {
        $data['listpeminjaman'] = $this->koleksimodel->get_peminjaman();
        $data['listkoleksi'] = $this->koleksimodel->get_koleksi();
        $judulhlm['judulhlm'] = 'Peminjaman Buku | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('peminjaman', $data);
        $this->load->view('layout/footer');
    }
}
