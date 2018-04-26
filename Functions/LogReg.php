<?php 

$submit = $_POST['submit'];

function register(){
    
    include "conn.php";
    
    $FName =  $_POST['FName'];
    $LName =  $_POST['LName'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];
    $Email = $_POST['Email'];
    
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
    
    $query = mysqli_query($connect,"INSERT INTO User (FName, LName, Username, Password, Permission,Email) VALUES ('$FName ','$LName','$Username','$FPassword','U','$Email')");
    
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
       
        if($_SESSION['Perm'] == 'A'){
            
             header('location: ../Pages/Admin.php');
            
         }else if($_SESSION['Perm'] == 'D'){
             
             header('location: ../Pages/Login.php?error=1');
             
         }else{
         
         $U_ID = $grB['U_ID'];
         date_default_timezone_set("America/New_York");
         $TimeIn = date('H:i:s');
         $Today = date('Y-m-d');
      
        
        if(mysqli_num_rows(mysqli_query($connect,"select * from Log where Date = '$Today' and U_ID = '$U_ID' and TimeOut = '00:00:00'")) == 0){
        
          
          mysqli_query($connect,"INSERT INTO Log(U_ID, TimeIn, TimeOut, Visit, R_ID, Date) VALUES ('$U_ID','$TimeIn','NULL','NULL','NULL','$Today')");
        
        }
   
       header('location: ../Pages/Home.php');
        }
   }else{
       
       header('location: ../Pages/Login.php?error=1');
   }
    
}

function checkin(){
   
  include "conn.php"; 

  $U_ID =  $_SESSION['U_ID'];
  date_default_timezone_set("America/New_York");
  $TimeIn = date('H:i:s');
  $Today = date('Y-m-d');
 
  mysqli_query($connect,"INSERT INTO Log(U_ID, TimeIn, TimeOut, Visit, R_ID, Date) VALUES ('$U_ID','$TimeIn','NULL','NULL','NULL','$Today')");
  header('location: Logout.php');

    
}

function checkout(){
    
  include "conn.php";
  session_start();
  date_default_timezone_set("America/New_York");
  $TimeOut = date('H:i:s');
  $U_ID =  $_SESSION['U_ID'];
  $Visit = $_POST['Visit'];
  $Reason = $_POST['Reason'];
  $Today = date('Y-m-d');
  echo $Visit, $Reason, $U_ID,$Today, $TimeOut;
  mysqli_query($connect,"update Log set TimeOut = '$TimeOut', Visit = '$Visit', R_ID = '$Reason' where Date = '$Today' and U_ID = '$U_ID' and TimeOut = '00:00:00'");
  header('location: Logout.php');
    
    
    
}


switch($submit){
    
case 1: login();
    break;
case 2: register();
    break;
case 3: checkin();
    break;
case 4: checkout();
    break;

}


?>