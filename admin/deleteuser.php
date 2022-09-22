<?php
include_once('inc_session.php');

if(isset($_GET["id"])){

    $deleted = $_GET["id"];

    $sql = "DELETE FROM users WHERE id= $deleted";

    include_once("connection.php");

    $qry = mysqli_query($conn, $sql) or die(" not deleted");


    if($qry){
        
        echo "location:../users.php?msg=record deleted";
        header ("location:../users.php");
        
    }
}

?>