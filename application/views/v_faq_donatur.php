<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>FAQ(Untuk donatur)</title>
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
                            <h2><b>Untuk Donatur</b></h2>
                           <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Bagaimana Cara Berdonasi via Ayoberbagi?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        1. Donasi online di website Kitabisa.com.
        Pilih campaign yang Anda minati >> Klik tombol Donasi Sekarang >> Masukkan informasi yang diminta (jumlah donasi, kontak Anda, metode pembayaran)
        Di akhir proses donasi online, Anda akan memperoleh no rekening bank dan tagihan (nominal donasi + kode unik) yang diminta sistem, kecuali jika Anda membayar dengan kartu kredit. <br>
        2.Transfer dengan mencantumkan kode unik pada nominal transfer.
        Mohon transfer tepat sesuai dengan nominal tagihan sistem (mencantumkan kode unik yang diberikan sistem), supaya donasi Anda terverifikasi secara otomatis oleh sistem.
        Kode unik tersebut juga akan diakumulasikan sebagai donasi pada campaign yang Anda maksud. <br>
        3. Dalam 1 hari kerja, donasi terverifikasi secara otomatis oleh sistem Kitabisa
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Konfirmasi Donasi
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
            Jika Anda melakukan transfer namun tidak mencantumkan kode unik atau memasukkan kode unik yang salah, Anda harus melakukan konfirmasi.

            Konfirmasi dapat dilakukan dengan mengikuti link yang dikirim ke email Anda atau mengirimkan bukti transfer ke email ayo.berbagi@gmail.com

            Harap menggunakan email yang Anda input ketika berdonasi online, ketika melakukan konfirmasi.
                  </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Bagaimana cara berdonasi tanpa mencantumkan nama (anonim)?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Apabila donatur tidak menginginkan namanya dicantumkan pada halaman campaign, silakan klik pilihan untuk berdonasi sebagai anonim setelah memasukan nominal donasi.

        Meski memilih anonim, Anda tetap diwajibkan mengisi data diri yang diminta agar tim Kitabisa tetap dapat melaporkan status donasi dan mendapat update dari campaigner.

        Perlu diketahui bahwa status anonim hanya berlaku pada halaman campaign.

        Campaigner ataupun tim KItabisa masih tetap dapat melihat identitas donasi Anda.
      </div>
    </div>
  </div>
            <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Kesalahan yang sering dilakukan saat berdonasi di Kitabisa
        </button>
      </h5>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        1. Transfer tanpa melakukan donasi online terlebih dahulu
        Donatur diwajibkan melakukan donasi online terlebih dahulu untuk memilih campaign spesifik yang diinginkan.
        Apabila Anda melakukan transfer tanpa berdonasi online, maka dana tersebut tidak akan terdistribusikan ke campaign manapun, dan dana tersebut menjadi dana abadi milik Ayoberbagi.com.<br>
        2. Transfer tanpa mencantumkan kode unik
        Ketika donatur tidak mencantumkan kode unik pada saat transfer, maka donasi tidak akan terverifikasi secara otomatis. <br>
        3. Jika ini terjadi pada Anda, Anda wajib melakukan konfirmasi.<br>
        Transfer dengan kode unik yang salah
        Ketika donatur salah dalam mencantumkan kode unik pada saat transfer, maka donasi tidak akan terverifikasi secara otomatis dan dapat tercatat sebagai donasi dari orang lain. <br>
        4. Transfer setelah melewati / terlalu mepet deadline
        Kami sangat menyarankan agar donatur segera melakukan transfer setelah berdonasi online.
        Transfer terlalu dekat dengan deadline meningkatkan kemungkinan donasi Anda dibatalkan.
        Jika ini terjadi pada Anda, Anda wajib melakukan konfirmasi.<br>
        5. Menggabungkan donasi menjadi satu kali transfer
        Apabila Anda berdonasi di lebih dari satu campaign, mohon untuk tidak menggabungkan nominal donasi pada satu kali transfer. <br>

        Sebagai contoh, apabila Anda berdonasi ke campaign A sebesar Rp50.105 dan ke campaign B sebesar Rp.50.150, mohon di transfer satu per satu dan tidak digabungkan menjadi Rp100.255 karena sistem kami tidak akan mengenali transfer tersebut. <br>

        Jika Anda menginginkan cara yang simpel untuk berdonasi ke lebih dari 1 campaign, silakan gunakan fitur dompet kebaikan.<br>
        6. Berdonasi mewakili orang lain.
        Ketika Anda berdonasi mewakili orang lain, ada 2 opsi yang Anda bisa lakukan:
        <li>Tulis nama dan email orang tersebut
            Pastikan Anda dalam keadaan logout, dan masukan nama dan email dari donatur yang Anda wakili.</li><br>
          <li>Gunakan akun Anda, tulis di komentar. Tuliskan nama     donatur yang Anda wakili di kolom komentar donatur.</li>
          <li>Gunakan akun Anda, tulis di komentar. Tuliskan nama     donatur yang Anda wakili di kolom komentar donatur.</li>
    </div>
  </div>
 </div>
            <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          Saya sudah transfer, tetapi mengapa saya mendapatkan notifikasi bahwa donasi tercancel?
        </button>
      </h5>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        Umumnya, donasi akan terverifikasi dalam 1 hari kerja setelah transfer, kecuali:
          <br><br>
        <li>Kode unik donasi yang dicantumkan salah</li>
        <li>Nominal transfer donasi tidak mencantumkan kode unik.</li>
        <li>Proses transfer melebihi/terlalu dekat deadline transfer.</li><br><
        Apabila Anda sudah melakukan transfer, namun memperoleh notifikasi bahwa donasi Anda dibatalkan, silakan lakukan konfirmasi.
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
