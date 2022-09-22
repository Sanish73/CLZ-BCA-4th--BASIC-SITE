<?php
include("header.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "SELECT * FROM posts WHERE category_id=$id ORDER BY id DESC";
    $qry = mysqli_query($conn , $sql);

    while($row = mysqli_fetch_array($qry)){
        echo "<h1>".$row['title']."</h1>";
        echo "<p>".substr($row['description'], 0, 200)."</p>";
        echo "<p><a href='details.php?id=".$row['id']."'>Read More....</a></p>";
        echo "<hr/>";
    }

}

?>