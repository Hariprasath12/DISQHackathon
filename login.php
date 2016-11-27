<?php
session_start();
$username=$_POST["email"];
$password=$_POST["pass"];
include 'main_db.php';
$cmm="select email from admin where password='$password'and email='$username'";
$result=mysqli_query($conn,$cmm);
$res=mysqli_num_rows($result);

if($res!=0){

 $_SESSION['login_email']=$username;
 header("Location:Adminhome.php");
}
else{
  header("Location:login.html");
}
?>