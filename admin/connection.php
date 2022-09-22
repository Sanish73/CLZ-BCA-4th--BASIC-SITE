<?php

define ('HOST','localhost');
define ('USER', "root");
define ('PASSWORD' , "");
define ("DATABASE" , "megablog");//xa


$conn = mysqli_connect(HOST, USER , PASSWORD , DATABASE) or die (" Unable to connect");

?>