
<?php
//aggrigate function

function getTotalUsers(){
    $sql= "SELECT  * FROM users";

    include('connection.php');

    $qry = mysqli_query($conn , $sql);
    $count = mysqli_num_rows($qry);
    // include('connectionclose.php');

    return $count;



} 

function categoryOption(){
    $sql = "SELECT * FROM categories WHERE status = 1 ORDER BY id DESC";
    include('connection.php');
    $qry = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($qry)){
        echo"<option value = ".$row['id'].">".$row['name']."</option>";

    }
    include('connection.php');
}
?>
