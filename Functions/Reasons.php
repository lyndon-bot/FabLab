<?php

include 'conn.php';
$Reason = $_POST['Reason'];
$push = mysqli_query($connect, "insert into Reason (Reason,Status) Values ('$Reason','N')");
header('location: ../Pages/Admin.php');

?>