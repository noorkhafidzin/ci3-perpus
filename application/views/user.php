<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">User</h1>
                <div class="card-body">
                    <?php if ($this->session->flashdata('pesan') != '') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <h5>Tambah User</h5>
                    <a href="user/user_add" class="btn btn-success">Tambah User</a>
                    <h3>Tabel User :</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach ($list as $i) { ?>
                            <tr>
                                <td><?php echo $i->id ?></td>
                                <td><?php echo $i->nama ?></td>
                                <td><?php echo $i->email ?></td>
                                <td><?php echo $i->telepon ?></td>
                                <td>
                                    <a href="<?= base_url('User/user_detail/' . $i->id) ?>" class="btn btn-primary mt-1">Detail</a>
                                    <a href="user/user_edit/<?php echo $i->id; ?>" class="btn btn-warning ml-1 mt-1">Edit</a>
                                    <a onclick="Konfirmasi(<?php echo $i->id; ?>)" class="btn btn-danger ml-1 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Konfirmasi(id) {
        let pilihan = confirm('Apakah anda yakin akan menghapus data ini?');
        if (pilihan == true) {
            window.location.href = 'user/delete/' + id;
        }
    }
</script>