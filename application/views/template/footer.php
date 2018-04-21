<footer class="footer" data-background-color="violet">
    <div class="container">
        <nav>
            <ul>
              <div class= "row">
          <div class= "col-md-3">
            <div id="buttons">
                <p class="category">Ayo Berbagi
                Website yang menyalurkan bantuan kepada orang-orang yang mebutuhkan aman dan terpercaya. Dalam bentuk Donasi , Barang dan Aksi Sosial.  </p>
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
