<?php
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);



    // echo "welcome".$username;

    if (!empty($username) && !empty($password && !empty($email))) {

        $sql = "INSERT INTO users(username, password , email, role, isVerified , status) VALUES ('$username','$password', '$email' , 'user' , 0 , 0)";

        //making connection
        require('admin/connection.php');
        //querying

        $qry = mysqli_query($conn, $sql) or die("some thing ");

        if ($qry) {
            echo "user registration success";
        }
    } else {
        echo "phease fill";
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
            <legend>User Registration</legend>


            <label> UserName</label>
            <input type="text" name="username" placehoder="username">
            <br />
            <lable>Password</label>
                <input type="password" name="password" palceholder="pasword">
                <br>
                <lebel>Email</label>
                    <input type="email" name="email">
                    <br />

                    <input type="submit" name="submit" value="submit">

                    <a href='signin.php'>signIn</a>
        </fieldset>
    </form>
</body>

</html>