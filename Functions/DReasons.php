<?php

include 'conn.php';
$R_ID = $_POST['Submit'];
echo $R_ID;
$push = mysqli_query($connect, "Update Reason set Status = 'O' where R_ID ='$R_ID'");
header('location: ../Pages/Admin.php');
?>