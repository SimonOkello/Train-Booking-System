<?php require('reg_header.php');
include('config/db.php');
 ?>


<?php
if (isset($_POST['register'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$sql = "INSERT INTO user (firstname, lastname, username, password, email,dob) VALUES ('$firstname','$lastname','$username','$password','$email','$dob')";
$query = mysql_query($sql)or die(mysql_error());
if($query){
    echo "<script type='text/javascript'>alert('Registration Done'); window.location.href='index.php'</script>";
}else{
    echo "<script type='text/javascript'>alert('Failed!'); window.location.href='register.php'</script>";
}
}
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
