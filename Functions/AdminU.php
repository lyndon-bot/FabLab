<?php

include "conn.php";
$U_ID = $_POST['Submit'];
$query = mysqli_query($connect, "Update User set Permission = 'A' where U_ID = '$U_ID'");
header('location: ../Pages/Admin.php');
?>