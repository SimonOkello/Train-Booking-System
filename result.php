
<?php
require ('test_header.php');
$start = isset($_REQUEST['from']) ? $_REQUEST['from'] : '';
$end = isset($_REQUEST['to']) ? $_REQUEST['to'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    #hor-minimalist-b
{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;
    background: #fff;
    margin: 15px;
    width: 75%;
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
</style>
    <title></title>
</head>
<body>


<form class="form" method="post" action="" style="margin-top:50px">
<header class="form__header">
        <h1 class="form__title"><span>Search</span> Result</h1>
    </header>
    
  

<table id="hor-minimalist-b">
    <thead>
        <tr>
            <th>#</th>
            <th>SOURCE:</th>
            <th>DESTINATION:</th>
            <th>FARE:</th>
            <th>NUMBER OF SEATS:</th>
            <th>DEPARTURE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST['from'])) {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "railway";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            if (!$conn){
                die ('Could not connect: '.mysqli_error());
            }
           
            $start = mysqli_real_escape_string($conn, $start);
            $end = mysqli_real_escape_string($conn, $end);

            $farmers = mysqli_query($conn,"SELECT * FROM route WHERE `from` ='$start' and `to` = '$end'") or die("unable to fetch records" . mysqli_error());
            $i = 0;
            if (mysqli_num_rows($farmers)==0) {echo "<script type='text/javascript'>alert('THERE IS NO TRAIN TO THIS ROUTE. TRY ANOTHER ROUTE');window.location.href='search.php'</script>";  }
            while ($farmer = mysqli_fetch_array($farmers)) {
               
                           
                    $i+=1;
                echo "<tr>";
                echo '<td>' . $i . '</td>';
                //echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
                echo "<td>" . $farmer['from'] . "</td>";
                echo "<td>" . $farmer['to'] . "</td>";
                echo "<td>" . $farmer['price'] . "</td>";
                echo "<td>" . $farmer['numseats'] . "</td>";
                echo "<td>" . $farmer['time'] . "</td>";
                echo "</tr>";
            }
        }
        mysqli_close($conn);
        ?>
    </tbody>
</table>


</form>
</body>
</html>

