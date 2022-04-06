<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Tambah Buku:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form action="<?= base_url('/koleksi/insert_tambah_buku') ?>" method="POST" enctype="multipart/form-data">
                                <label for="judul">Judul Buku:</label>
                                <input type="text" name="judul" id="judul" class="form-control">
                                <label for="penerbit">Penerbit:</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control">
                                <label for="penulis">Penulis :</label>
                                <input type="text" name="penulis" id="penulis" class="form-control">
                                <label for="cover">Cover :</label>
                                <input type="file" name="cover" id="cover" class="form-control">
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>