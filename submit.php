<?php 
    if(isset($_POST["signed_in"]) || isset($_POST["signed_up"])){
        $connection = mysqli_connect("localhost", "root", "", "login_form");
        if(!$connection){
            die(mysqli_connect_error());
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        if(isset($_POST["signed_in"])){
            $command = "SELECT email, pass FROM user_table WHERE email='$email'";
            $result = mysqli_query($connection, $command);
            if(mysqli_num_rows($result) > 0){
                $contain = mysqli_fetch_assoc($result);
                if($password == $contain["pass"]){
                    echo "<script>alert('You have signed in!');</script>";
                    echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "');</script>";
                }else{
                    echo "<script>alert('Your password is invalid!');</script>";
                    echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "');</script>";
                }
            }else{
                echo "<script>alert('Your email doesn\'t exist!');</script>";
                echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "');</script>";
            }
        }
        if(isset($_POST["signed_up"])){
            $command = "SELECT email FROM user_table WHERE email='$email'";
            $result = mysqli_query($connection, $command);
            if(mysqli_num_rows($result) == 0){
                $command2 = "INSERT INTO user_table (email, pass) VALUES ('$email', '$password')";
                mysqli_query($connection, $command2);
                echo "<script>alert('Your new email has been created!');</script>";
                echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "');</script>";
            }else{
                echo "<script>alert('Your new email exists!');</script>";
                echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "/sign-up.php" . "');</script>";
            }
        }
        mysqli_close($connection);
    }else{
        echo "<script>location.assign('" . dirname($_SERVER["PHP_SELF"]) . "');</script>";
    }
?>