<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title> 
<link rel="stylesheet" type="text/css" href="assets/css/login.css">   
</head>
<body>
<!-- panel with buttons -->
        <div class="main">
            <div class="panel">
                <a href="#login_form" id="login_pop">Log In</a>
                </div>
        </div>
        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <p>Please enter your login and password here</p>
            <div>
                <label for="login">Login</label>
                <input type="text" id="login" value="" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" value="" />
            </div>
            <input type="button" value="Log In" />
            <a class="close" href="#close"></a>
        </div>
</body>
</html>

       