<?php

// include_once("inc_header.php");


if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    $iname = $_FILES['thumb']['name'];
    // $itype = $_FILES['thumb']["type"];
    // $isize = $_FILES['thumb']["size"];
    // $itemp_name = $_FILES['thumb']["tmp_name"];
    // $dt = date("Ymdhisuv");

echo ($name);
    // $uploadimage = $dt . $iname;
    // $uloc = "../uploads/";


    // if (!empty($name) && !empty($description) && !empty($iname)) {

      
    //     $sql = "INSERT INTO categories(name , description , thumb, status) VALUES ('$name,'$description','$uploadimage',1)";
   
    //     require('connection.php');
    

    //     $qry = mysqli_query($conn, $sql) or die("some thing ");

    //     if ($qry) {
    //         echo "user registration success";
    //         move_uploaded_file($itemp_name, $uloc . $uploadimage);
    //         header("Location: categories.php");
    //     }
    // } else {
    //     echo "phease fill";
    // }
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
    <form method="POST" action="" name="signup" enctype="multipart/form-date">
        <fieldset>
            <legend>Add Category</legend>


            <label> Category Name</label>
            <input type="text" name="name" placehoder="category Name" />
            <br />
            <lable>Description</label></br>
                <input type="text" name="description" palceholder="Description"><br />
                <lable>Image</label></br>
                    <input type="file" name="thumb" /><br />



                    <input type="submit" name="submit" value="Create">

                    <!-- <label>Forgot Password?</label> -->
                    <!-- <button name="button"  onlclick='signup.php'>Forgot Password?</button> -->
                    <!-- <a href='signup.php'>Forgot Password</a> -->
                    <!-- <a href='admin/dashboard.php'>Dashboard?</a> -->
                    <!-- <input type="submit" name="forgot" value="forgot"> -->
        </fieldset>
    </form>
</body>

</html>