<div class="container text-center  mt-2">
    <h2>Bogor Meng.Com</h2>
    <p class="fs-4">Sobat Meng.Com Pecinta Anabul</p>
    <hr class="border-md-1border-bottom border-dark opacity-75 mb-3">
</div>
<div class="container-sm">
    <div class="row mt-3 justify-content-start">
        <div class="col-md-5 ms-auto">
            <img src="<?php echo base_url(); ?>assets/img/kc1.png" class="rounded float-right col-lg-10 " alt="...">
        </div>
        <div class="col-md-7 ms-auto">
            <div class="card mt-4 text-light">
                <div class="card-header font-weight-bold  ">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body ">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h7 class="card-subtitle mb-2"><?= $mahasiswa['email']; ?></h7>
                    <br>
                    <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info font-weight-bold">Kembali</a>
                </div>
            </div>
        </div>

    </div>


</div>