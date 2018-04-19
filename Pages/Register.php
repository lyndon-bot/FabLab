<html> 

<head>
    
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>   
    
</head>

<body style="background-color:light-gray;">
   <nav class="navbar navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Fab Lab Activity Tracker</a>
  </div>
    </nav>

<div class="contaier-fluid">
        
        <div style="margin-left:auto; margin-right:auto; width:50%; margin-top:90px;">
           
           <h1 style="text-align:center;">Register</h1> <br>
              <form  action="../Functions/LogReg.php" method="post"> 
              
                    <input class="form-control" placeholder="First Name" type="text" Name="FName" value="" required><br>
                     
					<input class="form-control" placeholder="Last Name" type="text" Name="LName" value="" required><br>
		
		            <?php 
    					if($_GET['error'] == 1){
                             echo "<h6 style='color:red;'> Your Username Exists </h6>";
                           } 
                     ?>
                     
					<input class="form-control" placeholder="Username" type="text" Name="Username" value="" required><br>
					
					<?php 
    					if($_GET['error'] == 2){
                             echo "<h6 style='color:red;'> Your Passwords do not the match </h6>";
                           } 
                     ?>
					<input class="form-control" placeholder="Password" type="password" Name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,at least 8 or more characters, and one special character" required><br>
					
					<input class="form-control" placeholder="Confirm Password" type="password" Name="CPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,at least 8 or more characters, and one special character" required><br>
					  
              
                  <button class="form-control btn btn-primary" type="submit" name="submit" value="2">Register</button>
       
              </form> 
              
          </div> 
          
        </div>  


<?php

include "../Functions/footer.php";


?>