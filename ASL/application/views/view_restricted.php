<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life - Login/Create</title>
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
            <h3>You do not have access to this page.</h3>

            <a href="<?php echo base_url().'index.php/site/login' ?>">Back to Login</a>


        </div>
        <div id="footer">
            <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
        </div>

</body>
</html>