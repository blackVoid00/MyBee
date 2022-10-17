<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href="logobee.png" rel="icon">
    <title>Loginform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="loginstyle.css">
  </head>
  
  <body>
   
  <div class="logo">
  <img src="beelogo.png">
</div>

<h1>MY BEE</h1>
<p>helps you connect with your hive for safer bees</p>



<div class="form-bg">
  <div class="container">
  
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="form-container">
          <div class="form-icon">
        
            <span class="signup">
              <a href="registrationform.php"> Vous n'etes pas encore un membre? inscrivez-vous</a></span>
              <img class="pic" style="width:200px;height:auto" src="beelogo.png"></img>
          </div>
          <form class="form-horizontal" action="process.php" method="POST">
               <h3 class="title">Sign in</h3>
               <div class="form-group">
                 <span class="input-icon">
                   <i class="fa fa-envelope"></i>
                 </span>
                 <input class="form-control" type="email" name="email" placeholder="email">
                 </div>
                 <div class="form-group">
                   <span class="input-icon">
                     <i class="fa fa-lock"></i>
                   </span>
                   <input class="form-control" type="password" name="password" placeholder="password">
                   </div>
                   <button class="btn signin" name="formconnexion">connexion</button>
          </form>
        </div>
      </div>
    </div>

  </div>

</div>

  </body>
</html>
