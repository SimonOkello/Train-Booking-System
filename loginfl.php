<?php
session_start();
include('config/db.php');
if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];
    
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysql_query($query)or die(mysql_error());
            $row = mysql_fetch_array($result);
            if (!empty($row)) {            
            
            $_SESSION['username']=$username;
        header("Location:home.php");
        exit();


      }else{
      echo "<script type='text/javascript'>alert('Username/Password incorrect');window.location.href='index.php'</script>";
    }
}

?>