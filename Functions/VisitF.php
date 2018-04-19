<?php
include "conn.php";

$FName = $_POST['FirstName'];
$LName = $_POST['LastName'];
$Organization = $_POST['Organization'];
$Reason = $_POST['Reason'];
$Duration = $_POST['Duration'];

date_default_timezone_set("America/New_York");
$add = strtotime('+' . $Duration .' hour');

$TimeIn = date('Y-m-d H:i:s');
$TimeOut = date('Y-m-d H:i:s', $add);

$push = mysqli_query($connect, "insert into Visit (FName,LName,TimeIn,TimeOut,Organization,VReason) values ('$FName','$LName','$TimeIn','$TimeOut','$Organization','$Reason')");

header('Location: ../index.php');

?>