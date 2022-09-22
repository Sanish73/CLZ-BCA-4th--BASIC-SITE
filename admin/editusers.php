<?php

require_once("inc_session.php");



/* 
if(empty($upassword)){
    $usql = "UPDATE users set username='$uusername', email='$uemail' , role='$urole', isVerified='$uisverified', status='$ustatus' WHERE id='$uid'";

}else{
    $usql = "UPDATE users set username="$uusername', password='".md5($upassword)."', email='$uemail' , roles='$yrole', isverified='$yisverified' , status= '$ustatus' WHERE id = 'uid'";

}
include("connectoin.php");
$qry = mysqli_query($conn , $usql) of die

if($qry){
    headdre ("Location: users.php?msg=record Edited successfully");

}


if(samosa ){
    echo full;
}else{
    echo vkai;
}

else{
    ech "something"f11;
}


*/
// echo $_POST['username'];
include('connection.php');
if(isset($_POST['submit'])){
// $username = trim($_POST['upassword']);
// echo $username;
// echo $username;
                 if(empty($_POST['upassword'])){
                     $uusername =$_POST['username'];
                     $uemail    =$_POST['uemail'];

                     $urole = $_POST['urole'];
                     $uisverified=$_POST['uisverified'];
                     $ustatus = $_POST['ustatus'];

                     $uid=$_GET['id'];

                     $usql = "UPDATE users set username='$uusername', email='$uemail' , role='$urole', isVerified='$uisverified', status='$ustatus' WHERE id='$uid'";
                         
                          $qry = mysqli_query($conn , $usql) or die("querry is wrond");
                            if($qry){
                                echo "done";
                            }else{
                                echo "some thn";
                            }
                        
                          
                   }else{
                       echo "welcom";
                   }
}
if(isset($_GET['id'])){
    $editid=$_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$editid";
    // include("connection.php");
    $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    while($row=mysqli_fetch_array($qry))
    {
        echo "<form method=post action=''>";
        echo "<fieldset><legend> EDIT".$row['username']."</legend>";
        // echo "<input type='hidden' name=uid value=".$row['username']."><br>";
        echo "<input type='text' name=username value=".$row['username']."><br>";
        // echo "<input type='password' name=\"upassword\"><br>";
        echo "<input type ='email' name=uemail value=".$row['email']."/><br>";
        echo "<input type ='text' name=urole value=".$row['role']."><br>";
        echo "<input type='number' name=uisverified value=".$row['isVerified']."><br>";
        echo "<input type='number' name=ustatus value=".$row['status']."><br>";
        echo "<input type='submit' name='submit' value='update'>";
        echo "</fieldset></form>";
    }
}
else{
    header("Location: users.php");
}
    echo "<a href='../users.php'>Users</a>";

?>