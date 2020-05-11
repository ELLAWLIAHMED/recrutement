<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inscription</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/register.css">
</head>

<body class="" id='background'>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!--<div class="col-lg-5 d-none d-lg-block" id='image'></div>-->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Page d'inscription</h1>
              </div>
              <form class="user" action="login.php" id='register'>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="FirstName" name='FirstName' placeholder="Prénom" required>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="LastName" name="LastName" placeholder="Nom" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="email" class="form-control form-control-user" id="Email" placeholder="Adresse email" required>
                  </div>
                  <div class='col-sm-6'>
                  <input type="text" class="form-control form-control-user" id="CIN" placeholder="CIN" required>
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="Password1" placeholder="Mot de Passe" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="Password" placeholder="Répeter le mote de passe" required>
                  </div>

                </div>
                 <div class="text-center">
                   <button class="btn btn-primary btn-user btn-bloc col-sm-6" type="submit" id='btn'>
                     <b>Inscription</b>
                   </button>
                 </div>
               </form>
                <hr>

              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Dèja inscrit? connectez-vous</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
<script src='script/candidat/register.js'>

</script>
</body>

</html>
