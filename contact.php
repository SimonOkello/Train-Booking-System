
<?php
require ('test_header.php');
include('config/db.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body >



<header class="form__header">
        <h1 class="form__title"><span>Contact</span> Us</h1>
    </header>

    <fieldset class="form__body">
       <p class="form__field" >Town station <br>
Mfangano street, <br>
P.O. Box 62000 -00200, Nairobi <br>
Tel: 020 – 4447769, 0729958003, 0708241204 <br>
Email: support@book.com, <br>
</p> 
<form class="form" method="post" action="" style="margin-top:50px">

  <div class="form__row">
            <div class="form__item">
                <label class="form__label">NAME</label>
                <input type="text" name="fname" class="form__field" required />
            </div>
            <div class="form__item">
                <label class="form__label">EMAIL</label>
                <input type="text" name="lname" class="form__field" required />
            </div>
        </div>
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">SUBJECT:</label>
                <input type="text" name="address"  class="forme__field" required>
            </div>

            <div class="form__item">
                <label class="form__label">MESSAGE:</label>
                <textarea id="message" class="contactform" class="form__field name="message" cols="28" rows="4" required=""></textarea>
            </div>
        </div>
        <div class="form__row">
            
        
<button type="submit" class="btn btn_form">SUBMIT</button>
</div>
</fieldset>
</form>
<?php include('footer.php')
?>
</body>
</html>
