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
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">ctb.tana@ctb.mg</a>
        <i class="bi bi-phone"></i>+261 32 11 450 61 <i class="fa fa-phone"></i>020 78 450 61
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
        <a href="index.php" class="logo me-auto"><img src="assets/img/logo-ctb.jpg" alt="" class="img-fluid"></a>
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
          <li class="dropdown"><a href=""><span>Je veux faire des analyses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="cdtprelevement.php">Conditions de prélèvement</a></li>
              <li><a href="pecassurance.php">Prise en charge assurance</a></li>
              <li><a href="recuperationresultat.php">Récupération des résultats</a></li>
              <li><a href="ctlanalyse.php">Nos catalogues d'analyses</a></li>
              <li><a href="analysecovid.php">Informations et Analyses Covid 19</a></li>
              <li><a href="devis.php">Demande de devis</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="espacepro.php">Espace professionnel</a></li>
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
            <li><a href="espacepro.php">Espace professionnel</a></li>
            <li>Espace professionnel</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment">
      <div class="container">

        <div class="section-title">
          <h2>Espace professionnel</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <form action="mail/mail_espace_pro.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <select name="objet_demande" id="objet_demande" class="form-select">
                <option value="objet">- Objet de votre demande -</option>
                <option value="collaboration">Demande de collaboration </option>
                <option value="fournisseur">Fournisseurs</option>
                <option value="stage_technique">Demande de stage Technique</option>
                <option value="stage_rh">Demande de stage administrative</option>
                <option value="emploi">Demande d'emploi</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="genre" class="form-select" id="choix_genre" onclick="choixGenre()">
                <option>- Votre genre -</option>
                <option>Mr</option>
                <option>Mme</option>
                <option>Dr</option>
                <option>Pr</option>
                <option>Entreprise</option>
                <option>Assurance</option>
                <option>Autres à préciser</option>
              </select>
              <div class="validate"></div>
            </div>
              <div class="col-md-4 form-group mt-3">
                <div id="autre_precision1">
                  <input type="tel" class="form-control" name="si_autre" id="si_autre_disabled" placeholder="Autres à préciser..." disabled>
                </div>
                <div id="autre_precision2" style="display: none">
                  <input type="tel" class="form-control" name="si_autre" id="si_autre" placeholder="Autres à préciser...">
                </div>
              </div>

          </div>
          <div class="row">  
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre numéro de téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="mail" class="form-control" name="email" id="email" placeholder="Votre adresse email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
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
            <div class="sent-message">Votre demande a été soumise avec succès !</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <?php 
      include 'footer.php';
     ?>

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
  <!-- Jquery JS-->
  <script src="assets/js/jquery.min.js"></script>

<!-- Prise en charge assurance -->
  <script type="text/javascript">

    function choixGenre(){

      var choix_genre = document.getElementById("choix_genre").value;
    console.log(choix_genre);

      if (choix_genre == "Autres à préciser") {
        document.getElementById("autre_precision2").style.display = "block";
        document.getElementById("autre_precision1").style.display = "none";
      } else {
        document.getElementById("autre_precision2").style.display = "none";
        document.getElementById("autre_precision1").style.display = "block";
        document.getElementById("si_autre").value = "";
      }

    }
  </script>

</body>

</html>