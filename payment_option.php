<div class="box"><!--box Begin -->
   
   <?php
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email = '$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    ?>
    
    <h1 class="text-center">Available Payment Methords</h1>
    
    <p class="lead text-center"><!--lead text-cente Begin -->
        
        
        <a href="order.php?c_id=<?php echo $customer_id ?>"> Cash On Delivery (COD) </a>
        
        

    </p><!--lead text-cente Ending -->
    
    <center><!--box Begin -->
        
        <p class="lead"><!--lead Begin -->
            
            <a href="#">
                
                On line Payment
                
                <img class="img-responsive" src="images/onlinepay.png" alt="img-online">
                
            </a>
            
        </p><!--lead Ending -->
        
        
        
    </center><!--center Ending -->
    
</div><!--box Ending -->