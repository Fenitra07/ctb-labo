<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ctb-labo.mg</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon-sante.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">ctb.communication@ctb.mg</a>
        <i class="bi bi-phone"></i> +261 34 44 444 44
      </div>
<!--       <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <!-- <a href="index.html">ctb-labo.mg</a> -->
        <a href="index.html" class="logo me-auto"><img src="assets/img/logo-ctb.jpg" alt="" class="img-fluid"></a>
      </h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="services.php">A propos</a></li>
          <li class="dropdown"><a href="noslaboratoires.php"><span>Nos laboratoires</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="noslaboratoires.php">CTB Andraharo</a></li>
              <li><a href="noslaboratoires.php">CTB Ivato</a></li>
              <li><a href="noslaboratoires.php">CTB Toamasina</a></li>
              <li><a href="noslaboratoires.php">CTB Mahajanga</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="" class="active"><span>Je veux faire des analyses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="cdtprelevement.php">Conditions de prélèvement</a></li>
              <li><a href="pecassurance.php">Prise en charge assurance</a></li>
              <li><a href="recuperationresultat.php">Récupération des résultats</a></li>
              <li><a href="ctlanalyse.php">Nos catalogues d'analyses</a></li>
              <li><a href="analysecovid.php">Informations et Analyses Covid 19</a></li>
              <li><a href="devis.php">Demande de devis</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="espacepro.php">Espace professionnel</a></li>
          <li><a class="nav-link scrollto" href="blogsante.php">Blog santé</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="devis.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Demande de </span> devis</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

     <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Inner Page</h2> -->
          <ol>
            <li><a href="services.php">Je veux faire des analyses</a></li>
            <li>Demande de devis</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment">
      <div class="container">

        <div class="section-title">
          <h2>Demander un devis</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
<!--           <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <select name="laboratoire" id="laboratoire" class="form-select">
                <option value="">- Choisissez votre Laboratoire -</option>
                <option value="Andraharo">Andraharo</option>
                <option value="Ivato">Ivato</option>
                <option value="Toamasina">Toamasina</option>
                <option value="Mahajanga">Mahajanga</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="genre" id="genre" class="form-select">
                <option value="">- Choissez votre genre -</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
                <option value="Garcon">Enfant / Garçon</option>
                <option value="Fille">Enfant / Fille</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="prise_en_charge" id="prise_en_charge" class="form-select">
                <option value="">- Prise en charge -</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">  
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre numéro de téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="mail" class="form-control" name="email" id="email" placeholder="Votre adresse email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group mt-12 mt-md-0">
              <p style="font-size: 15px;"><i>* Joindre votre ordonance ou un autre fichier</i></p>
              <input type="file" class="form-control" name="fichier" id="fichier" placeholder="Joindre votre ordonance ou autre fichier">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message ou commentaire (Optionnelle)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande de devis a été soumise avec succès !</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>ctb-labo</h3>
            <p>
              Adresse principale <br>
              Ville<br>
              Pays <br><br>
              <strong>Téléphone:</strong> +261 34 44 444 44<br>
              <strong>Email:</strong> ctb.communication@ctb.mg<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Nos Laboratoires</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="noslaboratoires.php">CTB Andraharo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="noslaboratoires.php">CTB Ivato</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="noslaboratoires.php">CTB Toamasina</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="noslaboratoires.php">CTB Mahajanga</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Je veux faire des analyses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="cdtprelevement.php">Conditions de prélèvement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pecassurance.php">Prise en charge assurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="recuperationresultat.php">Récupération des résultats</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ctlanalyse.php">Nos catalogues d'analyses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="analysecovid.php">Informations et Analyses Covid 19</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="devis.php">Demande de devis</a></li>
            </ul>
          </div>
<!-- 
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Suivez-nous</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ctb-labo.mg</span></strong>. Tous droits réservés
        </div>
<!--         <div class="credits">
          Made with passion by <a target="_blank" href="https://pricing.dev-inbox.com/">Devinbox</a>
        </div> -->
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
        <a href="" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
        <a href="" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>