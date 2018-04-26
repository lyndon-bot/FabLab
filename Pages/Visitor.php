<html> 

<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>

<body style="background-color:light-gray;">
   <nav class="navbar navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Fab Lab Activity Tracker</a>
  </div>
    </nav>
	
   
 <div class="contaier-fluid">
        
        <div style="margin-left:auto; margin-right:auto; width:50%; margin-top:90px;">
           
           <h1 style="text-align:center;">Visitor Sign In/Out</h1> <br>
              <form  action="../Functions/VisitF.php" method="post"> 
              
					
					<input class="form-control" placeholder="First Name" type="text" Name="FirstName" value=""><br>
					
					
					<input class="form-control" placeholder="Last Name" type="text" Name="LastName" value=""><br>
					     
					
					<input class="form-control" placeholder="Organization" type="text" Name="Organization" value=""><br>
					
					
					<input class="form-control" placeholder="Reason" type="text" Name="Reason" value=""><br>
				
              
                  <button class="form-control btn btn-primary" type="submit" name="submit" value="1">Begin Visit</button>
       
              </form> 
              
                <button class="form-control btn btn-danger" type="submit" data-toggle='modal' data-target='#exampleModal2'>Finish Visit</button>
                
              
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Check Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <form  action="../Functions/VisitF.php" method="post"> 
                      
                        
                        <select class="form-control" name="FirstName" required>
                            <option>Select Your First Name</option>
                            <?php
                                
                                  include "../Functions/conn.php";
                                                                
                                  $query = mysqli_query($connect,"select * from Visit where TimeOut = '0000-00-00 00:00:00'");
                                  
                                  while($get = mysqli_fetch_assoc($query)) {
                                  
                                        echo "<option>" . $get['FName'] . "</option>";
                                  }
                                                                
                            
                            ?>
                            
                        </select><br/>
                        
                        <select class="form-control" name="LastName" required>
                             <option>Select Your Last Name</option>
                            <?php
                                
                                  include "../Functions/conn.php";
                                                                
                                  $query = mysqli_query($connect,"select * from Visit where TimeOut = '0000-00-00 00:00:00'");
                                  while($get = mysqli_fetch_assoc($query)) {
                                        echo "<option>" . $get['LName'] . "</option>";
                                  }
                                                                
                            
                            ?>
                            
                        </select><br/>
                        
                        <select class="form-control" name="Organization" required>
                             <option>Select Your Organization Name</option>
                            <?php
                                
                                  include "../Functions/conn.php";
                                                                
                                  $query = mysqli_query($connect,"select * from Visit where TimeOut = '0000-00-00 00:00:00'");
                                   while($get = mysqli_fetch_assoc($query)) {
                             
                                        echo "<option>" . $get['Organization'] . "</option>";
                                  }
                                                                
                            
                            ?>
                            
                        </select><br/>
                        
                  </div>
                  <div class="modal-footer">
                   
                        <button class="form-control btn btn-danger" name="submit" type="submit" value="2">Checkout</button>
                    
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>  


   </div> 
              
          </div> 
          
        </div>  

         
 <?php
include "../Functions/footer.php";

?>