
<?php
require ('test_header.php');
include('config/db.php');
?>

<form class="form" method="post" action="save.php" style="margin-top:50px">

<header class="form__header">
        <h1 class="form__title"><span>Train</span> Layout</h1>
    </header>
    <fieldset class="form__body">
        <?php
include('config/db.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM route WHERE id='$id'");
while($row = mysql_fetch_array($result))
  {
  $seatnum=$row['numseats'];
  }
?>
<strong><h1 style="color: blue" align="center">Train Layout</h1></strong> <br>
<div style="border:1px solid blue; padding:10px 5px; border-radius:5px; width: 700px;">
<?php
$N = $seatnum+1;
for($i=1; $i < $N; $i++)
{
echo '<input type="button" class="form__field" style="border:none; width:23px; padding:2px; margin:2px;" value="'.$i.'" />';
}
?>
</div>
</fieldset>
</form>
<?php include('footer.php')?>

