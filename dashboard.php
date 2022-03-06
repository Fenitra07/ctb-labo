<?php
session_start();
if(isset($_SESSION['user']))
{
require_once 'parameters.php';
include('connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:login.php");     }

$_SESSION['timeout']=time();

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

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="fa fa-house-user"></i> <em>Bienvenue dans votre espace personnel</em>
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

<?php 

require_once 'parameters.php';
include('connexion/connexion.php');

  $sql = "SELECT * FROM login";
// On stocke ensuite le tout dans la variable $result
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // Condition > 0, C'est à dire s'il existe des données dans la table
    // output data of each row
  // Stocker dans le variable $row les résultats
    while($row = $result->fetch_assoc()) {
    // var_dump($row);die();

 ?>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a href="traitement/change_password.php?id=<?php echo $row["id"] ?>" class="nav-link scrollto">Modifier mot de passe</a>
          </li>
        </ul>
      </nav><!-- .navbar -->
<?php 
// Fermer la boucle while
  }
?>
      <a href="traitement/session_destroy.php" class="appointment-btn scrollto"><i class="fa fa-power-off"></i><span class="d-none d-md-inline"> Se déconnecter</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

     <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Inner Page</h2> -->
          <ol>
            <li><a href="dashboard.php">Tableau de bord</a></li>
            <li>Gestion des articles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Articles ======= -->
      <div class="container">
  
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <section id="">
              <div class="container section-title">
                <h2>Gestion des articles</h2>
                <table id="table_id" class="display table-striped table table-bordered dt-responsive">
                    <thead>
                      <tr>
                        <th style="width:20%;">Date de publication</th>
                        <th style="width:60%;">Titre</th>
                        <th style="width:20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql = "SELECT id, titre_art, image_art, contenu_art, date_pub_art FROM article ORDER BY date_pub_art ASC";

                        $resultat = mysqli_query($conn, $sql);

                        if($resultat){
                          if(mysqli_num_rows($resultat)>0){
                            while ($row = mysqli_fetch_assoc($resultat)){

                      ?>

                      <tr data-id="<?php echo $row['id']; ?>">
                        <td><?php echo $row['date_pub_art']; ?></td>
                        <td><?php echo $row['titre_art']; ?></td>
                        <td>
                          <center>
                            <a href="traitement/article_delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('Veuillez confirmer votre action!')"><i class="fa fa-trash"></i></a>
                            <a href="traitement/article_creation.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
                          </center>
                        </td>
                      </tr>
                    </tbody>

                    <?php
                          }
                        }
                      }
                    ?>

                </table>
                <!-- Ajout -->
                <a href="traitement/article_creation.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un article</a>
                <!-- Ajout -->
              </div>
            </section>
          </div>
        </div>

      </div>


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

</body>

</html>

<?php  
}
}
else{
    header("location:login.php");
}

?>