<?php

// session_start();
require_once("inc_session.php");

include('counters.php');
echo "</br>";
echo "Welcome   ".$_SESSION["username"];
echo "</br>";
echo "</br>";

echo "<a href='../users.php'>Users</a>";
echo "</br>";
echo "</br>";
echo "<a href='logout.php'>Logout</a>";
echo "</br>";
echo "</br>";
echo "Total Users";
$totaluser = getTotalUsers();
echo $totaluser;


?>