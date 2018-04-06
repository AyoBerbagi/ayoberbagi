<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Berbagi Dana - Ayo Berbagi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/berbagiDana.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top  " style="background-color: #8700b3 ">
        <div class="container">

            <div class="navbar-translate">
                <a class="navbar-brand" href="" target="_blank">
                    Ayo Berbagi
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                   <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>index.php/Welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Berbagi Dana</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#pablo" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#pablo" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#pablo" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="purple">
        <div class="page-header-image" style="background-image:url('../assets/img/donate.jpg')"></div>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <h2>
                            Berbagi Dana
                        </h2 >
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <input type="text" placeholder="Masukkan Nominal" class="form-control">
<!--
                                <script>
                                    function Nominal(event) {
                                    var charCode = (event.which) ? event.which : event.keyCode
                                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                                            return false;
                                            return true;
                                    }
                                </script>
 -->
                            </div>
                            <p align="left">&nbsp&nbsp&nbsp&nbsp;Minimal Rp 25.000,00 </p>
                            <h6 align="left">Pilih Metode Pembayaran : </h6>
                            <div class="radio" align="left" >
                                <input type="radio" name="radio-transfer" id="radioBCA" value="optionBCA" >
                                <label for="radioBCA">
                                    Transfer &nbsp&nbsp; <img src="<?=base_url()?>/assets/img/bca.png" align="right" width="49" height="29">
                                </label>
                            </div>

                            <div class="radio" align="left">
                                <input type="radio" name="radio-transfer" id="radioBNI" value="optionBNI">
                                <label for="radioBNI">
                                    Transfer &nbsp&nbsp; <img src="<?=base_url()?>/assets/img/logobankbni2.png" align="right" width="49" height="29">
                                </label>
                            </div>

                            <div class="radio" align="left" >
                                <input type="radio" name="radio-transfer" id="radioMandiri" value="optionMandiri" >
                                <label for="radioMandiri">
                                    Transfer &nbsp&nbsp; <img src="<?=base_url()?>/assets/img/bank-mandiri-button-02.png" align="right" width="49" height="29">
                                </label>
                            </div>

                            <div class="input-group form-group-no-border input-lg">

                                <input type="text" placeholder="Masukkan No HP" class="form-control" />
                                <!-- <script>
                                    function NoHp(event) {
                                    var charCode = (event.which) ? event.which : event.keyCode
                                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                                            return false;
                                            return true;
                                    }
                                </script> -->
                            </div>
                            <div class="checkbox" align="left">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    lorem ipsum
                                </label>
                            </div>
                            <div class="footer text-center">
                                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Donasi</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                    MIT License
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?=base_url()?>/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=base_url()?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?=base_url()?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?=base_url()?>/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?=base_url()?>/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
