<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index()
    {
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
        $data['list'] = $this->usermodel->get_user();
        $judulhlm['judulhlm'] = 'User | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('user', $data);
        $this->load->view('layout/footer');
    }

    public function user_detail($id)
    {
        $data['detail'] = $this->usermodel->get_user_by_id($id);
        $judulhlm['judulhlm'] = 'Detail User | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('user_detail', $data);
        $this->load->view('layout/footer');
    }

    public function user_add()
    {
        $judulhlm['judulhlm'] = 'Tambah User | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('user_add');
        $this->load->view('layout/footer');
    }

    public function insert_user()
    {
        $picture = $_FILES['picture']['name'];
        $config = array(
            'upload_path' => './assets/img/profil/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => '2048000',
            'overwrite' => true
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('picture');
        if ($this->usermodel->insert($this->input->post(), $picture)) {
            $this->session->set_flashdata('pesan', ('Data Tersimpan'));
            redirect('user');
        } else {
            echo 'data tidak berhasil ditambah';
        }
    }

    public function delete($id)
    {
        $this->usermodel->delete($id);
        $this->session->set_flashdata('pesan', ('Data Terhapus'));
        redirect(base_url('user'));
    }

    public function user_edit($id = null)
    {
        $data['list'] = $this->usermodel->get_user_by_id($id);
        $judulhlm['judulhlm'] = 'Edit User | Perpus Tiga Serangkai';
        $this->load->view('layout/header', $judulhlm);
        $this->load->view('user_edit', $data);
        $this->load->view('layout/footer');
    }

    public function update($id)
    {
        $picture = $_FILES['picture']['name'];
        $config = array(
            'upload_path' => './assets/img/cover/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => '2048000',
            'overwrite' => true
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('picture')) {
            $this->usermodel->update_cover($picture, $id);
        }
        if ($this->usermodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', ('Data Diubah'));
            redirect(base_url('user'));
        }
    }
}
