<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h1 class="card-header">Form Pinjam Buku:</h1>
                <div class="card-body">
                    <p class="card-text">Konfirmasi identitas Anda</p>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form action="<?= base_url('/peminjaman/pinjam') ?>" method="POST" enctype="multipart/form-data">
                                <label for="id_user">ID User:</label>
                                <input type="text" name="id_user" id="id_user" class="form-control" value="<?php echo $this->session->userdata('id') ?>">
                                <label for="id_buku">ID Buku:</label>
                                <input type="text" name="id_buku" id="id_buku" class="form-control" value="<?php echo $detailbuku['id_buku'] ?>">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" class="form-control">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <button type="submit" class="btn btn-primary mt-3">Pinjam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h2 class="card-header">Detail Buku yang akan dipinjam:</h2>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6>Judul: <?php echo $detailbuku['judul'] ?></h6>
                            <h6>Penulis : <?php echo $detailbuku['penulis'] ?></h6>
                            <h6>Penerbit : <?php echo $detailbuku['penerbit'] ?></h6>
                        </div>
                        <div class="col-md-4">
                            <img class="mx-auto d-block" style="width:200px" src="<?php echo base_url('assets/img/cover/' . $detailbuku['cover']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>