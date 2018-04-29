<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bantuan  </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-bagi8d54a2collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" style="background-color: black">
      <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="<?=base_url()?>" rel="tooltip">
                <img src="<?=base_url()?>assets/img/ayoberbagi.png" alt="" style="height: 100px;width: 150px;margin-top: -40px;margin-bottom: -50px;">
              </a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="<?=base_url()?>" >
                          <i class=""></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <p>
                        Bentuk Donasi
                      </p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="<?=base_url()?>berbagiDana">Donasi </a>
                      <a class="dropdown-item" href="<?=base_url()?>BerbagiBarang">Berbagi Barang</a>
                      <a class="dropdown-item" href="<?=base_url()?>timSukarelawan">Aksi Sosial</a>
                      <a class="dropdown-item" href="<?=base_url()?>Kampanye">Kampanye Baru</a>
                    </div>
                  </li>
                   <!-- <li class="nav-item">
                    <div class="">
                      <a class="nav-link" href="<?=base_url()?>index.php/LogOut"><i class="now-ui-icons users_single-02" aria-hidden="true"></i>Log Out</a>
                    </div>
                  </li> -->
                  <?php if($this->session->has_userdata('login')){
                    echo "<li class='nav-item dropdown'>
                      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <p>";
                    echo $_SESSION['nama'];
                    echo "</p>
                      </a>
                      <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                        <a class='dropdown-item' href='".base_url()."Profil'>Profil </a>
                        <a class='dropdown-item' href='".base_url()."LogOut'>Log Out</a>
                      </div>
                      </li>";
                  }else{
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='".base_url()."LogIn'><i class='now-ui-icons users_single-02' aria-hidden='true'></i>Log In</a>
                    </li>";
                  } ?>
                   </ul>
                </div>
              </div>
          </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange" style="height: 40vh;">
            <div class="page-header-image" data-parallax="true" >

            </div>
          <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 back">
                            <h2>AJUKAN PERTANYAAN KEPADA KAMI</h2>
                                    </div>
                                </div>
            </div>

                            </div>
                        </div>

             <div class="section section-nucleo-icons">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5" style="padding-left: 90px;">
                            <h3>isi formulir di bawah ini</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                    <div class="col-md-6 form-group g-mb-20 has-error">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Nama Lengkap</label>
                    <input class="form-control form-control-md rounded-0" name="nama" type="text" placeholder="Muhammad Sholeh Al-Habib" required="">
                    </div>

                    <div class="col-md-6 form-group g-mb-20 has-error ">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Email</label>
                    <input class="form-control form-control-md rounded-0" name="email" type="email" placeholder="sholeh@gmail.com" required="">
                    </div>

                    <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">No HP/Telepon</label>
                    <input class="form-control form-control-md rounded-0" name="subjek" type="text" placeholder="+(62) 823 7824 ****" required="">
                    </div>

                    <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Subject</label>
                    <input class="form-control form-control-md rounded-0" name="nohp" type="tel" placeholder="Subject" required="">
                    </div>

                    <div class="col-md-12 form-group g-mb-40">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Pesan</label>
                    <textarea class="form-control form-control-md rounded-0" name="pesan" rows="7" placeholder="Pesan Anda" required=""></textarea>
                    </div>
                </div>
                        <button class="btn btn-success disabled" type="submit" role="button" style="margin-left: 300px;">Kirim Pertanyaan </button>
            <div class="section section-basic">
                <div class="container">

                	</div>
                </div>
            </div>

                </div>
<!--
                                    <div class="collapse navbar-collapse justify-content-end" id="example-navbar-icons">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pablo"><i class="now-ui-icons ui-1_send" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pablo"><i class="now-ui-icons users_single-02" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                                    <i class="now-ui-icons ui-1_settings-gear-63" aria-hidden="true"></i>
                                                </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
 -->        </div>


        <!--  End Modal -->
        <footer class="footer" data-background-color="violet">
            <div class="container">
                <nav>
                    <ul>
                    	<div class= "row">
                	<div class= "col-md-3">
                    <div id="buttons">
                        <p class="category">Ayo Berbagi
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.  </p>

                            </div>
                        </div>
                        <div class= "col-md-3"><button class="btn">Bentuk Donasi</button>
                        <p class="category">Bebagi Donasi </p>
                        <p class="category">Bebagi Barang </p>
                        <p class="category">Aksi Sosial </p>
                        <p class="category">Pengabdian Masyarakat </p>
                                </div>
                        <div class="col-md-3 col-lg-3"><button class="btn btn-primary">Pelajari Lebih Lanjut</button>
                        <p class="category">Tentang Kami </p>
                        <p class="category">F.A.Q </p>
                        <p class="category">Bantuan </p>
                        <p class="category">Tim Sukarelawan </p>
                                </div>
                        <div class="col-md-3"><button class="btn btn-info">Kontak Bantuan</button>
                        <p class="category">082304480707 </p>
                        <p class="category">ayo.berbagi@gmail.com </p>
                        <p class="category">Institut Teknologi Sumatera </p>
                        		</div>
                        		</div>

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
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>
