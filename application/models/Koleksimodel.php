<?php
class Koleksimodel extends CI_Model
{

    function get_koleksi()
    {
        $query = $this->db->get('koleksi_buku');
        return $query->result();
    }

    public function get_detail($a)
    {
        $this->db->where('id_buku', $a);
        return $this->db->get('koleksi_buku')->row_array();
    }

    public function insert($a, $cover)
    {
        $data = array(
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'cover' => $cover
        );
        return $this->db->insert('koleksi_buku', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('koleksi_buku');
    }

    public function update($a, $id)
    {
        $data = array(
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit']
        );
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }

    public function update_cover($a, $id)
    {
        $data = array(
            'cover' => $a
        );
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }
}
