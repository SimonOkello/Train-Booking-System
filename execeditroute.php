<?php

	
	
	if (isset($_POST['edit'])){
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "railway";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$conn){
			die ('Could not connect: '.mysqli_error());
		}
	$roomid = $_POST['id'];
	$name=mysqli_real_escape_string($conn, $_POST['name']);
	$from=mysqli_real_escape_string($conn,$_POST['from']);
	$to=mysqli_real_escape_string($conn,$_POST['to']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	$numseats=mysqli_real_escape_string($conn,$_POST['numseats']);
	$time=mysqli_real_escape_string($conn,$_POST['time']);
	mysqli_query($conn, "UPDATE route SET `name`='$name', `price`='$price', `from`='$from',`to`='$to', `numseats`='$numseats', `time`='$time' WHERE id='$roomid'");
	header("location: trains.php");
	}
?>