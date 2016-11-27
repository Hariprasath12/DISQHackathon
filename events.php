

<?php

session_start();
include 'main_db.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
<style type="text/css" >
	
table tr{
height: 60px;


}
</style>
  </head>

  <body>
   <nav class="navbar navbar-default navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Events</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			
			
			<ul class="nav navbar-nav navbar-right">
			 <li><a href="events.php">Event list</a></li>
				<li><a href="login.html">Login</a></li>
				<li> <a href="tag.php">Tag</a></li>
				 <li><a href="notify.php">Notify</a></li>


				
			   
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>








    <div class="container">
    <div  class="table-responsive">
<table id="displaygetmovie" class='table table-hover'>
<tr><th>S no</th><th>Name</th><th>Time</th><th>Date</th><th>organisedby</th><th>place</th><th>Tag</th><th>Contact</th><th>Price</th></tr>
<form>
<?php


$id=1;
$sql = "SELECT * from events";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
 echo "<tr><td>" . $id. "</td><td>" . $row["eventname"]. "</td><td>" . $row["event_time"]. " </td><td>" . $row["event_date"]. "</td><td>".$row["organisedby"]."</td><td>".$row["place"]."</td><td>".$row["tag"]."</td><td>".$row["contact"]."</td><td>".$row["price"] ;




$id++;

    }
} else {
    echo "results";
}

?>
</table>
</div>
</div>

</body>
</html>
