<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/style-2.css">
</head>
<body>
    <form action="<?php echo dirname($_SERVER["PHP_SELF"]) . "/submit.php"; ?>" method="post" onsubmit="return do_submit()">
        <div class="container">
            <h1>Login Form</h1>
            <div class="nav">
                <a href="<?php echo dirname($_SERVER["PHP_SELF"]); ?>" title="Sign In">Sign In</a>
                <a href="#" class="active" title="Sign Up">Sign Up</a>
            </div>
            <div class="input email">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input password">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="show show-password">
                <input type="checkbox">Show password
            </div>
            <div class="input confirm-password">
                <input type="password" placeholder="Confirm Password">
            </div>
            <div class="show show-confirm-password">
                <input type="checkbox">Show password
            </div>
            <button type="submit" name="signed_up" class="sign-up">Sign Up</button>
        </div>
    </form>
    <script src="script/script-2.js"></script>
</body>
</html>