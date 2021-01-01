<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Login Page</title>
</head>
<body>
	<div id="login" class="section">
            <div class="cont">
                <div class="form">
                    <form action="logged_in.php" method="POST">
                        <h1>Login</h1>
                        <input type="text" class="user" placeholder="Username"/>
                        <input type="password" class="pass" placeholder="Password"/>
                        <input type="submit" value="Login" class="login">
                    </form>
                    <form action="registration.php" method="POST">
                        <input type="submit" value="Register" class="register">
                    </form>
                </div>
            </div>
        </div>

</body>
</html>