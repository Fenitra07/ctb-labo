<?php
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
  border-radius: 10px 10px 0 0;
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
  background: #2c4964;
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

/*BLOG*/
  .news-thumb {
    background: #ffffff;
    border-radius: 10px;
  }
  .news-thumb img {
    border-radius: 10px 10px 0 0;
  }

  .news-info {
    padding: 30px;
    text-align: left;
    background-color: #fafafa;
  }
  .news-info span {
    display: block;
    letter-spacing: 0.5px;
  }
  .news-info h3 {
    margin-top: 10px;
    margin-bottom: 10px;
    color: black;
    font-size: 1.8em;
    line-height: 1.2em;
    font-weight: 600;
  }

  .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
  }

/*BLOG*/

</style>


<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">ctb.tana@ctb.mg</a>
        <i class="bi bi-phone"></i>+261 32 11 450 61 <i class="fa fa-phone"></i>020 22 450 61
      </div>
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
          
                  <?php
                    $sql = "SELECT * FROM article";
                    $resultat = mysqli_query($conn, $sql);
                    $total_ligne = mysqli_num_rows($resultat);
                    if(isset($_GET["debut"]))
                    {
                      $commencement = $_GET["debut"];
                      $nbliste = 3;
                    }
                    else
                    {
                      $commencement = 0;
                      $nbliste = 3;
                    }

                    $nb_page = ceil($total_ligne/$nbliste);
                    $sql = "SELECT * FROM article ORDER BY id DESC LIMIT  $commencement, $nbliste";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                  ?>

                  <div class="col-md-4 col-sm-6">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                      <a href="blogsante_voir.php?id=<?php echo $row['id']; ?>">
                          <img style="width: 100%; height: 260px;" src="<?php echo 'upload/'.$row['image_art'] ?>" alt="">
                      </a>

                      <div class="news-info">
                        <span><?php echo $row['date_pub_art']; ?></span>
                        <a href="blogsante_voir.php?id=<?php echo $row['id']; ?>">
                          <h3><?php echo $row['titre_art']; ?></h3>
                        </a>
                        <p><?php echo(substr($row['contenu_art'],0,210).'...'); ?></p>
                        <div class="author">
                          <a href="blogsante_voir.php?id=<?php echo $row['id']; ?>">
                            <div class="post-btn">
                              <button class="btn btn-post float-right">En savoir plus</button>
                            </div>
                          </a>
                        </div>
                      </div>
                      
                    </div>

                    </div>
                    <?php
                        }
                      }
                      ?>

                   <div class="container">
                    <ul class="pagination">
                      <?php
                    for($i = 0; $i<$nb_page; $i++){
                      $k = $i * $nbliste;
                      $p = $i+1;

                      ?>
                      <li class="page-item"><a class="page-link"  href="blogsante.php?debut=<?php echo $k  ?>"><?php echo $p; ?></a></li>

                  <?php } ?>

                     </ul>
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