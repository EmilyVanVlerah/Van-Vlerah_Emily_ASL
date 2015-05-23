<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 3 - Project Version 1 (Minimum 2 Features)
 * Date: May 18th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life - About Us</title>
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
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/all_hacks'><span>All Hacks</span></a></li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/login'><span>Log In</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/register'><span>Register</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/user_profile'><span>Profile</span></a></li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/about_us'><span>About Us</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/contact_us'><span>Contact Us</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <div id="body-container">

        <div id="content">
            <h1>About Us</h1>
            <p>Hello and Welcome to Hackin' Life!</p>
            <p>We are a site that allows people to come and read life hacks. You can become a member and use the bookmark function of our site. You can make posts and they post your own life hacks which will be on your page and the community page. If you find a hack you like you bookmark it and it saves to your bookmark page. You can share your favorite hacks on your facebook as well.</p>
            <p>Please feel free to register and become part of the community of Hackin' Life.</p>
            <a href='<?php echo base_url(); ?>index.php/site/register'><span>Register</span></a>

            <br/>
        </div>
    </div>
    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>