<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />
        <meta name="description" content="An minimal site format" />
        <meta name="keywords" content="blog" />
        <link rel="stylesheet" type="text/css" href="../MyAccount/css/login.css" media="all" />  
        <link rel="stylesheet" type="text/css" href="../MyAccount/css/style.css" media="all" />  

        <title>Login</title>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1>My<span>Account</span></h1></div>
            <div id="wrapper">

                <div id="content-wrapper">
                    <div id="content">
                        <section class="container">
                            <div class="login">
                                <h1>Login to My Account</h1>
                                <form method="post" action="../MyAccount/controllers/authentication.php">
                                    <p><input type="text" name="login" value="" placeholder="Username or Email" /></p>
                                    <p><input type="password" name="password" value="" placeholder="Password" /></p>
                                    <p class="remember_me">
                                        <label>
                                            <input type="checkbox" name="remember_me" id="remember_me" />
                                                Remember me on this computer
                                        </label>
                                    </p>
                                    <p class="submit"><input type="submit" name="commit" value="Login" /></p>
                                </form>

                            </div>
                            <div class="login-help">
                                <p>New User ? <a href="register.php">Click here to register</a>.</p>
                            </div>
                        </section>
                    </div>
                </div>   
            </div>

            <div id="footer">By <a href="http://www.vedisoft.com">Bhupendra</a>.
                Original design 
                <a href="http://www.vedisoft.com">here</a> by Vedisoft Software and Education Services Pvt. Ltd. Bhopal</div>
        </div> 
        </div>
    </body>
</html>

