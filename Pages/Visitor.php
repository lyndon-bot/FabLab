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
           
           <h1 style="text-align:center;">Visitor Sign In</h1> <br>
              <form  action="../Functions/VisitF.php" method="post"> 
              
					
					<input class="form-control" placeholder="First Name" type="text" Name="FirstName" value=""><br>
					
					
					<input class="form-control" placeholder="Last Name" type="text" Name="LastName" value=""><br>
					     
					
					<input class="form-control" placeholder="Organization" type="text" Name="Organization" value=""><br>
					
					
					<input class="form-control" placeholder="Reason" type="text" Name="Reason" value=""><br>
					     
					
					<input class="form-control" placeholder="Duration" type="text" Name="Duration" value=""><br>
					
              
              
              
              
                  <button class="form-control btn btn-primary" type="submit">Visit</button>
       
              </form> 
              
          </div> 
          
        </div>  

         
 <?php
include "../Functions/footer.php";

?>