<?php
session_start();
$ename=$_POST["eventname"];
$time=$_POST["etime"];
$date=$_POST["edate"];
$org=$_POST["org"];
$tag=$_POST["tag"];
$place=$_POST["eplace"];
$contact=$_POST["contact"];
$paid=$_POST["paid"];


include 'main_db.php';




$sql = "INSERT INTO events (eventname,event_time,event_date,organisedby,place,tag,contact,price)
VALUES ('$ename','$time','$date','$org','$place','$tag','$contact','$paid')";
if (mysqli_query($conn,$sql)) {
header("location:adminhome.php");
	
}
else{
	

 echo "fail";

 }




?>