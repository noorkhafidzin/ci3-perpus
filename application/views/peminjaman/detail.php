<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Detail Peminjaman Buku:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><?php echo $detailbuku['judul'] ?></h4>
                            <hr>
                            <h6>Penulis : <?php echo $detailbuku['penulis'] ?></h6>
                            <h6>Penerbit : <?php echo $detailbuku['penerbit'] ?></h6>
                            <h6>Jumlah tersedia : <?php echo $detailbuku['jumlah'] ?> Eksemplar</h6>
                            <a class="btn btn-success" href="<?php echo base_url('peminjaman/tambah/') . $detailbuku['id_buku'] ?>">Pinjam</a>
                            <hr>
                            <h5>Riwayat Peminjaman</h5>
                            <br>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID Pinjaman</th>
                                    <th>Nama Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                </tr>
                                <?php foreach ($listpeminjaman as $peminjaman) : ?>
                                    <tr>
                                        <td><?php echo $peminjaman->id ?></td>
                                        <td><?php echo $peminjaman->nama ?></td>
                                        <td><?php echo $peminjaman->tgl_pinjam ?></td>
                                        <td><?php echo $peminjaman->tgl_kembali ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <img class="mx-auto d-block" style="width:150px" src="<?php echo base_url('assets/img/cover/' . $detailbuku['cover']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>