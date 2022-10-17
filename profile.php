 <?php
session_start();
$bdd= new PDO('mysql:host=127.0.0.1;dbname=mybee','root','');
if (isset($_SESSION['id']) AND $_SESSION['id']>0) {
  $getid=$_SESSION['id'];
  $requser=$bdd->prepare('SELECT * FROM registration WHERE id=?');
  $requser->execute(array($getid));
  $userinfo=$requser->fetch();
 
   if(isset($_POST['nom']) AND !empty($_POST['nom']) AND $_POST['nom'] != $user['nom']) {
      $newpseudo = htmlspecialchars($_POST['nom']);
      $insertpseudo = $bdd->prepare("UPDATE registration SET firstname = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: blank.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['prenom']) AND !empty($_POST['prenom']) AND $_POST['prenom'] != $user['prenom']) {
      $newname = htmlspecialchars($_POST['prenom']);
      $insertname = $bdd->prepare("UPDATE registration SET lastname= ? WHERE id = ?");
      $insertname->execute(array($newname, $_SESSION['id']));
      header('Location: blank.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] != $user['email']) {
      $newmail = htmlspecialchars($_POST['email']);
      $insertmail = $bdd->prepare("UPDATE registration SET email = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: blank.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['numero']) AND !empty($_POST['numero']) AND $_POST['numero'] != $user['numero']) {
      $newnum = htmlspecialchars($_POST['prenom']);
      $insertnum = $bdd->prepare("UPDATE registration SET phonenumber = ? WHERE id = ?");
      $insertnum->execute(array($newnum, $_SESSION['id']));
      header('Location: blank.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['password']) AND !empty($_POST['password']) AND $_POST['password'] != $user['password']) {
      $newpass = htmlspecialchars($_POST['password']);
      $insertpass = $bdd->prepare("UPDATE registration SET password = ? WHERE id = ?");
      $insertpass->execute(array($newpass, $_SESSION['id']));
      header('Location: blank.php?id='.$_SESSION['id']);
   }
   
  
?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href="beelogo.png" rel="icon">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet"> 
  <title>Mon profil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
#profile_pic{
	display: block;
	border-radius: 50%;
	margin: 10px auto;
	width: 200px;
	border: 2px solid rgb(24, 26, 31);

}
#box{
	width: 380px;
	margin: 0 auto;
	margin-top: 10px;
	border: 3px solid rgb(24, 26, 31);
	border-radius: 5px;
	text-align: center;
	padding: 20px;
	background-color:#fff !important;
}

input[type=text], select {
  align-content: center;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=button] {
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


 
</style>
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
<div id="box">
		<img id="profile_pic" src="apiculteur.png">
  <form method="POST" action="" enctype="multipart/form-data">
    <label for=""> Votre Nom : </label>
    <input type="text" name="nom" placeholder="nom" value="<?php echo $userinfo['firstname'] ?>"/>    <br>

    <label for="">Votre Prenom :</label>
    <input type="text" name="prenom" placeholder="prenom" value="<?php echo $userinfo['lastname'] ?>"/>
    <br>

    <label for="">Votre Email :</label>
    <input type="text" name="email" placeholder="email" value="<?php echo $userinfo['email'] ?>"/>
    <br>

    <label for="">Votre Numero :</label>
    <input type="text" name="Numero" placeholder="numero" value="<?php echo $userinfo['phonenumber'] ?>"/>
    <br>
    
    <label for="">Votre Mot de passe :</label>
    <input type="text" name="password" placeholder="password" value="<?php echo $userinfo['password'] ?>"/>
    <br>
   <button class="btn btn-dark" name="modifier" >Modifier votre profil</button>
  </form>
  <?php
     if (isset($erreur)) {
       echo '<font color="red" '.$erreur;
     }
      ?>
</div>
<?php
}
?>
</body>
</html>
