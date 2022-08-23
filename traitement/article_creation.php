<?php
session_start();
if(isset($_SESSION['user']))
{
require_once '../parameters.php';
include('../connexion/connexion.php');

// 10 mins in seconds
$inactive = 30000;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:../login.php");     }

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
  <link href="../assets/img/favicon-sante.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

<!-- SweatAlert -->
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

<!-- ckeditors -->
  <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>


</head>

<body>

    <!-- CREATION ARTICLE -->
    <div class="container pt-5">
      <div class="row article_box">
          <div class="col-md-12">
            <center>
              <div class="box_effect section-title">
                <h2 class="">
                  Formulaire de création d'article
                </h2>

                <form method="post" action="article_insert.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="titre" placeholder="Titre de l'article" required>
                    </div>
                    <div class="form-group">
                        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                        <input type="file" class="form-control pb-2" name="file">
                    </div>
                    <div class="form-group">
                        
                      <textarea class="form-control" rows="5" name="contenu" placeholder="Rédigez votre article ici..." required></textarea>

                    </div>
                    <div class="form-group">
                        <p style="text-align: left;">Date de publication</p>
                        <input class="form-control" type="date" name="date" required>
                    </div>
                    <div>
                      <input type="submit" class="btn btn-primary" value="Ajouter un article">
                      <a href="../dashboard.php" class="btn btn-danger">Annuler</a>
                    </div>
                </form>
              </div>
            </center>
          </div>
      </div>
    </div>
    <!-- CREATION ARTICLE END-->



  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

<?php
}
else{
    header("location:../login.php");
}

?>