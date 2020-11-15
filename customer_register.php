<?php 
$active='Account';
 include("includes/header.php");

?>

    <div id="content">
        <!--content Begin-->
        <div class="container">
            <!--container Begin-->
            <div class="col-md-12">
                <!--col-md-12 Begin-->

                <ul class="breadcrumb">
                    <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Regsiter
                    </li>
                </ul>
                <!--breadcrumb Ending-->
            </div>
            <!--col-md-12 Ending-->
            <div class="col-md-3">
                <!--col-md-3 Begin-->

                <?php 
    
    include("includes/sidebar.php");
    
    ?>

            </div>
            <!--col-md-3 Ending-->


            <div class="col-md-9">
                <!--col-md-9 Begin-->

                <div class="box">
                    <!--box Begin-->

                    <div class="box-header">
                        <!--box-header Begin-->

                        <center>

                            <h2>New customer registration</h2>
                            <p class="tetx-muted">


                            </p>
                        </center>

                        <form action="customer_register.php" method="post"  enctype="multipart/form-data">
                            <!--form Begin-->

                            <div class="form-group">
                                <label>Name</label>

                                <input type="text" class="form-control" name="c_name" required>
                            </div>

                            <div class="form-group">
                                <label>Your Email</label>

                                <input type="text" class="form-control" name="c_email" required>
                            </div>

                            <div class="form-group">
                                <label>Your Password</label>

                                <input type="password" class="form-control" name="c_pass" required>
                            </div>

                            <div class="form-group">
                                <label>Street Address</label>

                                <input type="text" class="form-control" name="c_address" required>
                            </div>

                            <div class="form-group">
                                <label>City / Town</label>

                                <input type="text" class="form-control" name="c_city" required>
                            </div>

                            <div class="form-group">
                                <label>Postal Code / Zip Code</label>

                                <input type="text" class="form-control" name="c_zip" required>
                            </div>

                            <div class="form-group">
                                <label>Country</label>

                                <input type="text" class="form-control" name="c_country" required>
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>

                                <input type="number" class="form-control" name="c_contact" required>
                            </div>

                            <text class="text-center">

                                <button type="submit" name="register" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Create Account

                                </button>
                            </text>

                        </form>
                        <!--form Ending-->
                    </div>
                    <!--box-header Ending-->
                </div>
                <!--box Ending-->

            </div>
            <!--col-md-9 Ending-->

        </div>
        <!--container Ending-->
    </div>
    <!--content Ending-->

    <?php 
    
    include("includes/footer.php");
    
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>


<?php

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_zip = $_POST['c_zip'];
    
    $c_ip = getRealIpUser();
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_zip,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_zip','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have Registred Sucessfully')</script>";
       
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        $_SESSION['customer_email']=$c_email;

        echo "<script>alert('You have Registred Sucessfully')</script>";
    
       echo "<script>window.open('index.php','_self')</script>";
        
        
    }

    
}

?>