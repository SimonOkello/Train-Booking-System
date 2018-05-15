
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


<form class="form" method="post" action="" style="margin-top:50px">
<!--<header class="form__header">-->
        <ul id="nav">
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="trains.php">TRAINS</a></li>
            <li><a href="seatInventory.php">SEAT INVENTORY</a></li>
            <!--<li><a href="result.php">Search Train</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>-->
        </ul>

<!--<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />-->
 <header class="form__header">
 <h1 class="form__title" style="text-align:center"><span>Seat Transactions</span></h1>
 </header>
<table id="hor-minimalist-b">
    <thead >
        <tr>
            <th>#</th>
                                <th> Date </th>
                                <th> Bus Type </th>
                                <th> Route </th>
                                <th> Seat Number </th>
                                <th> Transaction Code </th>
                                <th> Action </th>
        </tr>
    </thead>
    <tbody>
        <?php
       
       $result = mysql_query("SELECT * FROM reserve");
       $i=0;
                            while($row = mysql_fetch_array($result))
                                {
                                    $i+=1;
                                    echo '<tr>';
                                    echo '<td>'.$i.'</td>';
                                    echo '<td>'.$row['date'].'</td>';
                                    $rrad=$row['bus'];
                                    $results = mysql_query("SELECT * FROM route WHERE id='$rrad'");
                                    while($rows = mysql_fetch_array($results))
                                        {
                                    echo '<td>'.$rows['type'].'</td>';
                                    echo '<td>'.$rows['from'].'-'.$rows['to'].'</td>';
                                        }
                                    echo '<td>'.$row['seat'].'</td>';
                                    echo '<td>'.$row['transactionnum'].'</td>';
                                    echo '<td><div align="center"><a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
                                    echo '</tr>';
                                }
        
        ?>
    </tbody>
</table>


</form>
 <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are sure you want to delete this item? "))
          {

 $.ajax({
   type: "GET",
   url: "deleteinventory.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<?php include('footer.php')?>
</body>
</html>

