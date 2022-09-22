<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$sql = "SELECT * FROM users ORDER BY id DESC";
// include(connection.php);
include('admin/connection.php');
$qry = mysqli_query($conn , $sql) or die("some is wrong");

$count = mysqli_num_rows($qry);
echo($count);

if($count>=1){
    
    echo "<table border=1 width=100%>";
    
    echo "<tr>";
   
    echo "<thead><th>id</th>
    <th>username</th>
    <th>email</th>
    <th>role</th>
    <th>isVerified</th>
    <th>status</th>";
    echo "</thead>";
    echo "</tr><tbody>";

    while($row = mysqli_fetch_array($qry)){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["role"]."</td>";
        echo "<td>".$row["isVerified"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td><a href='admin/editusers.php?id=".$row["id"]."'>EDIT</a> | <a href='admin/deleteuser.php?id=".$row["id"]."'>DELETE</a></td>";
        

    }
    echo "</tbody>";
    echo "<tfoot><th>id</th>
    <th>username</th>
    <th>email</th>
    <th>role</th>
    <th>isVerified</th>
    <th>status</th>";
    echo "</tfoot>";
    echo "</tr>";
   
}

    ?>
    <a href='signup.php'>signup?</a>
</body>
</html>