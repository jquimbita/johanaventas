<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata("confirmacion"); ?>");
  </script>
  <?php   $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>
<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata("error"); ?>");
  </script>
  <?php   $this->session->set_flashdata("error","") ?>
<?php endif; ?>
<?php if ($this->session->flashdata("Bienvenida")): ?>
  <script type="text/javascript">
	toastr.success("<?php echo
	$this->session->flashdata("Bienvenida"); ?>");
  </script>
  <?php $this->session
     	->set_flashdata("Bienvenida","")  ?>
<?php endif; ?>
<style media="screen">
  .obligatorio{
    color:red;
    background-color:white;
    border-radius: 20px;
    font-size:15px;
    padding-left: 5px;
    padding-right: 5px;
  }
  .error{
    color:red;
    font-weight: bold;
  }
  input.error{
    border: 2px solid red;
  }
</style>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Contactos</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">ARREGLOS PARA TODO TIPO DE EVENTOS</h4>
              <!-- <a class="btn btn-link" href=""></a> -->
              <a class="btn btn-link" href="">DIA DE LA MADRE</a>
              <a class="btn btn-link" href="">DIA DEL PADRE</a>
              <a class="btn btn-link" href="">AMOR Y AMISTAD</a>
              <a class="btn btn-link" href="">CUMPLEAÑOS</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Desarrolladores</h4>
            <a class="btn btn-link" href="">Jhoana Quimbita</a>
            <a class="btn btn-link" href="">Universidad Tecnica de Cotopaxi</a>
                <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a> -->
            </div>
            <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Email:</h4>
              <a class="btn btn-link" href="">jhoana.quimbita@utc.edu.ec</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/parallax/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url(); ?>plantilla/js/main.js"></script>
</body>

</html>
