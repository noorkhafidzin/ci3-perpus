<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Detail Buku:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title">Judul <?php echo $detailbuku['judul'] ?></h4>
                            <hr>
                            <h6>Penulis : <?php echo $detailbuku['penulis'] ?></h6>
                            <h6>Penerbit : <?php echo $detailbuku['penerbit'] ?></h6>
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