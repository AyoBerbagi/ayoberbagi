<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/BerbagiBarang.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>
<body class="index-page sidebar-bagi8d54a2collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top " style="background-color: #8d54a2">
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
   <div class="section section-signup" style="background-image: url('<?=base_url()?>/assets/img/Bgbarang.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
               <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">


        <!-- Three columns of text below the carousel -->
        <div class="row">
          <?php
          if($infoKampanye==null){
            echo "
            <div class='col-lg-6'>
            <h2> $eror </h2><br>
            ";
          }else{
           foreach ($infoKampanye->result_array() as $key => $value) {
            // code...
              echo "
              <div class='col-lg-4'>
                <img class='rounded-circle' src='".base_url()."assets/upload/".$value['file']."' alt='Generic placeholder image' width='140' height='140'>
                <h2>".$value['nama_kampanye']."</h2>
                <p>".$value['deskripsi']."</p>
                <h5>Progress Dana</h5>
                                <div class='progress-container progress-primary'>
                                    <span class='progress-badge'>Terkumpul dari target Rp 300.000.000,-</span>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 50%;'>
                                            <span class='progress-value'>60%</span>
                                        </div>
                                    </div>
                                </div>
                <p><a class='btn btn-secondary' href='".base_url()."BerbagiDana' role='button'>Lanjut &raquo;</a></p>
              </div>";
            }
          } ?><!-- /.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="<?=base_url()?>/assets/img/barang2.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Bantu Anak Papua</h2>
            <p>Donasikan barang berupa Baju dan Buku untuk anak-anak papua yang membutuhkan. Karena anak-anak papua masih kekurangan baju-baju dan buku untuk hidup sehari-hari mereka. </p>
            <h4>Progress Barang</h4>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge"></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                        <span class="progress-value">40%</span>
                                    </div>
                                </div>
                            </div>
            <p><a class="btn btn-secondary" href="#" role="button">Lanjut &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="<?=base_url()?>assets/img/barang3.jpg"  alt="Generic placeholder image" width="140" height="140">
            <h2>Himpunan Mahasiswa Informatika untuk Masyarakat</h2>
            <p>Himpunan mahasiswa informatika sedang melakukan penggalangan barang untuk masyarkat lampung selatan , Bisa berupa baju-baju, buku-buku atau barang yang lain yang layak pakai. Mari tunjukkan bahwa kamu orang yang peduli terhadap sesama</p>
            <h4>Progress Barang</h4>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge"></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                        <span class="progress-value">20%</span>
                                    </div>
                                </div>
                            </div>
            <p><a class="btn btn-secondary" href="#" role="button">Lanjut &raquo;</a></p> -->
          <!-- </div><!-- /.col-lg-4 -->
        <!-- </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <!-- <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Bantuan Alat Mandi Untuk Anak Yatim/Piatu. <span class="text-muted"></span></h2>
            <p class="lead">Mari Bersama peduli terhadap orang-orang yang membuthkan kita, Yayasan Peduli Soleh membutuhkan alat-alat mandi yang baru untuk digunakan anak yatim/piatu yang berada di Yayasan Peduli Soleh. Mari kita bersama untuk memebrikan bantuan kita , sebagai kita orang yang peduli terhadap sesama. </p>
            <h4>Progress Barang</h4>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge"></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                        <span class="progress-value">55%</span>
                                    </div>
                                </div>
                            </div>
            <p><a class="btn btn-secondary" href="Donasi.html" role="button">Lanjut &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>assets/img/barang5.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Aksi Sosial . <span class="text-muted">Cek Kesehatan Untuk Masyarakat.</span></h2>
            <p class="lead">Mahasiswa ITERA sedang melakukan pengabdian masyarakat, didaerah desa Marga Kaya Bandar Lampung. Dalam bentuk Puskesmas kamu bisa berdonasi atau mendaftarkan diri menjadi salah satu bagian dari kami.</p>
             <h4>Progress Barang</h4>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">Terkumpul dari target Rp 10.000.000,-</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                        <span class="progress-value">15%</span>
                                    </div>
                                </div>
                            </div>
            <p><a class="btn btn-secondary" href="Donasi" role="button">Lanjut &raquo;</a></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>assets/img/Mega2.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Barang SEMBAKO untuk Korban Gempa<span class="text-muted"></span></h2>
            <p class="lead">Masyarakat Desa Sukamantri, Bukit Tinggi sedang mengalami musibah Gempa. Meraka sangat memerlukan bantuan dari kita untuk kebutuhan makanan , mari menyumbangkan barang untuk masyarakat terkena bencana gempa.</p>
             <h4>Progress Barang</h4>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge"></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                        <span class="progress-value">75%</span>
                                    </div>
                                </div>
                            </div>
            <p><a class="btn btn-secondary" href="Donasi" role="button">Lanjut &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>assets/img/mega3.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider"> -->


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
      </div>
      </div>
      </div>
</br>
</br>
</br>
</br>
</br>


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
                        <div class= "col-md-3"><button class="btn">Bentuk Donasi</button>
                        <p class="category">Bebagi Donasi </p>
                        <p class="category">Bebagi Barang </p>
                        <p class="category">Aksi Sosial </p>
                        <p class="category">Pengabdian Masyarakat </p>
                        </div>
                        <div class="col-md-3 col-lg-3"><button class="btn btn-primary">Pelajari Lebih Lanjut</button>
                        <p class="category">Tentang Kami </p>
                        <p class="category"><a href="<?=base_url()?>FAQ">F.A.Q</a></p>
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
