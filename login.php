<DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form class="box" method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <h5 style="color:black; margin-bottom: 50px;">Please sign in with your account</h3>
            <input type="text" name="name" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" name="submit" value="Login">
            <h6 style="text-align: left;float:left;margin-top: 40px;"><a class="forgot" href="forgot_password.html" target="blank">Forgot password</a></h6>
            <h6 style="text-align: right;margin-top: 45px;"><a class="join" href="signup.html" target="blank">Not registered,join now</a></h6>
        </form>
    </body>
</html>