<?php
include'main_db.php';
include'session.php';
$name=$login_session;
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
	.form-signin{
		width: 300px;
		margin-left: 350px;
		margin-top: 100px;
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
				<li><a href="adminhome.php"><?php echo"$name";?></a></li>
            <li><a href="notify.php">Notify</a></li>
            <li> <a href="tag.php">Tag</a></li>
				<li><a href="logout.php">Logout</a></li>

				
			   
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

    <div class="container">


    <form class="form-horizontal" method="post" action="addevent.php">
  <div class="form-group">
    <label class="col-sm-2 control-label">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="eventname" id="eventname" placeholder="name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Event time</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="etime" id="etime" placeholder="time" required>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Event Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="edate" id="edate" placeholder="Date" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Place</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="eplace" id="eplace" placeholder="place" required>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Organised By</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="org" id="organised by" placeholder="organised by" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tag</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tag" id="tag" placeholder="Tag" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">To contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact" id="contact" placeholder="name" required>
    </div>
  </div>
  <div class="form-group">
   <label class="col-sm-2 control-label">Price</label>
   <div class="col-sm-10">
 <div class="radio">
  <label><input type="radio" name="paid" value="0">Free</label>
</div>
<div class="radio">
  <label><input type="radio" name="paid" value="1" >Not free</label>
</div>
</div>
</div>

  
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary"  id="addshow" >Add Event</button>
    </div>
  </div>
</form>
    </div>
    </body>
    </html>