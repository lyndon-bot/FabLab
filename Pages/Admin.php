<?php

include "../Functions/header.php";


?>

<div class="container" style="margin-top:45px;">
  <h2>Users</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
        
        <?php     
            
            include "../Functions/conn.php";
                                                                
            $query = mysqli_query($connect,"select * from User");
            while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['Username'] ."</td><td>". $get['Permision'] ."</td></tr>";
             }
            
        
        
        ?>
    </tbody>
  </table>
</div>

<div class="container">
  <h2>Non-Checked Out</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th>TimeIn</th>
        <th>TimeOut</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      
       <?php     
            
            include "../Functions/conn.php";
            
            date_default_timezone_set("America/New_York");
            $Today = date('Y-m-d');
         
            $query = mysqli_query($connect,"select * from Log inner join User on User.U_ID = Log.U_ID where Date = '$Today' and TimeOut = '00:00:00' ");
             while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['Username'] ."</td><td>". $get['TimeIn'] ."</td><td>". $get['TimeOut'] ."</td><td>". $get['Date'] ."</td></tr>";
             }
            
        
        
        ?>
        
    </tbody>
  </table>
</div>


<div class="container">
  <h2>Visitor Log</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Time In</th>
        <th>Time Out</th>
        <th>Organization</th>
        <th>Reason</th>
      </tr>
    </thead>
    <tbody>
      
       <?php     
            
            include "../Functions/conn.php";
            
            date_default_timezone_set("America/New_York");
            $Today = date('Y-m-d');
         
            $query = mysqli_query($connect,"select * from Visit");
            while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['TimeIn'] ."</td><td>". $get['TimeOut'] ."</td><td>". $get['Organization'] ."</td><td>". $get['vReason'] ."</td></tr>";
             }
            
        
        
        ?>
      
    </tbody>
  </table>
</div>

<div class="container">
  <h2>User Log</h2>
  <table class="table table-striped">
    <thead>
      <tr>
       <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th>TimeIn</th>
        <th>TimeOut</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      
       <?php     
            
            include "../Functions/conn.php";
            
            date_default_timezone_set("America/New_York");
            $Today = date('Y-m-d');
         
            $query = mysqli_query($connect,"select * from Log inner join User on User.U_ID = Log.U_ID");
            while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['Username'] ."</td><td>". $get['TimeIn'] ."</td><td>". $get['TimeOut'] ."</td><td>". $get['Date'] ."</td></tr>";
             }
            
        
        
        ?>
      
    </tbody>
  </table>
</div>









<?php

include "../Functions/footer.php";


?>