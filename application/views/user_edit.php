<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Edit User:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form action="<?php echo base_url('user/update/' . $list['id']) ?> " method="POST" enctype="multipart/form-data">
                                <label for="nama">Nama :</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $list['nama'] ?>">
                                <label for=" email">Email :</label>
                                <input type="text" name="email" id="email" class="form-control" value="<?= $list['email'] ?>">
                                <label for=" password">Password :</label>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $list['password'] ?>">
                                <label for=" alamat">Alamat :</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $list['alamat'] ?>">
                                <label for=" telepon">Telepon :</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $list['telepon'] ?>">
                                <label for=" picture">Avatar :</label>
                                <input type="file" name="picture" id="picture" class="form-control">
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>