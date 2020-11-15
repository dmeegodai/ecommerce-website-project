<h1 align="center">Update Your Current Password</h1>

<form action="" method="post"><!--form Begin-->
    
    <div class="form-group"><!--form-group Begin-->
        
        <label>Old Password </label>
        
        <input type="text" name="old_pass" class="form-control" required>
        
    </div><!--form-group Ending-->
    
    <div class="form-group"><!--form-group Begin-->
        
        <label>New Password </label>
        
        <input type="text" name="new_pass" class="form-control" required>
        
    </div><!--form-group Ending-->
    
       
    <div class="form-group"><!--form-group Begin-->
        
        <label>Confirm New Password </label>
        
        <input type="text" name="new_pass_confirm" class="form-control" required>
        
    </div><!--form-group Ending-->
    
    
    <div class="text-center"><!--text-center Beging-->
        
        <button type="submit" name="submit" class="btn btn-primary">
            
            <i class="fa fa-user-md"></i> Update Now
               
        </button>
        
    </div><!--text-center Ending-->
   
</form>

<?php

if(isset($_POST['submit'])){
    
    $c_mail = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass']; 
    
    $c_new_pass_confirm= $_POST['new_pass_confirm']; 
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass' ";
    
    $run_c_old_pass = mysqli_query($con, $sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo"<script>alert('Sorry, your current password is not valid. Try again.')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_confirm){
        
        echo"<script>alert('Sorry, your new password did not match')</script>";
        exit();
    }
    
    $update_c_pass = "update customers set customer_pass = '$c_new_pass' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Your password has updated')</script>";
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
        
}


?>