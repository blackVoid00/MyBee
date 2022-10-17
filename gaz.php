<?php
// On prolonge la session
 session_start();
 // On teste si la variable de session existe et contient une valeur
 if(empty($_SESSION['lastname']))
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
   header('Location:login2.php');
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
  <title>Charts</title>
  <link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Quicksand:wght@300&family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
  <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        

  <style>
  #containerdiv{
        margin: auto;
        width: 50%;
        display: block;
        padding: 70px;
           
        }
    p{
float:left;
font-family: "Quicksand", sans-serif;
display: block;
margin-top: 1em;
margin-bottom: 1em;
margin-left: 0;
margin-right: 0;
 }
  
    </style>
  </style>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="about.html">
      <div class="sidebar-brand-icon">
          <img src="beelogo.png">
        </div>
        <div class="sidebar-brand-text mx-3">MY BEE</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="view.php">
          <i class="fas fa-fw fa-tasks"></i>
          
          <span>Liste des ruches</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Mes graphes
      </div>
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fa fa-temperature-high"></i>
          <span>Temperature</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="gps.php">
          <i class="fa fa-search-location"></i>
          <span>Localisation</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="humidity.php">
          <i class="fa fa-level-up-alt"></i>
          <span>Humidité</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="niveaudemiel.php">
          <i class="fa fa-chart-line"></i>
          <span>Niveau de miel</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="luminosité.php">
          <i class="fa fa-lightbulb"></i>
          <span>Luminosité</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-chart-bar"></i>
          <span>Gaz</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          
        </div>
      </li>
      
      
      </li>
      
      
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
     
        </nav>
      
        <div class="container-fluid" id="container-wrapper">
        
             
         <h2 align="center" style="font-weight: bold">Graphe de Gaz</h2>
         <div >
            <p > Time: <span id="time"></span><br/>  Level: <span id="level"></span><br /></p>
            
            </div>
            <div id="containerdiv">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1655736/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>  
             
       </div>
     
        <script >
 var cpt=0; 
        var tab=[];
        var tab2=[];
      const api_url = 'https://api.thingspeak.com/channels/1655736/fields/5.json?results';
      async function getLevel() {
        const response = await fetch(api_url);
        const data = await response.json();
  

document.getElementById('level').textContent = data['feeds'][cpt]['field5']
document.getElementById('time').textContent = data['feeds'][cpt]['created_at'].split('T')
cpt++;
      }
    
      setInterval(getLevel, 1000);
                </script>
                
          <div class="row">
            <div class="col-lg-12">
            </div>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>est vous sur ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  
  <!-- Page level custom scripts -->
 
</body>

</html>