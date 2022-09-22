<?php

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    // $email = trim($_POST['email']);
    $remember = trim($_POST['rememberme']);



    // echo "welcome".$username;

    if (!empty($username) && !empty($password)) {

        // $sql = "INSERT INTO users(username, password , email, role, isVerified , status) VALUES ('$username','$password', '$email' , 'user' , 0 , 0)";
        $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
        //making connection
        require('admin/connection.php');
        //querying

        $qry = mysqli_query($conn, $sql) or die("some thing ");
        $count = mysqli_num_rows($qry);

        if ($qry) {

            if ($remember == 1) {
                setcookie("username", $username, time() + 60 * 60 * 24 * 7, "/");
                setcookie("password", $password, time() + 60 * 60 * 24 * 7, "/");
            }


            if ($count == 1) {
                session_start();
                $_SESSION['username'] = $username;
                header("location: admin/dashboard.php");
            } else {
                echo "Please enter Correct password or username";
            }
            // if($qry){
            //     echo "user registration success";
            // }



        } else {
            echo "phease fill";
        }
    } else {
        echo "Username or Password is wrong!!";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" name="signup">
        <fieldset>
            <legend>signin</legend>


            <label> UserName</label>
            <input type="text" name="username" placehoder="username" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>">
            <br />
            <lable>Password</label>
                <input type="password" name="password" palceholder="pasword" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>">
                <br>
                <!-- <lebel>Email</label>
          <input type="email" name="email" > -->

                <input type="checkbox" name="rememberme" value="1">Remember me<br />
                <br />

                <input type="submit" name="submit" value="submit">

                <!-- <label>Forgot Password?</label> -->
                <!-- <button name="button"  onlclick='signup.php'>Forgot Password?</button> -->
                <a href='signup.php'><br>SignUp</a>
                &nbsp;&nbsp;&nbsp; <a href='forgot.php'>Forgot Password?</a>
                &nbsp;&nbsp;&nbsp;<a href='admin/dashboard.php'>Dashboard?</a>
                <!-- <input type="submit" name="forgot" value="forgot"> -->
        </fieldset>
    </form>
</body>

</html>