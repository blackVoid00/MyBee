<?php
require_once('config.php');
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
    <title>registrationform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="loginstyle.css">
  </head>
  <body>
    <div>
      <?php

if(isset($_POST)&&!empty($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];

		$sql = "INSERT INTO registration (firstname, lastname, email, phonenumber,password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email,$phonenumber,$password]);
		if($result){
      $message='Successfully Saved';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			#echo 'Successfully saved.';
		}else{
      $message='Erreur';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
			#echo 'There were erros while saving the data.';
		}
}else{
	echo '';
} ?>
    </div>
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
              <a href="login2.php"> vous etes deja un membre ?clickez ici</a></span>
              <img class="pic" style="width:200px;height:auto" src="beelogo.png"></img>
          </div>
          <form class="form-horizontal" action="registrationform.php" method="post">
               <h3 class="title">Sign Up</h3>
               <div class="form-group">
                 <span class="input-icon">
                   <i class="fa fa-envelope"></i>
                 </span>
                 <input class="form-control" type="text" name="firstname" required placeholder="prenom">
                 </div>
                 <div class="form-group">
                   <span class="input-icon">
                     <i class="fa fa-envelope"></i>
                   </span>
                   <input class="form-control" type="text" name="lastname" required placeholder="nom">
                   </div>
                 <div class="form-group">
                   <span class="input-icon">
                     <i class="fa fa-lock"></i>
                   </span>
                   <input class="form-control" type="email" name="email" required placeholder="email">
                   </div>
                   <div class="form-group">
                     <span class="input-icon">
                       <i class="fa fa-envelope"></i>
                     </span>
                     <input class="form-control" type="text" name="phonenumber" required placeholder="phonenumber">
                     </div>
                     <div class="form-group">
                       <span class="input-icon">
                         <i class="fa fa-envelope"></i>
                       </span>
                       <input class="form-control" type="password" name="password" required placeholder="password">
                       </div>
                   <button class="btn signin" id="register" name="create">s'inscrire</button>
          </form>
        </div>
      </div>
    </div>

  </div>

</div>
  </body>
</html>
