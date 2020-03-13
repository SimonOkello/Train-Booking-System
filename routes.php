
<?php
require ('test_header.php');
include('config/db.php');


?>
<!DOCTYPE html>
<html>
<head>
    <style>
    #hor-minimalist-b
{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;
    background: #fff;
    margin: 15px;
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
#hor-minimalist-b th
{
    font-size: 12px;
    font-weight: bold;
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

<fieldset class="form__body">
<header class="form__header">
        <h1 class="form__title"><span>Train</span> Routes</h1>
    </header>
    <fieldset class="form__body">
       
                    <table id="hor-minimalist-b" >

<tr>
<td >ORIGIN</td>
<td >DESTINATION</td>
<td >DEPARTURE</td>
<td >TRAIN</td>
</tr>
<tr>
<td >Town</td>
<td>Embakasi</td>
<td>5:30AM</td>
<td>Train-A</td>
</tr>
<tr>
<td>Embakasi</td>
<td>Town</td>
<td>7:15AM</td>
<td>Train-B</td>
</tr>
</table>

</fieldset>

<?php include('footer.php')?>
</body>
</html>

