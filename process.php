<?php
if(isset($_POST)&&!empty($_POST)){
 $email=$_POST['email'];
 $password=$_POST['password'];
/*$email=stripcslashes($email);
$password=stripcslashes($password);
$email=mysql_real_escape_string($email);
$password=mysql_real_escape_string($password);*/

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'mybee');
$result=mysqli_query($con,"select * from registration where email='$email' And password='$password'")
        or die("failed to query database".mysqli_error($con));

$row=mysqli_fetch_array($result);
if ($row['email']==$email && $row['password']==$password) {
    session_start();
  $_SESSION['id']=$row['id'];
  $_SESSION['lastname']=$row['lastname'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['password'] = $row['password'];
  header('Location:blank.php?id='.$_SESSION['id']);
  #echo "login success ! Welcome";
}else {
  echo "failed to login";
}
}

?>
