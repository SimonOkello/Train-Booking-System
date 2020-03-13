<?php
require ('home_header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>



                            <form class="form" method="post" action="selectset.php">
                                <header class="form__header">
                                    <h1 class="form__title"><span>Book</span> your train</h1>
                                </header>
                                <!--<?php //$train->display_errors();?>-->
                                <fieldset class="form__body">
                                          <div class="form__row">
                                        <div class="form__item">
                                            <label class="form__label">FROM</label>
                                            <select name="route" class="form__field" required />
                        <?php
                        $dbhost = "localhost";
                        $dbuser = "root";
                        $dbpass = "";
                        $dbname = "railway";
                        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                        if (!$conn){
                            die ('Could not connect: '.mysqli_error());
                        }
                        
                        $result = mysqli_query($conn,"SELECT * FROM route");
                        while($row = mysqli_fetch_array($result))
                            {
                                echo '<option value="'.$row['id'].'">';
                                echo $row['from'];
                                echo '</option>';
                            }

                        ?>
                        </select>
                                        </div>
                                        <div class="form__item">
                                            <label class="form__label">TO</label>
                                            <select name="route" class="form__field" required />
                        <?php
                        $dbhost = "localhost";
                        $dbuser = "root";
                        $dbpass = "";
                        $dbname = "railway";
                        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                        if (!$conn){
                            die ('Could not connect: '.mysqli_error());
                        }
                        $result = mysqli_query($conn, "SELECT * FROM route");
                        while($row = mysqli_fetch_array($result))
                            {
                                echo '<option value="'.$row['id'].'">';
                                echo $row['to'];
                                echo '</option>';
                            }
                            mysqli_close($conn);
                        ?>
                        </select>
                                        </div>
                                    </div>
                                        <div class="form__row">
                                        <div class="form__item">
                                            <label class="form__label">PASSENGERS</label>
                                             <select name="qty"  class="form__field" required>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>
                                              <option>9</option>
                                              <option>10</option>
                                              </select>
                                        </div>
                                    

                                   
                                        <div class="form__item">
                                            <label class="form__label">DATE:</label>
                                            <input type="text" name="date" class="form__field form__field_calendar datepickerSecond" required>
                                        </div>
                                   
                                    </div>
                                    <div class="form_row">
                                      <button type="submit" name="submit" class="btn btn_form">NEXT</button>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            </form>

<?php
    require ('footer.php');
?>


</body>
</html>

