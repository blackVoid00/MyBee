<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href="beelogo.png" rel="icon">
    <title>Envoi de message</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark">

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
        <div class="col-md-6">
          <form action="send_mail.php" method="post">
            <div class="form-group">
              <label for="">Destinataire</label>
              <input type="text" name="mail_to" class="form-control" placeholder="Entrer l'email">
              </div>
              <div class="form-group">
                <label for="">Sujet</label>
                <input type="text" name="mail_sub" class="form-control" placeholder="Entrer le sujet
                ">
                </div>
              <div class="">
                <label for="">Message d'alerte</label>
              <textarea name="mail_msg"  class="form-control" rows="5" cols="30"></textarea>
              </div>
                <button type="submit" class="btn btn-primary">Envoyer Message</button>
          </form>

        </div>

      </div>

    </div>
  </body>
</html>
