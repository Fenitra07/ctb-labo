<?php
  $id = $_GET['id'];
  require_once 'parameters.php';
  include('connexion/connexion.php');
?>


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
<style type="text/css">
 #post {
  height: 100%;
  top:100px;
  padding: 25px;
}

#post .post-content {
  background: #fff;
  margin: 15px;
  box-shadow: 0 0 5px 3px rgba(0,0,0,.15);
}
#post .post-content .post-image {
  padding: 15px;
}
#post .post-content .post-image img {
  width: 200px;
  height: 200px;
}
#post .post-content .post-detail {
  padding: 15px;
}

.btn-post {
  background: #07518b;
  color: #fff;
  margin: 15px 25px;
}
.btn-post:hover {
  border: 1px solid #07518b;
  background-color: transparent;
  color: #07518b;
}
#post .post-pagination .pagination {
  justify-content: center;
}
.post-create {
  background-color: #f1f1f1;
}
.create .navbar-menu {
    padding: 40px 0 0 90px;
}
#post .table th {
  text-align: center;
  vertical-align: middle;
}
#post .table button {
  margin: 10px;
}
.article-img {
  margin-bottom: 35px;
  position: relative;
}
.article-img img {
  width: 100%;
}
.article-info {
  position: absolute;
  background: #72ccd4;
  padding: 15px 45px;
  border-radius: 50px;
  bottom: -25px;
  left: 30%;
  display: inline-block;
}
.article-info span {
  margin:0  15px
}

.li_titres {
  list-style-type: circle;
}

a {
  color: grey;
  text-decoration: none;
}

a:hover {
  color: black;
  text-decoration: none;
} 

</style>


<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">ctb.tana@ctb.mg</a>
        <i class="bi bi-phone"></i>+261 32 11 450 61 <i class="fa fa-phone"></i>020 22 450 61
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
          <li><a class="nav-link scrollto" href="espacepro.php">Espace professionnel</a></li>
          <li><a class="nav-link scrollto active" href="blogsante.php">Blog santé</a></li>
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
            <li><a href="blogsante.php">Blog</a></li>
            <li>Blog Santé</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment">
      <div class="container">

        <div class="section-title">
          <h2>
            Actualités <br>
          </h2>
        </div>

    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-3">
            <aside id="filter">
              <h3><b>Historique</b></h3>
              <div class="actu-filter">
                <div class="check-filter">
                  <ul>

                <?php

                  $sql = "SELECT * FROM article ORDER BY id ASC";
                  $result = mysqli_query($conn, $sql);

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                 ?>
                  <li class="li_titres"><a href="blogsante_voir.php?id=<?php echo $row['id']; ?>"><?php echo $row['titre_art']; ?></a></li>

                <?php
                    }
                  }
                ?>

                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-md-12 col-lg-9">
            <section id="post">
              <div class="container">
                <?php
                  $sql = "SELECT * FROM article WHERE id = $id";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                 ?>
                <h3 class="title text-center"><?php echo $row['titre_art']; ?></h3>
                <hr class="separator">
                <div class="text-center">
                  <div class="article-img wow zoomIn">
                  <center>
                    <img src="<?php echo 'upload/'.$row['image_art'] ?>">
                  </center>
                    <div class="article-info">
                      <center>
                        <span><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo $row['date_pub_art']; ?></span>
                      </center>
                    </div>
                  </div>
                  <div class="article-content">
                    <p class="wow fadeInUp" style="text-align: justify;">
                      <?php echo $row['contenu_art']; ?>
                    </p>
                  </div>
                </div>

              </div>
            </section>
          </div>
        </div>
  	</div>

  




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

</body>

</html>