   
<?php

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo"<script>window.open('checkout.php','_self')<script>";
    
} else{

include("includes/db.php");
include("functions/functions.php");
    
    if(isset($_GET['order_id'])){
        
        $order_id = $_GET['order_id'];
        
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nikkie's Craft Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div id="top">
        <!-- Top Begining -->
        <div class="container">
            <!--Container Begining -->
            <div class="col-md-6 offer">
                <!--col-md-6 offer Begining -->
                <a href="#" class="btn btn-success btn-sm">
                    <?php
                    
                    if(!isset($_SESSION['customer_email'])){
                        
                        echo "Welcome: Guest";
                                                
                    } else {
                        
                        echo"Welcome: " .$_SESSION['customer_email' ]. "";
                        
                    }
                    
                    ?>
                    
                </a>
                <a href="checkout.php"><?php items(); ?> Items in your cart | Total Price: <?php total_price(); ?> </a>
            </div>
            <!--col-md-6 offer Ending -->
            <div class="col-md-6">
                <!--col-md-6 Begining -->
                <ul class="menu">
                    <!--menu Begining -->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">To Cart</a>
                    </li>
                    <li>
                        <a href="cart.php">
                            
                            <?php
                              if(!isset($_SESSION['customer_email'])){
                        
                                echo "<a href='checkout.php'>Login</a>";

                            } else {

                                echo "<a href='logout.php'>Log out</a>";

                            }
                             
                            
                            ?>
                        </a>
                    </li>
                </ul>
                <!--menu Ending -->
            </div>
            <!--col-md-6 Ending -->
        </div>
        <!--Container Ending -->
    </div><!-- Top Ending -->

    <div id="navbar" class="navbar navbar-default">
        <!--navbar navbar-default Begining-->
        <div class="container">
            <!--container Begining-->

            <div class="navbar-header">
                <!--navbar-header Begining-->

                <a href="index.php" class="navbar-brand home">
                    <!--navbar-brand home Begining-->

                    <img src=".//images/ecom-nick-web.png" alt="Nikki's-craft-store-logo-web" class="hidden-xs">
                    <img src=".//images/ecom-mick-mob.png" alt="Nikki's-craft-store-logo-mobile" class="visible-xs">
                    

                </a>
                <!--navbar-brand home Ending--->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div>
            <!--navbar-header Ending-->

            <div class="navbar-collapse collapse" id="navigation">
                <!--navbar-collapse collapse Begining-->

                <div class="padding-nav">
                    <!--padding-nav Begining-->
                    <ul class="nav navbar-nav left">
                        <!--nav navbar-nav left Begining-->
                        <li class="<?php if($active=='Home') echo"active"; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if($active=='Shop') echo"active"; ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if($active=='My Account') echo"active"; ?>">
                          
                          <?php 
                            
                            if(!isset($_SESSION['customer_email'])){
                                
                                echo"<a href='checkout.php'>My Account</a>";
        
                            }else{
                                
                                 echo"<a href='my_account.php?my_orders'>My Account</a>";
                                
                            }
                            
                            ?>
                           
                        </li>
                        <li class="<?php if($active=='Shopping cart') echo"active"; ?>">
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li class="<?php if($active=='Contact Us') echo"active"; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <!--nav navbar-nav left Ending-->

                </div>
                <!--padding-nav Ending-->


                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!--btn navbar-btn btn-primary right Begining-->

                    <i class="fa fa-shopping-cart"></i>

                    <span> <?php items(); ?> Items In Your Cart </span>

                </a>
                <!--btn navbar-btn btn-primary right Ending-->

                <div class="navbar-collapse collapse right">
                    <!--navbar-collapse collapse right Begining-->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!--btn btn-primary navbar-btn Begining-->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button>
                    <!--btn btn-primary navbar-btn Ending-->

                </div>
                <!--navbar-collapse collapse right Ending-->

                <div class="collapse clearfix" id="search">
                    <!--collapse clearfix Begining-->

                    <form method="get" action="result.php" class="navbar-form">
                        <!--navbar-form Begining-->


                        <div class="input-group">
                            <!--input-group Begining-->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!--input-group-btn Begining-->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!--btn btn-primary Begining-->

                                    <i class="fa fa-search"></i>

                                </button>
                                <!--input-group-btn Ending-->

                            </span>
                            <!--btn btn-primary Ending-->

                        </div>
                        <!--input-group Ending-->

                    </form>
                    <!--navbar-form Ending-->

                </div>
                <!--collapse clearfix Ending-->

            </div>
            <!--navbar-collapse collapse Ending-->

        </div>
        <!--container Ending-->

    </div>
    <!--navbar navbar-default Ending-->
   
  

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
                        My Account
                    </li>
                </ul>
                <!--breadcrumb Ending-->
            </div>
            <!--col-md-12 Ending-->
            <div class="col-md-3">
                <!--col-md-3 Begin-->

                <?php 
    
    include("customer/sidebar.php");
    
    ?>
            </div>
            <!--col-md-3 Ending-->

            <div class="col-md-9">
                <!--col-md-9 Begin-->
            
            
            <div class="box"><!--Box Begin-->
                
                <h1 align="center">
                    
                    Please confirm your payment
                    
                </h1>
                
                <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"> <!--form Begin-->
                    
                    <div class="form-group">
                        
                        <label> Invoice No: </label>
                        
                        <input type="text" class="form-control" name ="invoice_no" required> 
                        
                    </div>
                    
                           <div class="form-group">
                        
                        <label> Amount Sent: </label>
                        
                        <input type="text" class="form-control" name ="amount_sent" required> 
                        
                    </div>
                    
                           <div class="form-group">
                        
                        <label> Select payment methord </label>
                        
                        <select name="payment_mode" class="form-control">
                            
                            <option>Select payment mode</option>
                            <option>Bank Transfer</option>
                            <option>Viza</option>
                            <option>Master</option>
                            
                            
                        </select>
                        
                    </div>
                    
                      <div class="form-group">
                        
                        <label> Reference ID </label>
                        
                        <input type="text" class="form-control" name ="ref_no" required> 
                        
                    </div>
                    
                         <div class="form-group">
                        
                        <label> Payment Date: </label>
                        
                        <input type="text" class="form-control" name ="date" required> 
                        
                    </div>
                    
                    <div class="text-center">
                        
                        <button class="btn btn-primary btn-lg" name="confirm_payment">
                            
                            <i class="fa fa-user-md"></i> Confirm Payment
                            
                        </button>
                        
                    </div>
                    
                </form><!--form Ending-->
                <?php
                
                if(isset($_POST['confirm_payment'])){
                  
                    $update_id = $_GET['update_id'];
                    $invoice_no = $_POST['invoice_no'];
                    $amount = $_POST['amount_sent'];
                    $payment_mode = $_POST['payment_mode'];
                    $ref_no = $_POST['ref_no'];
                    $payment_date = $_POST['date'];
                    
                    $complete = "Complete";
                    
                    $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$payment_date')";
                    
                    $run_payment = mysqli_query($con,$insert_payment);
                    
                    $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                    
                    $run_customer_order = mysqli_query($con,$update_customer_order);
                    
                    $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                    
                    $run_pending_order = mysqli_query($con,$update_pending_order);
                    
                    if($run_pending_order){
                        
                        echo "<script>alert('Thank you for your purchase. Your order will process with in next 24 hours.')</script>";
                        
                        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                        
                    }
 
                }
                
                ?>
                
                
            </div><!--Box Ending-->


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
 <?php } ?>