<?php
	include('config/db.php');
	$roomid = $_POST['id'];
	$type=$_POST['type'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$price=$_POST['price'];
	$seat=$_POST['seat'];
	$time=$_POST['time'];
	mysql_query("UPDATE route SET `type`='$type', `price`='$price', `from`='$from',`to`='$to', `numseats`='$seat', `time`='$time' WHERE id='$roomid'");
	header("location: trains.php");

?>