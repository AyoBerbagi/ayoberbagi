<?php defined('BASEPATH') OR exit('No direct script access allowed') ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Registrasi Akun</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/register.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="template-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://ayoberbagii.000webhostapp.com" rel="tooltip" >
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
                        <a class="nav-link" href="<?=base_url()?>">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>index.php/register">
                            <p>Registrasi</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    </div>
    <div class="wrapper">

        <div class="page-header">

            <div class="page-header-image" data-parallax="true" style="background-image:url('<?=base_url()?>/assets/img/love2.jpg');">
            </div>

<!-- form registrasi -->
                <div class="container">
                    <br><br><br>
                    <div class="row">
                        <div class="card card-signup" data-background-color="purple">
                            <form class="form" method="POST" action="<?=base_url()?>index.php/registrasi" autocomplete="off">
                                <div class="header text-center">
                                    <h4 class="title title-up">Registrasi</h4>
                                    <!-- <div class="social-line">
                                        Login dengan
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Nama Depan" name="inputNamaDepan" required
                                          oninvalid="this.setCustomValidity('Masukkan Nama Depan !')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                        <input type="text" placeholder="Nama Belakang" class="form-control" name="inputNamaBelakang" required
                                        oninvalid="this.setCustomValidity('Masukkan Nama Belakang !')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="E-mail" name="inputEmail" required
                                        oninvalid="this.setCustomValidity('Masukkan E-Mail !')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_single-02"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username" name="inputUser" required
                                        oninvalid="this.setCustomValidity('Masukkan Username !')" oninput="setCustomValidity('')">
                                    </div>
                                     <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons objects_key-25"></i>
                                        </span>
                                        <input type="Password" class="form-control" placeholder="Password" name="inputPass" required
                                        oninvalid="this.setCustomValidity('Masukkan Password !')" oninput="setCustomValidity('')">
                                    </div>
                                     <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons objects_key-25"></i>
                                        </span>
                                        <input type="Password" class="form-control" placeholder="Ulangi Password" name="inputPassRe" required
                                        oninvalid="this.setCustomValidity('Ulangi Password !')" oninput="setCustomValidity('')">
                                    </div>
                                        Jenis Kelamin <br>
                                    <div class="radio">
                                <input type="radio" name="inputJK" id="radio1" value="Laki-laki">
                                <label for="radio1">
                                    Laki-laki
                                </label>
                                <input type="radio" name="inputJK" id="radio2" value="Perempuan">
                                <label for="radio2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" value="Daftar" name="daftarakun" class="btn btn-primary btn-round btn-lg btn-block">
                        </div>

                        <div class="center">
                            <h7>
                                <a href="#" class="link">Syarat dan Ketentuan</a>
                            </h7>
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        </div>
        <div class="section">
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
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
