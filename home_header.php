<?php
session_start();
require_once('config/db.php');



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Book Your Train</title>
        <meta name="description" content="HTML framework description">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        
        <link rel="stylesheet" type="text/css" href="css/print.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" href="css/general.css">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,800,700,900" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700,800&amp;subset=latin,cyrillic-ext,cyrillic,latin-ext" rel="stylesheet">

        <!-- jQuery & jQuery UI Lib -->
        <script src="js/libs/jquery-1.11.0.min.js"></script>
        <script src="js/libs/jquery-ui.js"></script>
        <script src="js/scriptsJsUI.js"></script>


        <!-- Modernizr -->
        <script type='text/javascript' src='js/libs/modernizr-2.5.3.min.js'></script>

        <!-- Semantic HTML5 Support on old IE -->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
            <header class="header">
                <div class="container cf">
                    <div class="logo">
                        <br>
                        <a href="index.php" class="logo__item">
                            <h1 style="font-family: Delicious"><marquee><strong>Online Train Ticket Booking</strong></marquee></h1>

                            <!--<img src="css/images/logo.png" alt="Libro" />-->
                        </a>
                        <!--<p class="logo__item logo__item_descr">
                            There are many variations of passages
                        </p>-->
                    </div>
                    <!-- END: LOGO -->

                    <ul class="lang header__item">
                        <li class="lang__item">
                           <!-- <a href="#" class="lang__link">
                              <?php
                                  //$cur_user = $user->get_user_info($username);
                                  //echo $cur_user->first_name." ".$cur_user->last_name;
                               ?>
                            </a>-->
                        </li>
                    </ul>
                    <!-- END: LANG -->

                     <div class="enter header__item">
                        <!--<a href="admin_login.php" class="enter__item enter__item_login">Admin Login</a>
                        <a href="register.php" class="enter__item enter__item_register">Register</a>-->
                        <a href="logout.link.php" class="enter__item enter__item_login">Log Out</a>
                       
                    </div>
                    <!-- END: ENTER -->

                    <div class="contacts header__item">
                        <div class="contacts__phone"><?php
                        if (isset($_SESSION['username'])) {
  
echo $_SESSION["username"];

    }else{
      echo "<script type='text/javascript'>alert('You must log in first'); window.location.href = 'index.php';</script>";
}
                        ?></div>
                        
                       <!-- <?php
//$query="SELECT * FROM user WHERE username='$username'";
//$result=mysql_query($query) or die(mysql());
    //  $row=mysql_fetch_array($result);
  ?>
                        <div class=""><?php// echo $row['firstname']." ".$row['lastname']; ?></div>-->
                        <!--<div class="contacts__email">support@book.com</div>-->
                    </div>
                    <!-- END: CONTACTS -->
                </div>
                <!-- END: CONTAINER -->
            </header>
            <!-- END: HEADER -->
          <ul id="ul">
            <li><a href="home.php">Home</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="search.php">Search Train</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
        </ul>
        <nav class="nav">
           <div class="container cf">
                <form class="search">
                    <input type="text" placeholder="Search">
                    <button type="button" class="search__btn"></button>
                </form>
                <!-- END: SEARCH -->

                <a href="#" class="pull pull_insNav">Menu</a>
            
           </div>
        </nav>
        <!-- END: WRAP NAV -->

        <div class="mainSlider">
            <ul class="insMainSlider cf">
                <li class="insMainSlider__item" style="background: url(css/images/mainSlider/railway.jpeg) no-repeat;">
                    <div class="container">
                        <div class="slider__column">
                            <div class="sliderTitle">
                                <h1 class="sliderTitle__titl sliderTitle__item">Book Trains!</h1><br>
                                <h2 class="sliderTitle__desc sliderTitle__item">Ticket Online</h2>
                            </div>
                            <!--<a href="#" class="btn">Read more</a>-->
                        </div>


                        <div class="slider__column">
