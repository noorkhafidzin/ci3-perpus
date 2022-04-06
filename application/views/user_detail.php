<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Detail User:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><?php echo $detail['nama'] ?></h4>
                            <hr>
                            <h6>Email : <?php echo $detail['email'] ?></h6>
                            <h6>Telepon : <?php echo $detail['telepon'] ?></h6>
                            <h6>Alamat : <?php echo $detail['alamat'] ?></h6>
                        </div>
                        <div class="col-md-4">
                            <img class="mx-auto d-block rounded-circle img-thumbnail" style="width:150px" src="<?php echo base_url('assets/img/profil/' . $detail['picture']) ?>" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>