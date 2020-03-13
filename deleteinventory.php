<?php

// This is a sample code in case you wish to check the username from a mysql db table
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}


if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from reserve where id='$id'";
 mysqli_query($conn,"delete from customer where id='$id'");
 mysqli_query($conn, $sql);
}
mysqli_close($conn);
?>