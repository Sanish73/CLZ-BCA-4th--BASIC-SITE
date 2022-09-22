<?php

require_once('inc_session.php');
session_destroy();

header("location:../signin.php");

?>