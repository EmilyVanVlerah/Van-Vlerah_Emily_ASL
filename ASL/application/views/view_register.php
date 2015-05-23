<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 3 - Project Version 1 (Minimum 2 Features)
 * Date: May 18th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life - Register</title>
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
            <h1>Register:</h1>

            <?php

            $attributes = array('class' => 'email', 'id' => 'myform');
            echo form_open('index.php/site/signup_validation', $attributes);

            echo validation_errors();

            echo "<p>User Name: ";
            echo form_input('username');
            echo "<p>";

            echo "<p>Email: ";
            echo form_input('email', $this->input->post('email'));
            echo "<p>";

            echo "<p>Password: ";
            echo form_password('password');
            echo "<p>";

            echo "<p>Confirm Password: ";
            echo form_password('cpassword');
            echo "<p>";

            echo "<p>";
            echo form_submit('signup_submit', 'Sign Up');
            echo "<p>";

            echo form_close();

            ?>
            <!--<form action="" method="post">
                First Name: <input type="text" name="fname " value="" required /><br /><br />
                Last Name: <input type="text" name="lname" value="" required /><br /><br />
                Email: <input type="text" name="email" value="" required /><br /><br />
                Username: <input type="text" name="username" value="" required /><br /><br />
                Password: <input type="password" name="password" value="" required /><br />
                <input type="submit" name="submit" value="Submit" />
            </form>-->
            <br/>
            <br/>
        </div>
    </div>

    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>

