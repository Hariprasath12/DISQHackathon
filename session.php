<?php
session_start();
include'main_db.php';
$check=$_SESSION['login_email'];
$session=mysqli_query($conn,"SELECT firstname FROM admin WHERE email='$check'");
$row=mysqli_fetch_array($session);
$login_session=$row['firstname'];
// $_SESSION['firstname']=$login_session;

if(!isset($login_session))
{
header("Location:login.html");
}


?>