<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
-->

    <div id="body-container">

        <div id="content">
            <h1>Login:</h1>
            <form action="newuser.php" method="post">
                Username: <input type="text" name="username" value="" required /><br /><br />
                Password: <input type="password" name="password" value="" required /><br />
                <input type="submit" name="submit" value="Login" />
            </form>

            <br/>
            <br/>

            <h1>Register:</h1>
            <form action="newuser.php" method="post">
                First Name: <input type="text" name="fname " value="" required /><br /><br />
                Last Name: <input type="text" name="lname" value="" required /><br /><br />
                Email: <input type="text" name="email" value="" required /><br /><br />
                Username: <input type="text" name="username" value="" required /><br /><br />
                Password: <input type="password" name="password" value="" required /><br />
                <input type="submit" name="submit" value="Submit" />
            </form>
            <br/>
            <br/>
        </div>
    </div>