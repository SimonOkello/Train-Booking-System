
<?php
require ('test_header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>



<form class="form" method="post" action="" style="margin-top:50px">

<header class="form__header">
        <h1 class="form__title"><span>Booking</span> Receipt</h1>
    </header>
    <fieldset class="form__body">
      <div class="form__row">
    	      <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Receipt</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

<a style  = "float:right;" href="javascript:Clickheretoprint()" class="btn btn-primary">PRINT</a>
<div id="print_content" style="width: 400px;">

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "railway";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die ('Could not connect: '.mysqli_error());
}

$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysqli_fetch_array($result))
  {

    $transactionnum=$row['transactionum'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $address=$row['address'];
    $contact=$row['contact'];
    $payable=$row['payable'];
    
  }
$results = mysqli_query($conn, "SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysqli_fetch_array($results))
  {
    $ggagaga=$rows['bus'];
    
    $resulta = mysqli_query($conn, "SELECT * FROM route WHERE id='$ggagaga'");
    while($rowa = mysqli_fetch_array($resulta))
      {
$from=$rowa['from'];
$to=$rowa['to'];
$type=$rowa['name'];
 $time=$rowa['time'];
 $date=$rows['date'];
      }
    
  }
  mysqli_close($conn);
?>
<div id="printable">
<table id="receipt"  class="form__field" >
            <thead style="margin-bottom: 20px">
            <th colspan="2"  ><h1>ONLINE TRAIN TICKET BOOKING</h1></th>
                
            <tr><th colspan="2"><h3>Booking Receipt</h3></th></tr>
            </thead>
            <tbody>
                <tr><td><strong>Transaction Number</strong></td><td><?php echo $transactionnum; ?> </td></tr>
                <tr><td><strong>Name</strong></td><td> <?php echo $fname.' '.$lname; ?></td></tr>
                <tr><td><strong>Address</strong></td><td> <?php echo $address; ?></td></tr>
                <tr><td><strong>Contact</strong></td><td> <?php echo $contact; ?></td></tr>
                <tr><td><strong>Payable</strong></td><td> <?php echo "Ksh ". $payable; ?> </td></tr>
                <tr><td><strong>Route</strong></td><td> <?php echo $from.' - '.$to; ?> </td></tr>
                <tr><td><strong>Name of train</strong></td><td> <?php echo $type ; ?> </td></tr>
                <tr><td><strong>Departure</strong></td><td> <?php echo $time; ?> </td></tr>
                <tr><td><strong>Seat Number</strong></td><td> <?php echo $setnum; ?> </td></tr>
                <tr><td><strong>Date of Travel</strong></td><td> <?php echo $date; ?> </td></tr>
              </tbody>

                
        </table> 
      </div>
</div>
</div>
        </fieldset>
        </body>
        
</html>