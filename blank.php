<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['lastname']))
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location:premiere.html');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="beelogo.png" rel="icon">
  <title>Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="beelogo.png">
        </div>
        <div class="sidebar-brand-text mx-3">MY BEE</div>
      </a>
      <hr class="sidebar-divider my-0">
     
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
     Mon profil
      </div>
      
      
      <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="far fa-fw fa-calendar"></i>
          <span> Modifier profil</span>
        </a>
      </li>
     
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sendmessage.php">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Message d'alerte</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Gestion ruches
      </div>
      <li class="nav-item ">
        <a class="nav-link" href="view.php">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Mes Ruches  </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Ajouter une ruche</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pdf.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>telecharger liste des Ruches</span>
        </a>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item dropdown no-arrow mx-1">
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="apiculteur.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo ' Apiculteur ', $_SESSION['lastname'];?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Consulter Votre Profil
                </a>
                <div class="dropdown-divider"></div> 
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Deconnexion
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
        
            <h1 align="center" style="padding:30px 30px 30px 30px" class="h3 mb-0 text-gray-800">Votre tableau de bord</h1>
         

          <div class="text-center">
            <img src="apiculteur.png" style="max-height:200px;">
            <h4 class="pt-3">Bienvenue <b><?php echo ' Apiculteur ', $_SESSION['lastname'];?></b>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>etes vous sur de quitter?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">annuler</button>
                  <a href="logout.php" class="btn btn-primary">Deconnexion</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - Developpé par
              <b><a href="about.html" target="_blank">My bee</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>