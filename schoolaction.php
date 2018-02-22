<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #0084b4;font-size: 50px">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>School Grading System</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="motto.html">Motto</a></li>
      <li><a href="mission.html">Mission</a></li>
      <li><a href="vision.html">Vision</a></li>
    </ul>
  </div>
</nav>
	<div class="jumbotron" style="text-align: center;">
		Welcome
		<?php echo $_POST['firstname'];?> 
		<?php echo $_POST['middlename'];?>
		<?php echo $_POST['surname'];?><br><br>
		<?php 
        $ri=$_POST['password'];
        $a=$_POST['confirmedpassword'];
        if ($ri===$a) {
          # code...
          echo "Correct Password";
        } else {
          # code...
          echo "Password Mismatch/Wrong Password";
        }
      	?><br>
      	<a href="thegrade.php"><b>Press to proceed to the grading system</b></a><br>
      	</div>
   <footer style="text-align: center;">Copyright 2018<br>Coding School</footer>   	
</body>
</html>