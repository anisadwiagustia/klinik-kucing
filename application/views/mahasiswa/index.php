<div class="container mt-3 ">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body ">
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-info font-weight-bold">Tambah
                        Data Member</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data member..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3 ">
                <div class="col-md-6 ">
                    <h3 class="text-light font-weight-bold">Daftar Member</h3>
                    <?php if (empty($mahasiswa)) : ?>
                        <div class="alert alert-danger" role="alert">
                            data member tidak ditemukan.
                        </div>
                    <?php endif; ?>
                    <ul class="list-group font-weight-bold">
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <li class="list-group-item mb-1">
                                <?= $mhs['nama']; ?>
                                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus mr-1">hapus</a>
                                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right mr-1">ubah</a>
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right mr-1">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </div>



</div>