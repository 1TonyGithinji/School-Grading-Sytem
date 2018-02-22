<!DOCTYPE html>
<html>
<head>
	<title>GRADE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #0084b4; text-align: center;">
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
	<h1>Grading System</h1>
	<div class="container">
	<form method="GET">
		<span style="color: red">Maths:</span><br><input type="number" name="grade">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['grade'])){
			$marks=$_GET['grade'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>
	 
	<form method="GET">
		<span style="color: red">English:</span><br><input type="number" name="english">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['english'])){
			$marks=$_GET['english'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>
	
	<form method="GET">
		<span style="color: red">Physics:</span><br><input type="number" name="physics">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['physics'])){
			$marks=$_GET['physics'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>

	<form method="GET">
		<span style="color: red">Kiswahili:</span><br><input type="number" name="kiswahili">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['kiswahili'])){
			$marks=$_GET['kiswahili'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>
	 
	<form method="GET">
		<span style="color: red">Biology:</span><br><input type="number" name="biology">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['biology'])){
			$marks=$_GET['biology'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>
	 
	<form method="GET">
		<span style="color: red">Chemistry:</span><br><input type="number" name="chemistry">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['chemistry'])){
			$marks=$_GET['chemistry'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?>

	<form method="GET">
		<span style="color: red">Social Studies:</span><br><input type="number" name="socialstudies">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['socialstudies'])){
			$marks=$_GET['socialstudies'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "B";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "A";
		}else {
			echo "Input a Figure between 0-100.";
		}
		}
	 ?></div>
	 <footer style="text-align: center;">Copyright 2018<br>Coding School</footer>
</body>
</html>


