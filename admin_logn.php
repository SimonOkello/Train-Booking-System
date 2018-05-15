<?php
session_start();
include('config/db.php');
if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];
    
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = mysql_query($query)or die(mysql_error());
            $row = mysql_fetch_array($result);
            if ($row) {            
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$username;
        header("Location:dashboard.php");


      }else{
      echo "<script type='text/javascript'>alert('Username/Password incorrect');window.location.href='admin_login.php'</script>";
    }
}

?>