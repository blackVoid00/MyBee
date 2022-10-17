<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href="beelogo.png" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>hello</title>
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet"> 
</head>
<body class="bg-dark">
    <body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="beelogo.png">
        </div>
        <div class="sidebar-brand-text mx-3">MY BEE</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="blank.php">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Retour au Dashboard</span></a>
      </li>
      
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
    <!-- topbar-->
    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
         
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Ajouter Ruche </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="nom_ruche" placeholder=" Entrer nom" class="form-control mb-2" required>
                                <input type="text" name="etat_ruche" placeholder=" Entrer etat" class="form-control mb-2" required>
                                <input type="text" name="position_ruche" placeholder=" Entrer position" class="form-control mb-2" required>
                               
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save"> Enregistrer </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>