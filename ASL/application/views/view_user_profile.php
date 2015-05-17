<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life - Your Profile</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css"/>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_ui_style.js"></script>
</head>

<body>

<div id="container">

    <div id="header">

        <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Hackin' Life Logo"></a>

        <div id='cssmenu'>
            <ul>
                <li><a href='#'><span>Past Hacks</span></a></li>
                <li><a href='#'><span>Community</span></a></li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/login'><span>Log In</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/register'><span>Register</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/user_profile'><span>Profile</span></a></li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>About Us</span></a></li>
                        <li class='has-sub'><a href='#'><span>Contact Us</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <div id="body-container">

        <div id="content">
            <h1>Your Profile</h1>
            <a href="<?php echo base_url().'index.php/site/logout' ?>">Logout</a>
            <h3>User Name:</h3>

            <?php

                echo "<pre>";
                print_r($this->session->all_userdata());
                echo "</pre>";

            ?>

            <div id="posts">
                <h3>Title</h3>
                <p>Post here</p>

                <br/>
                <div id="button">
                    <img id="fav" src="<?php echo base_url(); ?>assets/img/fav1.png" alt="fav button">
                    <img id="share" src="<?php echo base_url(); ?>assets/img/share1.png" alt="facebook button">
                </div>
            </div>



            <br/>
            <br/>
        </div>
    </div>

    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>

