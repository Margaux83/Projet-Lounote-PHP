<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Direction</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="resources/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Direction</a>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <?php include "app/header.php"?>

  </ul>

</nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Direction</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="AjoutDirection.php">Ajouter</a>
            <a class="dropdown-item" href="ModifDirection.php">Modifier</a>
            <a class="dropdown-item" href="SuppDirection.php">Supprimer</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Professeurs</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="AjoutProfesseur.php">Ajouter</a>
            <a class="dropdown-item" href="ModifProfesseur.php">Modifier</a>
            <a class="dropdown-item" href="SuppProfesseur.php">Supprimer</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Elèves</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="AjoutEtudiant.php">Ajouter</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Abscence professeurs</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="noterabsenceprof.php">Noter absence</a>
            <a class="dropdown-item" href="voirprofabs.php">Voir abscences</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Abscence/retard élève</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="voireleveabs.php">Voir abscences</a>
            <a class="dropdown-item" href="voireleveretard.php">Voir retards</a>


          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="voireleve.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Liste des étudiants</span></a>
        </li>
      </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="row">

        </div>


        <!-- Icon Cards-->

          <?php
          if(isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
          }
          elseif(isset($_COOKIE['direction'])) {
          include("app/connexionPDO.php");

          $id = $_COOKIE['direction'];
          $req = $db->query ('SELECT * FROM direction WHERE Nom="'.$id.'"'); //Requête SQL permettant de récupéré les données correspand à la valeur contenu dans le cookie de direction

          $donnees= $req->fetch(); ?>


                  <h5>Bienvenue</h5>
                  <p>Nom : <?php echo $donnees['Nom']; ?></p> <!---On affiche les données récupérées-->
                  <p>Prenom : <?php echo $donnees['Prenom']; ?></p>
                  <p>Email : <?php echo $donnees['Mail']; }?></p>




            </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Lycée Le Corbusier 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>