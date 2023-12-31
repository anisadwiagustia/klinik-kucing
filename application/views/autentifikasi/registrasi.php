<div class="container-fluid ">
    <div class="row">
        <div class="col-md-5 ms-auto">
            <img src="<?php echo base_url(); ?>assets/img/kc1.png" class="rounded float-right col-lg-10 " alt="...">
        </div>
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">

            <div class="row">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->

                    <div class="col-lg ">
                        <div class="p-5">
                            <div class="text-center text-light">
                                <h1 class="h4  mb-4">Daftar Menjadi Member!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
                                <div class="form-group ">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama 
Lengkap" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small 
class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small 
class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error(
                                            'password1',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                        <?= form_error(
                                            'password2',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Menjadi Member
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small font-wight-bold" href="<?=
                                                                        base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                            </div>
                            <div class="text-center text-light">
                                Sudah Menjadi Member?<a class="small font-wight-bold" href="<?= base_url('autentifikasi'); ?>"> Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>