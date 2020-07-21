<?php
include("head.php");
?>
    <!-- About Generic Start -->
    <section class="about-generic-area">
        <div class="container border-top-generic">
            <h3 class="about-title mb-70">PILIH ZONA</h3>
            <p>
                <a href="index.php" class="genric-btn gray circle"><i class="fa fa-home"></i> Home</a>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <center>
                                <h2 class="card-title">ZONA SEMARANG</h2>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="form-group-sm d-flex">
                                <label class="map-radio">
                                    <input id="zone1" type="radio" name="zone" value="small" checked>
                                    <img src="img/elements/map.png">
                                </label>
                                <label for="zone1">&nbsp;<h4>&nbsp; Semarang Timur</h4></label>
                            </div>
                            <div class="form-group-sm d-flex">
                                <label class="map-radio">
                                    <input id="zone2" type="radio" name="zone">
                                    <img src="img/elements/map.png">
                                </label>
                                <label for="zone2">&nbsp;<h4>&nbsp; Semarang Barat</h4></label>
                            </div>
                            <div class="form-group-sm d-flex">
                                <label class="map-radio">
                                    <input id="zone3" type="radio" name="zone">
                                    <img src="img/elements/map.png">
                                </label>
                                <label for="zone3">&nbsp;<h4>&nbsp; Tembalang</h4></label>
                            </div>
                            <div class="form-group-sm d-flex">
                                <label class="map-radio">
                                    <input id="zone4" type="radio" name="zone">
                                    <img src="img/elements/map.png">
                                </label>
                                <label for="zone4">&nbsp;<h4>&nbsp; Mijen & BSB </h4></label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="register.php" class="genric-btn primary circle">Pilih</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Generic Start -->
<?php
include("foot.php");
?>