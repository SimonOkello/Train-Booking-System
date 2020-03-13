<?php require('reg_header.php');
 ?>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}

if (isset($_POST['register'])) {
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password =mysqli_real_escape_string($conn, $_POST['password']);
$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

$sql = "INSERT INTO user (firstname, lastname, username, password, email, dob) VALUES ('$firstname','$lastname','$username', md5('$password'),'$email','$dob')";
$query = mysqli_query($conn, $sql);
if($query){
    echo "<script type='text/javascript'>alert('Registration Done'); window.location.href='index.php'</script>";
}else{
    echo "<script type='text/javascript'>alert('Failed!'); window.location.href='register.php'</script>";
}
}
mysqli_close($conn);
?>

<form class="form" method="post" action="register.php" style="margin-top:50px">
    <header class="form__header">
        <h1 class="form__title"><span>Register</span> your account</h1>
    </header>
    <fieldset class="form__body">
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">Username or email</label>
                <input type="text" name="username" class="form__field" />
            </div>
            <div class="form__item">
                <label class="form__label">Password</label>
                <input type="password" name="password" class="form__field" />
            </div>
        </div>
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">First name</label>
                <input type="text" name="firstname" class="form__field" />
            </div>
            <div class="form__item">
                <label class="form__label">Last name</label>
                <input type="text" name="lastname" class="form__field" />
            </div>
            </div>
            <div class="form__row">
            <div class="form__item">
                <label class="form__label">Email</label>
                <input type="text" name="email" class="form__field" />
            </div>
        
        
            <div class="form__item">
                <label class="form__label">Date of birth:</label>
                <input type="text" name="dob" class="form__field form__field_calendar datepickerCool">
            </div>
        </div>
        <div class="form__row">
            <button type="submit" name="register" class="btn btn_form">Register</button>
        </div>
    </fieldset>
</form>

<?php require('footer.php'); ?>
