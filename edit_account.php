<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email = '$customer_session' ";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_country = $row_customer['customer_country'];

$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];

$customer_zip = $row_customer['customer_zip'];


?>



<h1 align="center">Update Your Account Information</h1>


<form action="" method="post" enctype="multipart/form-data"><!--form Begin-->
    
    <div class="form-group"><!--form-group Begin-->
        
        <label>Name </label>
        
        <input type="text" name="c_name" class="form-control" value= "<?php  echo $customer_name; ?>" required>
        
    </div><!--form-group Ending-->
    
    <div class="form-group"><!--form-group Begin-->
        
        <label>Email </label>
        
        <input type="text" name="c_email" class="form-control" value="<?php  echo $customer_email; ?>" required>
        
    </div><!--form-group Ending-->
    
    <div> <!--form-group Begin-->
    <label> Street Address </label>
        
        <input type="text" name="c_address" class="form-control" value="<?php  echo $customer_address; ?>" required>
        
    </div><!--form-group Ending-->
    
        <div class="form-group"><!--form-group Begin-->
        
        <label> City / Town </label>
        
        <input type="text" name="c_city" class="form-control" value="<?php  echo $customer_city; ?>" required>
        
    </div><!--form-group Ending-->
    
            <div class="form-group"><!--form-group Begin-->
        
        <label> Postal Code / Zip Code </label>
        
        <input type="text" name="c_zip" class="form-control" value="<?php  echo $customer_zip; ?>" required>
        
    </div><!--form-group Ending-->
    
              <div class="form-group"><!--form-group Begin-->
        
        <label> Country </label>
        
        <input type="text" name="c_country" class="form-control" value="<?php  echo $customer_country; ?>" required>
        
    </div><!--form-group Ending-->
    
        <div class="form-group"><!--form-group Begin-->
        
        <label> Phone Number </label>
        
        <input type="text" name="c_contact" class="form-control" value="<?php  echo $customer_contact; ?>" required>
        
    </div><!--form-group Ending-->
    
    <div class="text-center"><!--text-center Beging-->
        
        <button name="update" class="btn btn-primary">
            
            <i class="fa fa-user-md"></i> Account Update 
               
        </button>
        
        
    </div><!--text-center Ending-->
   
</form>

<?php 


if(isset($_POST['update'])){
    
    $update_id  = $customer_id;
    
     $c_name = $_POST['c_name'];
    
     $c_email = $_POST['c_email'];
    
     $c_address = $_POST['c_address'];
    
     $c_city = $_POST['c_city'];
    
     $c_zip = $_POST['c_zip'];
    
     $c_country = $_POST['c_country'];
    
     $c_contact = $_POST['c_contact'];
    
    
    $update_customer = "update customers set customer_name ='$c_name', customer_email='$c_email ', customer_country ='$c_country', customer_city ='$c_city',customer_address='$c_address', customer_contact = '$c_contact', customer_zip = '$c_zip' where customer_id = '$update_id' ";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
            
        echo "<script>alert('Your account has been edited, please Re-login to account.')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
    
}


?>
