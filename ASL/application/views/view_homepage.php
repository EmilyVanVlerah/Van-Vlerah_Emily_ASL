<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
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
            <h1>Hack of the Day</h1>
            <p>Lorem ipsum dolor sit amet, ex eum aliquip oblique. Tale affert ridens vel at, ut novum elaboraret deterruisset eam, in debet aliquid scriptorem eum. Ea his elitr maluisset consetetur. Vel an docendi placerat, ex affert munere his.

                Et vix causae mentitum intellegebat, cum id nibh duis, qui ad iisque ocurreret reprehendunt. Viris persecuti ad mea, sumo facilisi consulatu eum an. Placerat consulatu expetendis ius eu. Pro ne oportere praesent.

                Usu ne saepe causae, cu eum liber quando regione, molestie mnesarchum conclusionemque pri eu. Eam ut dolore labitur mentitum, quo nisl accusam dolores cu. In adhuc putent vim. Per at voluptua epicurei. Eam movet patrioque at, mei eros aeque ex. Vocibus consequat has no, ei doming definitiones pri.</p>

            <br/>
            <div id="button">
                <img id="fav" src="<?php echo base_url(); ?>assets/img/fav1.png" alt="fav button">
                <img id="share" src="<?php echo base_url(); ?>assets/img/share1.png" alt="facebook button">
            </div>

            <br/>
        </div>
    </div>
    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>