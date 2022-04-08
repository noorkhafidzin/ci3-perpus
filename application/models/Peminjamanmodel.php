<?php
class Peminjamanmodel extends CI_Model
{
    function get_peminjaman()
    {
        $query = $this->db->query("select * from koleksi_buku, peminjaman, user where koleksi_buku.id_buku = peminjaman.id_buku and user.id = peminjaman.id_user");
        return $query->result();
    }
}
