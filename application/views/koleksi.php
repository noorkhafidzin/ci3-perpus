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
                <h1 class="card-header">Koleksi</h1>
                <div class="card-body">
                    <h5>Tambah Buku</h5>
                    <a href="koleksi/tambah_buku" class="btn btn-success">Tambah Buku</a>
                    <h3>Koleksi Buku :</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Cover</th>
                                <th>Judul Buku</th>
                                <th>Aksi</th>
                            </tr>
                            <?php foreach ($listkoleksi as $i) { ?>
                                <tr>
                                    <td><?php echo $i->id_buku ?></td>
                                    <td><img src="assets/img/cover/<?php echo $i->cover ?>" width="86px"></td>
                                    <td><?php echo $i->judul ?></td>
                                    <td>
                                        <a href="koleksi/detail/<?php echo $i->id_buku; ?>" class="btn btn-primary mt-1">Detail</a>
                                        <a href="koleksi/edit/<?php echo $i->id_buku; ?>" class="btn btn-warning ml-1 mt-1">Edit</a>
                                        <a onclick="Konfirmasi(<?php echo $i->id_buku; ?>)" class="btn btn-danger ml-1 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</a>
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