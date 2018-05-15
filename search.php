<?php

  require ('search_header.php');
  $start = isset($_REQUEST['from']) ? $_REQUEST['from'] : '';
$end = isset($_REQUEST['to']) ? $_REQUEST['to'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>



                            <form class="form" method="post" action="result.php">
                                <header class="form__header">
                                    <h1 class="form__title"><span>Search</span> your train</h1>
                                </header>
                                <!--<?php //$train->display_errors();?>-->
                                <fieldset class="form__body">
                                          <form class=" form-inline" method="post" action="">
    <div class="form__row">
            <div class="form__item">
                <label class="form__label">FROM</label>
                <input type="text" name="from" placeholder="From" class="form__field" value='<?php echo $start; ?>' required />
            </div>
            <div class="form__item">
                <label class="form__label">TO</label>
                <input type="text" name="to" placeholder="To" class="form__field" value='<?php echo $end; ?>' required />
            </div>
        </div>
        <div class="form__row">
         <input type="submit" class="btn btn-primary" value="Search">
     </div>
    
</form>
                                        
                                </fieldset>
                                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            </form>

<?php
    require ('footer.php');
?>


</body>
</html>

