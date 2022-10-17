<?php

    require_once('./config/dbconfig.php');
    $db = new operations();
    $result=$db->view_record();
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
    
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
    <title>liste des Ruches</title>
</head>
<body class="bg-dark">

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

        <div class="row">
            <div class="col">
                <div class="">
                    <div class="">
                        <h2 class="text-center text-dark"> Liste des Ruches </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message();
                              $db->display_message();
                        ?>
                        <table class="table table-bordered ">
                            <tr>
                                <td style="width: 10%"> id </td>
                                <td style="width: 10%"> nom ruche </td>
                                <td style="width: 20%"> etat ruche </td>
                                <td style="width: 20%"> position ruche </td>
                          
                                <td style="width: 20" colspan="2">Operations</td>
                                <td style="width: 20" colspan="2">Charts</td>
                            </tr>
                            <tr>
                                <?php
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['id_ruche'] ?></td>
                                    <td><?php echo $data['nom_ruche'] ?></td>
                                    <td><?php echo $data['etat_ruche'] ?></td>
                                    <td><?php echo $data['position_ruche'] ?></td>
                        
                                    
                                    <td><a href="edit.php?U_ID=<?php echo $data['id_ruche'] ?>" class="btn btn-success">Modifier</a></td>
                                    <td><a href="del.php?D_ID=<?php echo $data['id_ruche'] ?>" class="btn btn-danger">Supprimer</a></td>
                                    <td><a href="charts.php" class="btn btn-success">Visualiser l'etat</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
