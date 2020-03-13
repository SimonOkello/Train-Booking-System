<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}

// include('config/db.php');
session_start();
if (isset($_POST['login'])) {
$username=stripslashes($_REQUEST['username']);
$username=mysqli_real_escape_string($conn, $username);
$password=stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $password);
    
    $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_num_rows($result);
            if ($row==1) {            
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$username;
        header("Location:dashboard.php");


      }else{
      echo "<script type='text/javascript'>alert('Username/Password incorrect');window.location.href='admin_login.php'</script>";
    }
}
mysqli_close($conn);
?>