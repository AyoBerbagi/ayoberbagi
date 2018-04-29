<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Profil Ayo Berbagi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/profil.css" rel="stylesheet" />
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
   <div class="section section-signup" style="background-image: url('<?=base_url()?>/assets/img/profil.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                  <?php foreach ($infoUser as $key => $user) {
      							# code...
      						} ?>
                    <div class="row">
                         <div class="card-body">
                           <div class="col-sm-2">
                                <p class="category">Profil Saya</p> <br>
                                <?php echo" <img src='".base_url()."assets/upload/".$user['foto']."' alt='Foto Profil' class='rounded'>" ?>
                            </div> <br>

                            <button type="button" name="inputFoto" id="inputFoto" class="btn btn-primary" style="min-width: 20%;" data-toggle="modal" data-target="#change-foto-modal">
                                Ganti Foto Profil
                            </button>

                            <br>

                             <br>
                             <form class="form" action="<?=base_url()?>index.php/profil/edit" method="POST">
                               Nama
                                 <div class="form-group">
                                       <?php echo "<input type='text' value='".$user['u_namab']."' class='form-control' readonly />" ?>
                                   </div>
                               E-mail
                               <div class="form-group">
                                       <?php echo "<input type='text' value='".$user['u_email']."' class='form-control' readonly />" ?>
                                   </div>
                               Nomor Telepon
                               <div class="form-group">
                                        <?php echo "<input type='text' name='nope' value='".$user['u_nope']."' class='form-control' placeholder='0852xxxxyyyy'  />" ?>
                                   </div>
                               Lokasi
                               <div class="form-group">
                                 <?php echo "<input type='text' name='lokasi' value='".$user['u_lokasi']."' class='form-control' placeholder='Jalan xxx Kecamatan xxx Kabupaten xxx Provinsi xxx Kode Pos xxx'  />" ?>
                                </div>
                               <br>
                               <button type="submit" class="btn btn-primary">
                                   Simpan Perubahan
                               </button>
                             </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal fade" id="change-foto-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="loginmodal-container">


                </div>
              </div>
            </div> -->
            <div class="modal fade" id="change-foto-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Choose your foto </h1><br>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form" action="<?=base_url()?>index.php/profil/changeFoto" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class='form-group'>
          <label>Select your foto </label>
          <div class='col-xs-10'>
              <input type="file" class='form-control' name="inputFoto" accept=".gif, .jpg, .png" required />
          </div>
      </div>
      <!-- <hr> -->
        <!-- <input type="submit" name="login" class="login loginmodal-submit" value="OK"> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
          <button type="submit" name="login" class="login" class="btn btn-info btn-simple">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


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
