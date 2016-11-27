

  <?php
$arr=array();
 $arr=$_POST['notify'];
 $email=$_POST['email'];
 $cmd=$_POST['cmd'];
  
 $join=join(",",$arr);

include 'main_db.php';

$sql = "INSERT INTO user (email,sub,cmd)
VALUES ('$join','$email','$cmd')";
if (mysqli_query($conn,$sql)) {
header("location:adminhome.php");
	
}
else{
	

 echo "fail";

 }




      ?>