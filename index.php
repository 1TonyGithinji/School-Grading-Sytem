<!DOCTYPE html>
<html>
<head>
	<title>SCHOOL GRADING SYSTEM</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
<div class="container" style="text-align: center;background-color: #FF5733">
		<form method="POST" action="schoolaction.php">
		First name:<br>
		<input type="text" name="firstname" required placeholder="First Name"><br>
		Middle Name:<br>
		<input type="text" name="middlename" required placeholder="Middle Name"><br>
		Surname:<br>
		<input type="text" name="surname" required placeholder="Surname/Last Name"><br>
		Email:<br>
		<input type="email" name="email" required placeholder="email"><br>
		Validate Email:<br>
		<input type="email" name="validateemail" required placeholder="email"><br>
		Password:<br>
		<input type="password" name="password" required placeholder="password"><br>
		Confirm Password:<br>
		<input type="password" name="confirmedpassword" required placeholder="password"><br>
		<button type="reset">Reset</button>
		<button type="Submit">Submit</button>
	</form>
</div>	
<footer style="text-align: center;">Copyright 2018<br>Coding School</footer>
</body>
</html>
