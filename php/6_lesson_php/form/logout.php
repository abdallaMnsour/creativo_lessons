<?php 

session_start();

session_unset(); // clear file 

session_destroy(); // delete file 

header("location: login.php");