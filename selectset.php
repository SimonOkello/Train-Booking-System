
<?php
require ('test_header.php');
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}

$busnum=$_POST['route'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$result = mysqli_query($conn, "SELECT * FROM route WHERE id='$busnum'");
while($row = mysqli_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysqli_query($conn, "SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysqli_fetch_array($query))
							  {
							  $inogbuwin=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>
<?php
if ($avail < $qty){
  echo "<script type='text/javascript'>alert('Quantity reserve excede the available seat of the train'); window.location.href='home.php'</script>";

}
else if($avail > 0)
{
?>


<form class="form" method="post" action="save.php" style="margin-top:50px">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<header class="form__header">
        <h1 class="form__title"><span>Enter</span> your Details</h1>
    </header>
    <fieldset class="form__body">
        <div class="form__row">
            <div class="form__item">
<label class="form__label">Seat Number
<span class="small">Auto Generated <a rel="facebox" href="seatlocation.php?id=<?php echo $busnum; ?>">view seat</a></span>
</label>
<input type="text" class="form__field" name="setnum" value="
<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>
" id="name" readonly/><br>
</div>
</div>
  <div class="form__row">

   <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "railway";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn){
            die ('Could not connect: '.mysqli_error());
        }

    $username=$_SESSION['username'];

    $result = mysqli_query($conn,"SELECT * FROM user where username='$username'");
        while($row = mysqli_fetch_array($result))
            {
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $email=$row['email'];
                
            }
mysqli_close($conn);
?>
            <div class="form__item">
                <label class="form__label">FIRSTNAME</label>
                <input type="text" name="fname" class="form__field" value='<?php echo $firstname; ?>' />
            </div>
            <div class="form__item">
                <label class="form__label">LASTNAME</label>
                <input type="text" name="lname" class="form__field" value='<?php echo $lastname; ?>' />
            </div>
        </div>
       
            <div class="form__item">
                <label class="form__label">ADDRESS:</label>
                <input type="text" name="address"  class="forme__field" value='<?php echo $email; ?>'>
            </div>

            <div class="form__item">
                <label class="form__label">CONTACT:</label>
                <input type="text" name="contact" class="form__field " required>
            </div>
        
<button type="submit" class="btn btn_form">Confirm</button>

</fieldset>
</form>


<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
// mysqli_close($conn);
?>

<?php include('footer.php')?>