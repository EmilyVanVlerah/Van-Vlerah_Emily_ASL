<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 3 - Project Version 1 (Minimum 2 Features)
 * Date: May 18th, 2015
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackin' Life - All Hacks</title>
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
            <div id="posts">
                <?php foreach($query->result() as $row): ?>

                    <?=form_open('index.php/site/all_hacks/hack_insert');?>

                    <?=form_hidden('entry_id', $this->uri->segment(3));?>

                <p>Title: <input type="text" name="Title"/></p>
                <p>Content:</p>
                <p><textarea name="body" rows="10" cols="50"></textarea></p>
                <p>Author: <input type="text" name="Author"/></p>
                <p>Date: <input type="text" id="datepicker" name="Date"/></p>
                <p><input type="submit" value="Submit Hack" /></p>

                </form>
            </div>
                <br>
                <hr>
                <br>
            <div id="posts">
                <h2>All Hacks</h2>

                <h3><?=$row->title?></h3>
                <p><?=$row->body?></p>
                <h5><?=$row->author?></h5>
                <h6><?=$row->date?></h6>
            </div>
                <hr>

            <?php endforeach; ?>

                <br/>


        </div>
    </div>
    <div id="footer">
        <p>Copyright &copy; 2015 | Hackin' Life | All rights reserved.</p>
    </div>
</body>
</html>