<?php



session_start();
session_destroy();
session_unset();
mysqli_close();

header('location:../index.php');





?>