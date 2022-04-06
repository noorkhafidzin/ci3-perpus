<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?php if ($this->session->flashdata('pesan') != '') { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <h1 class="card-header">Peminjaman Buku</h1>
                <div class="card-body">
                    <h3>Koleksi Buku :</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>Cover</th>
                                <th>Judul Buku</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            <?php foreach ($listkoleksi as $i) { ?>
                                <tr>
                                    <td><?php echo $i->id_buku ?></td>
                                    <td><img src="assets/img/cover/<?php echo $i->cover ?>" width="86px"></td>
                                    <td><?php echo $i->judul ?></td>
                                    <td>
                                        <?php
                                        if ($listkoleksi->id == $listpeminjaman->id_buku) {
                                            if ($listpeminjaman->status == '1') { ?>
                                                <span class="badge badge-danger">Dipinjam</span>
                                            <?php } else { ?>
                                                <span class="badge badge-success">Tersdia</span>
                                        <?php }
                                        } ?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Konfirmasi(id) {
        let pilihan = confirm('Apakah anda yakin akan menghapus data ini?');
        if (pilihan == true) {
            window.location.href = 'koleksi/delete/' + id;
        }
    }
</script>