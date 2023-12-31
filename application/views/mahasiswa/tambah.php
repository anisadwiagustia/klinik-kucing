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
                <div class="card mt-4 ">
                    <div class="card-header text-light font-weight-bold">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body text-light font-weight-bold">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" name="nrp" class="form-control" id="nrp">
                                <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Pangan">Teknik Pangan</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Planologi">Teknik Planologi</option>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-info float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>