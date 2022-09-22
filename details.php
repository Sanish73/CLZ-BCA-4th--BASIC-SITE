<?php
include("header.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "SELECT * FROM posts WHERE id=$id AND status = 1";
    $qry = mysqli_query($conn , $sql);

    while($row = mysqli_fetch_array($qry)){
        echo "<h1>".$row['title']."</h1>";
       echo "<p>".$row['description']."</p>";
        echo "<hr/>";
    }

}
else{
    header("Location: index.php");

}
include("footer.php");

?>