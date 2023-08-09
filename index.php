<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/style-1.css">
</head>
<body>
    <form action="<?php echo dirname($_SERVER["PHP_SELF"]) . "/submit.php"; ?>" method="post" onsubmit="return do_submit()">
        <div class="container">
            <h1>Login Form</h1>
            <div class="nav">
                <a href="#" class="active" title="Sign In">Sign In</a>
                <a href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/sign-up.php"; ?>" title="Sign Up">Sign Up</a>
            </div>
            <div class="input email">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input password">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="show">
                <input type="checkbox">Show password
            </div>
            <button type="submit" name="signed_in" class="sign-in">Sign In</button>
        </div>
    </form>
    <script src="script/script-1.js"></script>
</body>
</html>