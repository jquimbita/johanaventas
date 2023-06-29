<?php if (!$this->session->userdata("conectado")): ?>
  <script type="text/javascript">
  window.location.href=
  "<?php echo site_url('welcome/login'); ?>";
  </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FLORERIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- GOOGLE API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzfw1KvVx4RgrJGDJ9FOzVd4tIgS-nDT8&libraries=places&callback=initMap">
    </script>
    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>img/favicon.ico" rel="icon">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <!-- Importacion de jquery validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
     jQuery.validator.addMethod("letras", function(value, element) {
       //return this.optional(element) || /^[a-z]+$/i.test(value);
       return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáéíñóú ]*$/.test(value);

     }, "Este campo solo acepta letras");
</script>
<!-- importacion toastr js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- importacion toastr css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plantilla/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+012 345 6789</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo site_url(); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">INICIO</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo site_url(); ?>" class="nav-item nav-link active">NOSOTROS</a>
                <!-- <a href="<?php echo site_url(); ?>" class="nav-item nav-link">SUCURSALES</a> -->
                <!-- <a href="project.html" class="nav-item nav-link">Projects</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CLIENTES</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url(); ?>/clientes/nuevoC" class="dropdown-item">NUEVO</a>
                        <a href="<?php echo site_url(); ?>/clientes/indexC" class="dropdown-item">LISTADO DE CLIENTES</a>
                        <!-- <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PEDIDOS</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="<?php echo site_url(); ?>/administradores/nuevo" class="dropdown-item">NUEVO</a>
                    <a href="<?php echo site_url(); ?>/administradores/listado" class="dropdown-item">LISTADO DE PEDIDOS</a>
                </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PRODUCTOS</a>
              <div class="dropdown-menu bg-light m-0">
                  <a href="<?php echo site_url(); ?>/productos/nuevoPEDI" class="dropdown-item">NUEVO</a>
                  <a href="<?php echo site_url(); ?>/productos/indexPEDI" class="dropdown-item">LISTADO DE PRODUCTOS</a>
              </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">USUARIO</a>
            <div class="dropdown-menu bg-light m-0">
                <a href="<?php echo site_url(); ?>/productos/nuevoPEDI" class="dropdown-item">NUEVO</a>
                <a href="<?php echo site_url(); ?>/productos/indexPEDI" class="dropdown-item">LISTADO DE PRODUCTOS</a>
            </div>
        </div>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->
