<?php
include 'head.php';
?>
<!-- About Generic Start -->
<section class="about-generic-area">
        <div></div>
        <div class="container border-top-generic">
            <center>
                <h3 class="about-title mb-70">Sistem Pengundian BerBIKElah 2020</h3>
            </center>
            <p>
                <a href="index.php" class="genric-btn gray circle"><i class="fa fa-home"></i> Home</a>
            </p>
            <div class="row justify-content-center">
                <div class="col-lg-8 align-content-center">
                    <div class="card card-primary">
                        <div class="card-header d-flex justify-content-center">
                            <h3 class="card-title">Pengundian Doorprize</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body d-flex justify-content-center">
                            <div id="output0" class="output ">
                              __
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-between">
                            <button class="genric-btn primary-border circle dice" onclick="firstRand()">
                                RANDOMIZE  
                                <span class="lnr lnr-dice"></span>
                            </button> &Tab;
                            <button class="genric-btn primary-border circle sync" onclick="cleartext()">
                                RESET  
                                <span class="lnr lnr-sync"></span>
                            </button>
                            &Tab;
                            <button class="genric-btn primary-border circle cross" onclick="stopDice()">
                                STOP  
                                <span class="lnr lnr-cross"></span>
                            </button>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Generic Start -->
<?php
include 'foot.php';
?>