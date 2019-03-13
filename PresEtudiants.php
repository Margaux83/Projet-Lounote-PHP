<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LouNote</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="resources/sb-admin.css" rel="stylesheet">

</head>

<!-- Menu Début -->
  <?php include "app/header.php"?>
  <!-- Menu Fin -->

<body class="bg-dark">


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Absence d'un étudiant</div>
      <div class="card-body">
        <form action="Db/dbPresEtudiant.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="form-group">
                  <div class="form-label-group">
                    <h6>Présence élève :</h6>
                    <select class="form-control" name="pres" id="pres" >
                        <option value="" ></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>

                  </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="mail" id="mail" name="mail" class="form-control" placeholder="Mail" required="required" autofocus="autofocus">
              <label for="mail">Adresse email :</label>
            </div>
          </div>

          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Modifier">
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
