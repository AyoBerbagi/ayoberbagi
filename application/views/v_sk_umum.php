<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Syarat & Ketentuan</title>
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
       <div class="container align-center" style="margin-left: 380px;">
        <h1 class="base-margin-bottom"><b>Syarat dan Ketentuan</b></h1>
                        </div>
                <div class="container" >
                    <div class="row" style="margin-left: 3px;">
                        <p>Syarat dan ketentuan dalam halaman ini mengikat para Pengunjung dan Pengguna Situs Ayoberbagi.com untuk tunduk dan patuh atas apa yang telah ditetapkan oleh pihak pengelola situs. Dengan mengunjungi dan/atau menggunakan situs Ayoberbagi.com, maka baik pengunjung maupun pengguna dinyatakan telah memahami dan menyepakati semua isi dalam syarat dan ketentuan di bawah ini:</p>
                    </div>
                        <div class="btn-group btn-group-justified col-md-12" style="padding-left: 278px">
        <button type="button" href="<?=base_url()?>SK/umum" class="btn btn-primary active ">UMUM</button>
        <button type="button" href="<?=base_url()?>SK/timsukarelawan" class="btn btn-primary">TIM SUKARELAWAN</button>
        <button type="button" href="<?=base_url()?>SK/donatur" class="btn btn-primary">BAGI DONATUR</button>
        <button type="button" href="<?=base_url()?>SK" class="btn btn-primary">BAGI CAMPAGINER</button>
                        </div>
                    <br>
                    <br>
                        <div class="container">
                            <div class="row">
                                <div class="tab-content">

<article>
<p>AyoBergi adalah situs yang menyediakan jasa penggalangan Dana,Barang dan Aksi Sosial secara online yang tidak melanggar hukum-hukum yang ada di Indonesia. Untuk jasa ini, AyoBerbagi mengenakan biaya administrasi sebesar 5% dari setiap donasi yang terkumpul di tiap penggalangan dana, kecuali untuk kategori Donasi Barang tidak diperlukan biaya administrasi. Pertanyaan lainnya tentang apa itu Ayo Berbagi dapat dibaca di Tentang Kami. <a href="/faq">FAQ</a>.</p>
<strong>Kewajiban Pengguna Situs</strong><br>
<ol class="numbered list-styled">
<li>Wajib memahami dan mengerti tentang hukum yang berlaku di Indonesia. Sehingga tidak ada lagi namanya melanggar syarat dan ketentuan yang sudah ada;</li>
<li>Wajib memberikan data dan informasi dengan benar, dan tidak memalsuan data diri;</li>
</ol>
<strong>Larangan</strong>
<ol class="numbered list-styled">
<li>Dilarang memberikan memberikan informasi dan data dalam pembuatan Kampanye Dana dan Barang;</li>
<li>Dilarang melakukan untuk melakukan tindakan apapun yang dapat menyebabkan pelanggaran terhadap sebagian atau seluruh hak kekayaaan intelektual dari Pengelola Situs maupun Pengguna Situs lainnya;</li>
<li>Dilarang melakukan untuk melakukan tindakan apapun yang dapat merusak, mengganggu, atau membatasi sistem pada Situs.</li>
<li>Dilarang melakukan melakukan tindakan apapun yang bertentangan dengan hukum, melanggar kesusilaan;</li>
</ol>
</article>


<article>
<strong>Pengguna Situs yang merupakan pendukung kampanye penggalangan dana baik dalam bentuk donasi, Barang , dan berbagai bentuk dukungan lainnya berkewajiban untuk:</strong><br>
<ol class="numbered list-styled">
<li>Wajib memahami segala informasi mengenai ide dan/atau kampanye penggalangan Dana dan Barang yang dibuat di dalam Situs sebelum memberikan dukungan;</li>
<li>Sepakat untuk tidak mempermasalahkan dan/atau menuntut secara hukum Pihak Pengelola Situs atas penyalahgunaan donasi yang dilakukan oleh Pihak Pemilik Kampanye;</li>
<li>Calon donatur dapat memanfaatkan kontak narahubung yang tertera di tiap halaman kampanye untuk mengetahui detail suatu kampanye baik pada saat penggalangan dana maupun ketika masa implementasi kampanye dari narahubung secara langsung;</li>
<li>Wajib tidak melakukan pencucian uang dan/atau menggunakan uang yang berasal dari sumber yang tidak sah secara hukum dalam mendonasikan uangnya untuk mendukung ide dan/atau kampanye penggalangan dana yang ada di dalam Situs;</li>
<li>Donatur harus memilih terlebih dahulu bentuk berbagi yang akan diberikan seperti berbagi Donasi atau Barang;</li>
<li>Segalah donasi atau barang yang sudah di berikan tidak dapat di cairkan atau dekembalikan lagi;</li>
</ol>
</article>

<article>
<p>Khusus Pengguna Situs sebagai pemilik kampanye penggalangan dana harus memenuhi ketentuan umum dan ketentuan khusus sebagai berikut:</p>
<ol class="numbered list-styled">
<li>
<strong>Ketentuan Umum</strong>
<ol class="lower-alpha list-styled">
<li>Menjamin segala bentuk data , foto dan informasi yang ada di AyoBerbagi sesuai dengan data dan fakta dan siap di pertanggung jawabkan.</li>
<li>Jika kampanye penggalangan dana berbentuk informasi sendiri maka harus mencantumkan data diri sendiri. Namun jika itu informasi dari orang lain maka harus meminta izin sesuai dengan hukum yang ada;</li>
<li>Donasi yang diperoleh pemilik kampanye melalui Situs dan/atau bentuk penggalangan dana lain yang dilakukan Pengelola Situs akan dipotong oleh pengelola situs sebesar 5% (lima persen) sebagai biaya administrasi, kecuali kategori Berbagi Barang yang tidak dikenakan biaya administrasi;</li>
<li>Donasi yang diterima akan masuk ke fitur kampanye max 2x24 jam sejak kampanye dibuat;</li>
<li>Pemilik kampanye berkewajiban untuk melaksanakan apa yang telah ia kampanyekan setelah dana disalurkan oleh Pengelola Situs;</li>
<li>Pemilik kampanye berkewajiban untuk memberikan laporan pelaksanaan kampanye yang transparan dan kredibel melalui Situs Pengelola;</li>
<li>Pemilik kampanye wajib memberikan keterangan atau laporan melalui Situs Pengelola apabila pelaksanaan kampanye tidak sesuai dengan rencana dan/atau apabila ada reward/imbalan yang tidak dapat dipenuhi kepada Donatur;</li>
</ol>
</li>
<li>
<strong>Ketentuan Khusus</strong><br>
Pemilik kampanye setuju dan sepakat untuk menunjuk Pengelola Situs yang bertindak untuk dan atas nama dari Pemilik kampanye, untuk dapat melakukan hal-hal berikut:
<ol class="lower-alpha list-styled">
<li>Untuk membantu menjadi perantara Pengguna Situs yang ingin menjadi donatur dan/atau penyebar informasi dari kampanye yang dilakukan;</li>
<li>Untuk menyimpan sementara donasi yang telah diterima dari donatur;</li>
<li>Tim AyoBerbagi berhak menolak/menunda verifikasi akun jika belum mendapatkan data-data yang cukup;</li>
<li>Pembuat Kampanye bertanggung jawab penuh dalam data dan informasi yang dibuat. Jika data dan informasi data tidak benar atau dipalsukan maka pembuat kampanye bersedia harus bertanggung jawab dan menerima seala sanksi yang ada ;</li>


</ol>
</li>
</ol>
</article>

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
