<?php

$submit = $_POST['submit'];

function visitI(){
    
include "conn.php";

$FName = $_POST['FirstName'];
$LName = $_POST['LastName'];
$Organization = $_POST['Organization'];
$Reason = $_POST['Reason'];

date_default_timezone_set("America/New_York");

$TimeIn = date('Y-m-d H:i:s');


$push = mysqli_query($connect, "insert into Visit (FName,LName,TimeIn,TimeOut,Organization,VReason) values ('$FName','$LName','$TimeIn','0000-00-00 00:00:00','$Organization','$Reason')");

header('Location: ../index.php');

}

function visitO(){
  
  include "conn.php";
  
  date_default_timezone_set("America/New_York");
  $TimeOut = date('Y-m-d H:i:s');
  $FName = $_POST['FirstName'];
  $LName = $_POST['LastName'];
  $Organization = $_POST['Organization'];
  
  $update = mysqli_query($connect,"UPDATE Visit SET TimeOut = '$TimeOut' WHERE LName = '$LName' and FName ='$FName' and Organization = '$Organization' ");
    
  header('Location: ../index.php');
    
    
}





switch($submit){
    
case 1: visitI();
    break;
case 2: visitO();
    break;
}

?>