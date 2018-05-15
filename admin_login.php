<?php
require('login_header.php'); 
?>

<form class="form" method="post" action="admin_logn.php">
    <header class="form__header">
        <h1 class="form__title"><span>Login</span> as Admin</h1>
    </header>
    
    <fieldset class="form__body">
        <div class="form__row">
            <div class="form__item">
                <label class="form__label">Username or email</label>
                <input type="text" name="username" class="form__field" required />
            </div>
            <div class="form__item">
                <label class="form__label">Password</label>
                <input type="password" name="password" class="form__field" required />
            </div>
        </div>
        <div class="form__row">
          <input type="checkbox" name="remember" value="Remember me" class="form__field" />
        </div>
        <div class="form__row">
            <button type="submit" name="login" class="btn btn_form">Login</button>
        </div>
    </fieldset>
</form>
<?php require('footer.php'); ?>
