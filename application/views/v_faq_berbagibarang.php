<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>FAQ(Berbagi barang)</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/pondasi.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-bagi8d54a2collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top ">
      <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="<?=base_url()?>" rel="tooltip">
                <img src="<?=base_url()?>assets/img/ayoberbagi.png" alt="" style="height: 100px;width: 150px;margin-top: -40px;margin-bottom: -50px;">
              </a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?=base_url()?>/assets/img/blurred-image-1.jpg">
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
                      <a class="dropdown-item" href="<?=base_url()?>AksiSosial">Aksi Sosial</a>
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
   <div class="section section-signup" style="background-color:white;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" >
                            <ul  class="nav nav-pills">
                               <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>" class="active">Panduan Umum <span class="pull-right fa fa-chevron-right"></span></li></button>
                               <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>">Untuk Campaigner<span class="pull-right fa fa-chevron-right"></span></li></button>
                               <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>">Aksi Sosial<span class="pull-right fa fa-chevron-right"></span></li></button>
                                <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>">Pencairan Dana<span class="pull-right fa fa-chevron-right"></span></li></button>
                               <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>">Untuk Donatur<span class="pull-right fa fa-chevron-right"></span></li></button>
                                <button class="btn btn-primary col-md-10" id="borderbox">
                          <li href="<?=base_url()?>">Berbagi Barang<span class="pull-right fa fa-chevron-right"></span></li></button>
                       </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                            <div class="col-md-9">
                                <br>
                                    <div class="form-group">
                         <input type="text" value="" placeholder="Cari Pertannyaanmu ..." class="form-control" id="borderbox">
                                    </div>

                        </div>

                                 <div class="col-md-3">
                            <button class="btn btn-primary" style="margin-top: 20px">CARI
                                </button>
                            </div>
                            </div>
                            <h2><b>Berbagi Barang</b></h2>
                           <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Apa sajakah barang yang bisa di donasikan lewat Ayoberbagi.com
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Ayoberbagi.com menerima semua jenis barang dengan kategori sebagai berikut :
         1.Pakaian <br>
         2.Obat-obatan <br>
         3.Buku <br>
         4.dll
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bagaimana cara saya untuk mendonasikan barang
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
          Langkah-langkah berdonsai barang :
          1.login sistem <br>
          2.pilih page berbagi barang pada menu dropdown yang terdapat di bagian atas sebelah kanan <br>
          3.lalu klik donasi barang<br>
          lalu sistem kami akan mengirimkan notofikasi kepada pendonasi melalui email atau nomor telfon dan barang yang didaftarkan untuk didonasikan akan segera disalurkan
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Apakah Ayoberbagi memiliki standar barang yang harus didonasikan
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Ayoberbagi.com membebaskan kepada donatur untuk mendonasikan barang apa saja yang masih layak untuk digunakan. <br>
          untuk donasi barang dengan kategori obat-obatan, donatur wajib menyertakan tanggal kadaluarsa obat.
      </div>
    </div>
  </div>
            <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Bagaimana cara mengirim barang yang saya donasikan kepada AyoBerbagi
        </button>
      </h5>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        Kami menyediakan jasa penerimaan donasi barang yang kami sediakan untuk mengambil setiap barang yang telah didonasikan lewat Ayoberbagi sekurang-kurangnya 2x24 jam setelah notifikasi diterima oleh donatur, jika waktu 2x24 jam barang belum diambil oleh tim kami, kami akan memberikan informasi terbaru terkait masalah tersebut. adapun opsi yang dapat donatur lakukan :
          1.Transportasi Kirim online <br>
          2.Jasa pengiriman barang <br>
          donatur bisa memilih opsi yang diberikan dan bisa langsung mengirimkan barang yang didonasikan ke kantor pusat kami
      </div>
    </div>
  </div>

</div>
                    </div>

                </div>
            </div>

<!--          <li data-target="#UntukCampaigner">
Untuk Campaigner <span class="pull-right fa fa-chevron-right"></span>
</li>
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
 -->


        <!--  End Modal -->
        <footer class="footer" data-background-color="violet">
            <div class="container">
                <nav>
                    <ul>
                      <div class= "row">
                  <div class= "col-md-3">
                    <div id="buttons">
                        <p class="category">Ayo Berbagi
                        adalah website untuk berdonasi dana , barang dan penghubung untuk melakukan aksi sosial secara online.  </p>
                        </div>
                        </div>
                        <div class= "col-md-3"><label>Bentuk Donasi</label>
                        <p class="category"><a href="<?=base_url()?>BerbagiDana">Bebagi Donasi </p>
                        <p class="category"><a href="<?=base_url()?>BerbagiBarang">Bebagi Barang </p>
                        <p class="category"><a href="<?=base_url()?>AksiSosial">Aksi Sosial </p>
                        </div>
                        <div class="col-md-3 col-lg-3"><label>Pelajari Lebih Lanjut</label>
                        <p class="category"><a href="<?=base_url()?>SK">Syarat dan Ketentuan</p>
                        <p class="category"><a href="<?=base_url()?>FAQ">F.A.Q</a></p>
                        <p class="category"><a href="<?=base_url()?>Bantuan">Bantuan </p>
                        <p class="category"><a href="<?=base_url()?>TimSukarelawan">Tim Sukarelawan </p>
                        </div>
                        <div class="col-md-3"><label>Kontak Bantuan</label>
                        <p class="category"><a href="#">082304480707 </p>
                        <p class="category"><a href="#">ayo.berbagi@gmail.com </p>
                        <p class="category"><a href="#">Institut Teknologi Sumatera </p>
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
          <script src="<?=base_url()?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
          <script src="<?=base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
          <script src="<?=base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
          <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
          <script src="<?=base_url()?>assets/js/plugins/bootstrap-switch.js"></script>
          <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
          <script src="<?=base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
          <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
          <script src="<?=base_url()?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
          <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
          <script src="<?=base_url()?>assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
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
