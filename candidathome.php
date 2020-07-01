<?php
if(session_status() != PHP_SESSION_ACTIVE) {
session_start();
}
if ($_SESSION["utilisateur"]) {
    if ($_SESSION['role'] == "candidat") {
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>mon profil - E-recrutement</title>

  <!-- Custom fonts for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src='vendor/bootstrap/js/jquery-3.2.1.min.js'></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mon profil</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="candidathome.php">
          <i class="fas fa-home"></i>
          <span>Accueil</span></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="candidathome.php?p=infos">
          <i class="fas fa-user-tie"></i>

        <span>Informations Personnelles</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="candidathome.php?p=bac">
        <i class="fas fa-user-graduate"></i>
        <span>Diplomes</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="candidathome.php?p=these">
        <i class="fas fa-book-reader"></i>
        <span>Theses et Publications</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="candidathome.php?p=experience">
        <i class="fas fa-book"></i>
        <span>Experiences Pédagogiques</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="candidathome.php?p=postulation">
        <i class="fas fa-briefcase"></i>
        <span>postulation aux concours</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" >
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <a href="candidathome.php?p=postulation">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
                </a>
                
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">2+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="candidathome.php?p=postulation">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-book text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php
                              $d=strtotime("today");
                               echo date("Y-m-d", $d) ;?></div>
                    <span class="font-weight-bold">Consulter les nouveaux concours !</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="candidathome.php?p=infos">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-book-reader text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php
                              $d=strtotime("yesterday");
                               echo date("Y-m-d", $d) ;?></div>
                    <span class="font-weight-bold">Completer votre profile avec les informations nécessaires !</span>
                  </div>
                </a>


              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Messages
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="">Bienvenue dans votre espace e-recrutement, veuillez completer votre dossier afin de postuler aux concours !</div>
                    <div class="small text-gray-500">Admin · 58m</div>
                  </div>
                </a>




              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                        if (isset($_SESSION['nom'])) {
                                            echo $_SESSION['nom'];
                                        }
                                    ?></span>
                <img class="img-profile rounded-circle" src="img/candidats/<?php if (isset($_SESSION['photo'])) {
                                        echo $_SESSION['photo'];
                                        } else
                                            echo 'no-photo.jpg'
                                        ?>" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                <?php
                    if( isset($_GET['p']) && $_GET['p'] != ""){
                        if($_GET['p']=="infos"){
                            include_once './pages/candidat/infos.php';
                        }elseif ($_GET['p']=="diplome"){
                            include_once './pages/candidat/diplome.php';
                        }elseif ($_GET['p']=='these') {
                          include_once './pages/candidat/these.php';
                        }elseif ($_GET['p']=='postulation') {
                          include_once './pages/candidat/postulation.php';
                        }elseif ($_GET['p']=='publication') {
                          include_once './pages/candidat/publication.php';
                        }elseif ($_GET['p']=='experience') {
                          include_once './pages/candidat/experience.php';
                        }
                        elseif ($_GET['p']=='bac') {
                          include_once './pages/candidat/bac.php';
                        }
                        else{
                          echo("<script>location.href = './pages/404.html';</script>");
                        }

                    }  else {
                        include_once './pages/candidat/accueil.php';
                      }

                ?>
            </div>

        </main>
        <!-- page-content" -->
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; E-recrutement 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/bootstrap/js/popper.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




  <!-- Core plugin JavaScript-->
  <script src="vendor/datatables/datatables.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
} else {
        include_once './pages/404.html';
    }
} else {
    header('Location:./login.php');
}
