<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin</title>
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
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-md-14">
									<div class="col-md-10 left">
										<div class="sidebar">
											<div class="list-group">
												<a href="#" class="list-group-item disabled">Transaksi</a>
												<a href="<?php echo site_url('Admin/berbagidana')?>" class="btn btn-secondary">Berbagi Dana</a>
												<a href="<?php echo site_url('Admin/berbagibarang')?>" class="btn btn-secondary">Berbagi Barang</a>
											</div>
											<div class="list-group">
												<a href="#" class="list-group-item disabled">Informasi Pengabdian Masyarakat</a>
												<a href="<?php echo site_url('Admin/aksisosial')?>" class="btn btn-secondary">Aksi Sosial</a>
											</div>
										</div>
									</div>
								</div>
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Transaksi</th>
                      <th scope="col">Nominal Transaksi</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>

                  <tbody>
                      <?php
                      $no = $this->uri->segment('3') + 1;
                      foreach($user as $u){
                      ?>
                      <tr>
                        <td scope="col"><?php echo $no++; ?></td>
                        <td scope="col"><?php echo $u->id_berbagidana ?></td>
                        <td scope="col"><?php echo $u->bd_nominal ?></td>
                        <td scope="col"><?php echo $u->bd_tanggal ?></td>
                        <td scope="col"><?php echo $u->bd_status ?></td>
                        <td scope="col">
                        <a
                            href="javascript:;"
                            data-id="<?php echo $u->id_berbagidana ?>"
                            data-nama="<?php echo $u->id_user ?>"
                            data-nominal="<?php echo $u->bd_nominal ?>"
                            data-tanggal="<?php echo $u->bd_tanggal ?>"
                            data-kampanye="<?php echo $u->id_kampanye ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-primary">Verifikasi</button>
                        </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <br/>
               <?php
               echo $this->pagination->create_links();
               ?>
							</div>
						</div>
					</div>
				</br>
				</br>
				</br>
				</br>
				</br>
			</br>
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Verifikasi Transaksi Dana</h4>
                  </div>
                  <form class="form-horizontal" action="<?=base_url()?>Admin/verifikasi_dana" method="post" enctype="multipart/form-data" role="form">
      	            <div class="modal-body">
      	                    <div class="form-group">
      	                        <label class="col-lg-6 col-sm-2 control-label">ID Transaksi</label>
      	                        <div class="col-lg-10">
      	                        	<input type="hidden" id="id" name="id" readonly class="form-control">
                                  <input type="hidden" id="kampanye" name="kampanye" readonly class="form-control">
      	                            <input type="hidden" class="form-control" id="nama" name="nama"readonly>
      	                        </div>
      	                    </div>
                            <div class="form-group">
      	                        <label class="col-lg-6 col-sm-2 control-label">Nominal Transaksi</label>
      	                        <div class="col-lg-10">
      	                            <input type="text" class="form-control" id="nominal" name="nominal"readonly>
      	                        </div>
      	                    </div>
                            <div class="form-group">
      	                        <label class="col-lg-6 col-sm-2 control-label">Tanggal</label>
      	                        <div class="col-lg-10">
      	                            <input type="text" class="form-control" id="tanggal" name="tanggal"readonly>
      	                        </div>
      	                    </div>
      	                </div>
      	                <div class="modal-footer">
      	                    <button class="btn btn-success" type="submit">Verifikasi</button>
      	                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
      	                </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
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
        <script>
            $(document).ready(function() {
                // Untuk sunting
                $('#edit-data').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)

                    // Isi nilai pada field
                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#nama').attr("value",div.data('nama'));
                    modal.find('#nominal').attr("value",div.data('nominal'));
                    modal.find('#tanggal').attr("value",div.data('tanggal'));
                    modal.find('#kampanye').attr("value",div.data('kampanye'));
                });
            });
        </script>

				</html>
