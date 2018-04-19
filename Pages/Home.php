<?php

include "../Functions/header.php";


?>

<div>
    
   
   <div style="margin-left:auto; margin-right:auto; width:50%; margin-top:120px;">
           
           <h2 style="text-align:center;"> Checkin / Checkout</h2><br>
              <form  action="../Functions/LogReg.php" method="post"> 
              
                  <button class="form-control btn btn-success" name="submit" type="submit" value="1">Checkin</button>
       
              </form> 
              
               <form  action="../Functions/LogReg.php" method="post"> 
              
                  <button class="form-control btn btn-danger" name="submit" type="submit" value="1">Checkout</button>
       
              </form> 
              
   </div> 
   
   
    
    
</div>

<?php

include "../Functions/footer.php";


?>