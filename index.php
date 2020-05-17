<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
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
                <a href="#" class="btn btn-success btn-sm">Test Button</a>
                <a href="checkout.php">Shoping Cart Total Price Rs1500 </a>
            </div>
            <!--col-md-6 offer Ending -->
            <div class="col-md-6">
                <!--col-md-6 Begining -->
                <ul class="menu">
                    <!--menu Begining -->
                    <li>
                        <a href="curomer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">To Cart</a>
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
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My account</a>
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

                    <span> 2 Items In Your Cart </span>

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

    <script src="js/jquery-331.min.js"> </script>
    <script src="js/bootstrap-337.min.js"></script>

</body>

</html>
