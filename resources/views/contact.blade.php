<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oliver Quintero - Índice</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.8.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Oliver Quintero</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/oliverso_2k" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/oliverisrael.quinterogarcia/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/oliverisrael.quinterogarcia/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/Oliverso2K" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="landingpage" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
          <li><a href="landingpage#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre Mí</span></a></li>
          <li><a href="landingpage#skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Habilidades</span></a></li>
          <li><a href="landingpage#services" class="nav-link scrollto "><i class="bx bx-server"></i> <span>Fortalezas</span></a></li>
          <li><a href="landingpage#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Estudios</span></a></li>
          <li><a href="landingpage#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portafolio</span></a></li> 
          <li><a href="" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>       
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Rodiles 1840, Guadalajara, Jalisco 44298</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Correo:</h4>
                <p>oliverisrael.quinterogarcia@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>33 1315 7363</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.2144358221444!2d-103.34959997058822!3d20.70151516004408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1cf8fdf7e2b%3A0x349951e42722bea!2sRodiles%201840%2C%20Jardines%20Alcalde%2C%2044298%20Guadalajara%2C%20Jal.!5e0!3m2!1ses!2smx!4v1663016703013!5m2!1ses!2smx" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="/recibe-form-contacto" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  @csrf

                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" value={{ $name ?? old('name') }}>
                  @error('name')
                    <p>Ingrese un nombre.</p>
                  @enderror

                </div>
                <div class="form-group col-md-6">
                  <label for="email">Correo</label>
                  <input type="email" class="form-control" name="email" id="email" value={{ $email ?? old('email') }}>
                  @error('email')
                    <p>Ingrese un correo electrónico.</p>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="comment">Comentario</label>
                <textarea class="form-control" name="message" rows="10" required>{{ $comment ?? old('comment') }}</textarea>
                @error('comment')
                  <p>Ingrese un comentario.</p>
                @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>