<?php

include "../Functions/header.php";

 $U_ID  = $_SESSION['U_ID'];
 date_default_timezone_set("America/New_York");
 
?>

<div>
    
   
   <div style="margin-left:auto; margin-right:auto; width:50%; margin-top:120px;">
           
           <h2 style="text-align:center;"> Checkin / Checkout</h2><br>
              
                  <?php    
                        $Today = date('Y-m-d');
                        
                        if(mysqli_num_rows(mysqli_query($connect,"select * from Log where Date = '$Today' and U_ID = '$U_ID' and TimeOut = '00:00:00'")) == 0 ){
                            
                           echo "
                           
                           <div>
                            <button class='form-control btn btn-success' style='margin-bottom:10px;' name='submit' type='submit' value='1' data-toggle='modal' data-target='#exampleModal1'>Checkin</button>
                          </div>
                           
                           
                           
                           "
                           
                           
                           
                           ;
                            
                            
                        }
                        
                        
                        if(mysqli_num_rows(mysqli_query($connect,"select * from Log where Date = '$Today' and U_ID = '$U_ID' and TimeOut = '00:00:00'")) == 1 ){
                            
                           echo "
                           
                           <div>
                            <button class='form-control btn btn-danger' style='margin-bottom:10px;' name='submit' type='submit' value='1' data-toggle='modal' data-target='#exampleModal2'>Checkout</button>
                          </div>
                           
                           
                           
                           "
                           
                           
                           
                           ;
                            
                            
                        }
                  
                  
                  ?>
                 
              
            <!-- Button trigger modal -->
            
            <!-- Modal 1 -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Check In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form  action="../Functions/LogReg.php" method="post"> 
                      
                          
                          <h4>Just Click Below</h4>
                     
                    
                  </div>
                  <div class="modal-footer">
                   
                    <button class="form-control btn btn-success" name="submit" type="submit" value="3">Checkin</button>
                    
                     </form>
                     
                  </div>
                </div>
              </div>
            </div>  
            
             <!-- Modal 2-->
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
                       <form  action="../Functions/LogReg.php" method="post"> 
                      
                        <select class="form-control" name="Reason" required>
                           
                           <?php     
            
                                include "../Functions/conn.php";
                             
                                $query = mysqli_query($connect,"select * from Reason where Status = 'N'");
                                while($get = mysqli_fetch_assoc($query)) {
                                 echo "<option value='". $get['R_ID'] ."'>". $get['Reason'] ."</option>";
                                 }
                                
                            
                            
                            ?>
                            
                        </select><br/>
                        
                        <input class="form-control" type="text" placeholder="Please Describe your Visit" name="Visit" required/>
                        
                  </div>
                  <div class="modal-footer">
                   
                        <button class="form-control btn btn-danger" name="submit" type="submit" value="4">Checkout</button>
                    
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>  


   </div> 
   
   
    
    
</div>

<?php

include "../Functions/footer.php";


?>