<?php

include "conn.php";
$U_ID = $_POST['Submit'];
echo $U_ID;
$query = mysqli_query($connect, "Update User set Permission = 'D' where U_ID = '$U_ID'");
header('location: ../Pages/Admin.php');

?>