<?php
session_start();
$ename=$_POST["eventname"];
$time=$_POST["etime"];
$date=$_POST["edate"];
$org=$_POST["org"];
$tag=$_POST["tag"];
$contact=$_POST["contact"];
$paid=$_POST["paid"];
echo $ename;
echo $paid;
include 'main_db.php';
$cmm="insert into events(eventname,event_time,event_date,organisedby,place,tag,contact,price)values('$ename','$time','$date',$'org','$tag','$contact','$paid')";
if (mysqli_query($conn,$cmm)) {
// header("location:loginmain.html");
	echo "suceess";
}
else{
	
echo "fail";
// header("location:adminhome.php");

 }




?>