<?php
include("head.php");
?>
    <!-- About Generic Start -->
    <section class="about-generic-area">
        <div class="container border-top-generic">
            <h3 class="about-title mb-70">Form Registrasi</h3>
            <p>
                <a href="zona.php" class="genric-btn gray circle"><i class="fa fa-arrow-left"></i> Kembali</a>
                <a href="index.php" class="genric-btn gray circle"><i class="fa fa-home"></i> Home</a>
            </p>
            <div class="row">
                <div class="col-lg-8 align-content-center">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pendaftaran Peserta</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" id="" name="name" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" id="" name="address" class="form-control" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" id="" name="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No HP</label>
                                <input type="tel" id="" name="phone" class="form-control" placeholder="No HP">
                            </div>
                            <div class="form-group-sm d-flex">
                                <div class="primary-checkbox">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms"></label>
                                </div>
                                <p>&nbsp; Saya setuju dengan
                                    <b><a href="tna.php" target="_blank">Syarat & Ketentuan</a></b> yang berlaku
                                </p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-between">
                            <button onclick="sukses()" class="genric-btn primary circle">Daftar</button>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Generic Start -->
    <!-- Start Contact Area -->
<?php
include("foot.php");
?>