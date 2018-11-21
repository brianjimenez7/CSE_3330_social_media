<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Login</h1>
        </div>
        <form method="post" action="loginauthen.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username_1">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_3">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p>
                New member? <a href="register.php">Sign In</a>
            </p>
        </form>
    </body>
</html>