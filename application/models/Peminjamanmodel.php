<?php
class Peminjamanmodel extends CI_Model
{
    function get_peminjaman()
    {
        $query = $this->db->query("select * from koleksi_buku, peminjaman, user where koleksi_buku.id_buku = peminjaman.id_buku and user.id = peminjaman.id_user");
        return $query->result();
    }

    public function pinjam($a)
    {
        $data = array(
            'id_buku' => $a['id_buku'],
            'id_user' => $a['id_user'],
            'tgl_pinjam' => date('Y-m-d H:i:s')
        );
        $this->db->insert('peminjaman', $data);
        $this->db->where('id_buku', $a['id_buku']);
        $this->db->set('jumlah', 'jumlah-1', FALSE);
        return $this->db->update('koleksi_buku',);
    }
}
