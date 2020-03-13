
<?php
require ('admin_header.php');
include('config/db.php');

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
            <!--<li><a href="result.php">Search Train</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>-->
        </ul>
<header class="form__header">
        <h1 class="form__title"><span>Edit</span> Passenger Status</h1>
    </header>
    <fieldset class="form__body">
     


<form class=" form-inline" method="post" action="execeditstatus.php">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
    <div class="form__row">
            <div class="form__item">
                <label class="form__label">Status</label>
       <select name="status" class="form-inline">
	<option>Onboard</option>
	<option>Not Turned Up</option>
	</select>
            </div>
        </div>
        <div class="form__row">
         <input type="submit" class="btn btn-primary" value="Submit">
     </div>
    </form>


</fieldset>
</form>
<?php include('footer.php')
?>
</body>
</html>


