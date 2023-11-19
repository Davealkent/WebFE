<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgetpassword.css">
</head>

<body>
    <div class="nav-bar">
        <img src="Logo.png" alt="Logo">
        <button onclick="location.href='login.php'">Login</button>
        <button onclick="location.href='register.php'">Register</button>
    </div>
    <div class="container">
        <div class="header-wrapper">
            <h1>Find Your Account</h1>
        </div>
        <div class="form-container">
            <h5>Please enter your Email Address. We will send a mail to that account so that you can reset your
                password.</h5>
            <input class="email" type="email" placeholder="Email Address">
        </div>
        <div class="button-wrapper">
            <button class="send-button" type="submit">
                Send
            </button>
            <button class="send-button" type="submit">
                <a href="login.php">Cancel</a>
            </button>
        </div>
    </div>

</body>

</html>