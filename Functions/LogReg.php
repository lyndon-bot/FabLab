<?php 

$submit = $_POST['submit'];

function register(){
    
    include "conn.php";
    
    $FName =  $_POST['FName'];
    $LName =  $_POST['LName'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];
    
    $check = mysqli_query($connect,"select * from User where Username = '$Username'");
    $unum = mysqli_num_rows($check);
    
    if($Password !== $CPassword && $unum >= 1){
    
     header('location: ../Pages/Register.php?error=3');
        
    }else if($Password !== $CPassword){
        
    header('location: ../Pages/Register.php?error=2');
        
    }else if($unum >= 1){
       
    header('location: ../Pages/Register.php?error=1'); 
        
    }else{
      
    $FPassword = md5($Password);
    
    $query = mysqli_query($connect,"INSERT INTO User (FName, LName, Username, Password, Permission) VALUES ('$FName ','$LName','$Username','$FPassword','U')");
    
    login();  
        
    }
  
    
}


function login(){
    
   include "conn.php";
   
   $Username = $_POST['Username'];
   $Password = md5($_POST['Password']);
   
   $query = mysqli_query($connect,"select * from User where Username = '$Username' and Password = '$Password'");
    
   $grB = mysqli_fetch_assoc($query);
   
   if(mysqli_num_rows($query) == 1){
       
       session_start();
       
       $_SESSION['U_ID'] = $grB['U_ID'];
       $_SESSION['Username'] = $grB['Username'];
       $_SESSION['Perm'] = $grB['Permission'];
   
   
       header('location: ../Pages/Home.php');
       
   }else{
       
       header('location: ../Pages/Login.php?error=1');
   }
    
}


switch($submit){
    
case 1: login();
    break;
case 2: register();
    break;
}


?>