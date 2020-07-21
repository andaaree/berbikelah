<?php
include("head.php");
?>
    <!-- About Generic Start -->
    <section class="about-generic-area">
        <div class="container border-top-generic">
            <h3 class="about-title mb-70">&nbsp;</h3>
            <p>
                <a href="index.php" class="genric-btn gray circle"><i class="fa fa-home"></i> Home</a>
            </p>
            <div class="row">
                <div class="col-lg-8 align-content-center">
                    <div class="card card-primary">
                        <div class="card-header d-flex flex-column align-items-center">
                            <h3 class="card-title">QR Code Scanner</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="single d-flex flex-column align-items-center">
                                <h6>
                                    Scan QR Code terdekat :
                                </h6>

                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex flex-column align-items-center">
                            <br>
                            </br>
                            <label class="scan">
                                <input id="scan1" type="file" name="scan" allow="image/*" capture="camera">
                                <div class="icon">
                                    <span class="lnr lnr-camera"></span>
                                </div>
                            </label>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Generic Start -->
<?php
include("foot.php");
?>