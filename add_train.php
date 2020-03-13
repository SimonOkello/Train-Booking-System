<?php
require ('admin_header.php');
	?>

<!DOCTYPE html>
<html>
<head>
    <style>
#nav {
    list-style-type: none;
    margin: 20px;
    padding: 20px;
    overflow: hidden;
    background-color: #333;
   width: 100%;
}

#nav li {
    float: left;
}

#nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin-left: 30px;
}

#nav li a:hover {
    background-color: #111;
}

#hor-minimalist-b
{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;
    background: #fff;
    margin: 15px;
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
#hor-minimalist-b th
{
    font-size: 12px;
    font-weight: normal;
    color: #039;
    padding: 8px 8px;
    border-bottom: 2px solid #6678b1;
}
#hor-minimalist-b td
{
    border-bottom: 1px solid #ccc;
    color: #669;
    padding: 6px 8px;
    margin:10px;
}
#hor-minimalist-b tbody tr:hover td
{
    color: #009;
}

#filter{
    width: 230px;
    border: 1px solid #C1DAD7;
    border-left: 4px solid #C1DAD7;
    padding:5px;
    background-image:url('../images/filter.gif');
    background-repeat:no-repeat;
    background-position: 3px 5px;
    padding-left:20px;
}
</style>
    <title></title>
</head>
<body>

<ul id="nav">
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="trains.php">TRAINS</a></li>
            <li><a href="seatInventory.php">SEAT INVENTORY</a></li>
        </ul>

<header class="form__header">
        <h1 class="form__title"><span>New</span> Train</h1>
    </header>
    <fieldset class="form__body">
        <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "railway";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn){
            die ('Could not connect: '.mysqli_error());
        }

    if (isset($_POST['add'])) {
    $from = mysqli_real_escape_string($conn, $_POST['from']);
    $to = mysqli_real_escape_string($conn,$_POST['to']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $numseats = mysqli_real_escape_string($conn,$_POST['numseats']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $time = mysqli_real_escape_string($conn,$_POST['time']);

    $sql = "INSERT INTO route (`from`, `to`, `price`, `numseats`, `name`,`time`) VALUES ('$from','$to','$price','$numseats','$name','$time')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<script type='text/javascript'>alert('This Train has been added.'); window.location.href='trains.php'</script>";
    }else{
        echo "<script type='text/javascript'>alert('Failed!'); window.location.href='add_train.php'</script>";
    }
    mysqli_close($conn);
    }
    
?>
     
    <form class=" form-inline" method="post" action="add_train.php">
    <div class="form__row">
            <div class="form__item">
                <label class="form__label">Train Name</label>
                <input type="text" name="name"  class="form__field" required  />
            </div>
            <div class="form__item">
                <label class="form__label">Origin</label>
                <input type="text" name="from"  class="form__field" required  />
            </div>
        </div>
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">Destination</label>
                <input type="text" name="to"  class="form__field" required  />
            </div>
            <div class="form__item">
                <label class="form__label">Price</label>
                <input type="text" name="price"  class="form__field" required />
            </div>
        </div>
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">Number of seats</label>
                <input type="text" name="numseats"  class="form__field" required />
            </div>
            <div class="form__item">
                <label class="form__label">Time</label>
                <input type="text" name="time"  class="form__field" required />
            </div>
        </div>
        <div class="form__row">
         <input type="submit" name="add" class="btn btn-primary" value="ADD">
     </div>
    
</form>


</fieldset>
</form>
<?php include('footer.php')
?>
</body>
</html>



