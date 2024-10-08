<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php


if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id']; 
    
    $get_product = "select * from product where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product); 
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];  
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
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="../my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">To Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">
                            
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li>
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