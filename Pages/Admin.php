<?php

include "../Functions/header.php";

if($_SESSION['Perm'] == 'A'){
  
}else{
  
  header('location: Home.php');
}

?>

<div class="container" style="margin-top:45px;">
  <h2>Users</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th> Permision</th>
        <th>Email</th>
        <th> Give Permision</th>
        <th> Delete </th>
      </tr>
    </thead>
    <tbody>
        
        <?php     
            
            include "../Functions/conn.php";
                                                                
            $query = mysqli_query($connect,"select * from User where Permission = 'U'");
            while($get = mysqli_fetch_assoc($query)) {
              
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['Username'] ."</td><td>". $get['Permission'] ."</td><td>" . $get['Email'] . "</td>
             
             <td>
                <form method='post' action='../Functions/AdminU.php'>
                    <button class='form-control btn btn-primary' name='Submit' value='" . $get['U_ID'] ."'> Admin</button>
                </form>
             </td>
             <td>
             <form method='post' action='../Functions/DeleteU.php'>
                    <button class='form-control btn btn-danger' name='Submit' value='" . $get['U_ID'] ."'> Delete</button>
                </form>
             </td></tr>";
             }
            
        
        
        ?>
    </tbody>
  </table>
</div>

<div class="container">
 <h2>Admin</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th> Permision</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        
        <?php     
            
            include "../Functions/conn.php";
                                                                
            $query = mysqli_query($connect,"select * from User where Permission = 'A'");
            while($get = mysqli_fetch_assoc($query)) {
              
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['Username'] ."</td><td>". $get['Permission'] ."</td><td>" . $get['Email'] . "</td></tr>";
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
         
            $query = mysqli_query($connect,"select * from Visit inner join Reason on Visit.R_ID = Reason.R_ID");
            while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['FName'] ."</td><td>". $get['LName'] ."</td><td>". $get['TimeIn'] ."</td><td>". $get['TimeOut'] ."</td><td>". $get['Organization'] ."</td><td>". $get['Reason'] ."</td></tr>";
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

<div class="container">
  <form method="post" action="../Functions/Reasons.php">
    <h2> Create Reason </h2>
    
    	<input class="form-control" placeholder="Reason or Project" type="text" Name="Reason" value="" required><br>
              
      <button class="form-control btn btn-primary" name="submit" type="submit" value="1">Create</button>
    
  </form>
</div>

<div class="container">
  <h2>Reason</h2>
  <table class="table table-striped">
    <thead>
      <tr>
       <th>R_ID</th>
        <th>Reason</th>
      </tr>
    </thead>
    <tbody>
      
       <?php     
            
            include "../Functions/conn.php";
         
            $query = mysqli_query($connect,"select * from Reason where Status = 'N'");
            while($get = mysqli_fetch_assoc($query)) {
             echo "<tr><td>". $get['R_ID'] ."</td><td>". $get['Reason'] ."</td>
             
              <td>
                <form method='post' action='../Functions/DReasons.php'>
                    <button class='form-control btn btn-danger' name='Submit' value='" . $get['R_ID'] ."'> Delete</button>
                </form>
             </td>
             
             </tr>";
             }
            
        
        
        ?>
      
    </tbody>
  </table>
</div>







<?php

include "../Functions/footer.php";


?>