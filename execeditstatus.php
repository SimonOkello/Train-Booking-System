<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "railway";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn){
		die ('Could not connect: '.mysqli_error());
	}
	
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysqli_query($conn,"UPDATE customer SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
	mysqli_close($conn);
?>