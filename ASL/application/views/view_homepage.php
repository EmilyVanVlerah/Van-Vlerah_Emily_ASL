<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 4 - Project Version 3 (2 Additional Features)
 * Date: May 25th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life</title>
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
            <h1>Hack of the Day</h1>
            <h3>Diaper Hack</h3>
            <p>Cut your time watering your plants. Get a diaper and cut it open getting the absorbent material inside. Add water to said material. Once soaked up add the material to your potting soil of your choice. The material is safe for your plant and the environment.</p>
            <h5>Admin</h5>
            <h6>May 23rd, 2015</h6>

            <br/>
            <div id="button">
                <a href="<?php echo base_url(). 'site/facebook_request'; ?>" <img id="share" src="<?php echo base_url(); ?>assets/img/share1.png" alt="facebook button"></a>
            </div>

            <br/>
        </div>
    </div>
    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>