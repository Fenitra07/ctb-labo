<?php
session_start();
if(isset($_SESSION['user']))
{
  session_destroy();
}

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

</head>

<body>
<?php
  if (isset($_POST['identifiant'])&& isset($_POST['motdepasse'])) {
    $login = $_POST['identifiant'];
    $mdp = $_POST['motdepasse'];

  require_once '../parameters.php';
  include('../connexion/connexion.php');



  $sql = "SELECT * FROM login WHERE login_identifiant = '$login' AND login_password='$mdp'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if ($row) {
    $_SESSION['user'] = '$login';
    $_SESSION['password'] = '$mdp';
    header("location:../dashboard.php");
  }else{
    echo "<script type='text/javascript'>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Identifiant ou mot de passe incorrect'
        });
        var btnSwalls = document.getElementsByClassName('swal2-confirm');
        for(var i = 0; i<btnSwalls.length; i++)
        {
          btnSwalls[i].addEventListener('click', function(e){
            e.preventDefault();
            window.location = '../login.php';
            })
        }
      </script>";
  }
  }
  else
  {
    header("location:../login.php");
  }
  mysqli_close($conn);
 ?>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

