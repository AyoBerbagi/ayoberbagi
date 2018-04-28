<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aksi Sosial</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/css/faq.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url()?>/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-bagi8d54a2collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top ">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://ayoberbagii.000webhostapp.com" rel="tooltip">
                    Ayo Berbagi
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
                        <a class="dropdown-item" href="<?=base_url()?>index.php/berbagiDana">Donasi </a>
                        <a class="dropdown-item" href="<?=base_url()?>index.php/BerbagiBarang">Berbagi Barang</a>
                        <a class="dropdown-item" href="<?=base_url()?>index.php/timSukarelawan">Aksi Sosial</a>
                        <a class="dropdown-item" href="<?=base_url()?>index.php/Kampanye">Kampanye Baru</a>
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
                          <a class='dropdown-item' href='<?=base_url()?>index.php/Profil'>Profil </a>
                          <a class='dropdown-item' href='<?=base_url()?>index.php/LogOut'>Log Out</a>
                        </div>
                        </li>";
                    }else{
                      echo "<a class='nav-link' href='".base_url()."index.php/LogIn'><i class='now-ui-icons users_single-02' aria-hidden='true'></i>Log In</a>";
                    } ?>
                     </ul>
                  </div>
                </div>
            </nav>
    <!-- End Navbar -->
   <div class="section section-signup" style="background-image: url('assets/img/bg4.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
       <div>
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12 content-center">
                              <div id="contentt">
                <h3><b>DAFTAR DESA BINAAN</b></h3>
                <div class="row">
                    <div class="col-md-11"  >
                    <form style="float: right" class="form-inline my-8 my-lg-0">
                <input class="form-control mr-sm-6" type="text" placeholder="Nama Desa" class="glyphicon glyphicon-search">
            </form>
                    </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
          <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Desa</th>
                      <td scope="col"><b>Keterangan</b></td>
                    </tr>
        </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td></td>
                      <td><input type="checkbox" name="checkbox" class="bootstrap-switch"
                    data-on-label="ON"
                    data-off-label="OFF"
                 /></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td></td>
                      <td><input type="checkbox" name="checkbox" class="bootstrap-switch"
                    data-on-label="ON"
                    data-off-label="OFF"
                 /></td>
                    </tr>
                      <tr>
                      <th scope="row">3</th>
                      <td></td>
                      <td><input type="checkbox" name="checkbox" class="bootstrap-switch"
                    data-on-label="ON"
                    data-off-label="OFF"
                 /></td>
                    </tr>
                      <tr>
                      <th scope="row">4</th>
                      <td></td>
                      <td><input type="checkbox" name="checkbox" class="bootstrap-switch"
                    data-on-label="ON"
                    data-off-label="OFF"
                    /></td>
                    </tr>
                      <tr>
                      <th scope="row">5</th>
                      <td></td>
                      <td><input type="checkbox" name="checkbox" class="bootstrap-switch"
                      data-on-label="ON"
                      data-off-label="OFF"
                       /></td>
                    </tr>
                  </tbody>
                </table>
        <div>
           <ul class="pagination pagination-warning" >
            <li class="page-item disabled">
              <a class="page-link" href="#">&laquo;</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">&raquo;</a>
            </li>
          </ul>
        </div>
             <button type="button" class="btn btn-warning btn-sm" href="#">Lanjut
                    </button>

                </div>
                        </div>

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
                        Lorem ipsum dolor sit amet  </p>

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

</body><!--   Core JS Files   -->
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
