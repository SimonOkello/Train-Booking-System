
<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}

if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];
    
    $query = "SELECT * FROM user WHERE username='$username' AND password='".md5($password)."'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            if (!empty($row)) {            
            
            $_SESSION['username']=$username;
        header("Location:home.php");
        exit();


      }else{
      echo "<script type='text/javascript'>alert('Username/Password incorrect');window.location.href='index.php'</script>";
    }
}
mysqli_close($conn);
?>