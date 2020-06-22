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

    <div class="container" id="slider">
        <!--container Begining-->

        <div class="col-md-12">
            <!--col-md-12 Begining-->

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!--carousel slide Begining-->

                <ol class="carousel-indicators">
                    <!--carousel-inidcators slide Begining-->

                    <li class="active" data-target="#myCarousel" data-slide-to="0"> </li>
                    <li data-target="#myCarousel" data-slide-to="1"> </li>
                    <li data-target="#myCarousel" data-slide-to="2"> </li>
                    <li data-target="#myCarousel" data-slide-to="3"> </li>

                </ol>
                <!--carousel-inidcators slide Ending-->

                <div class="carousel-inner">
                    <!--carousel-inner Begining-->

                    <div class="item active">

                        <img src="admin_area/slides_images/Slide1.jpg" alt="Slider Image 1">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/Slide2.jpg" alt="Slider Image 2">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/Slide3.jpg" alt="Slider Image 3">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/Slide4.jpg" alt="Slider Image 4">

                    </div>

                </div>
                <!--carousel-inner Ending-->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>


                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>


                </a>

            </div>
            <!--carousel slide Ending-->


        </div>
        <!--col-md-12 Ending-->


    </div>
    <!--container Ending-->

    <div id="advantages">
        <!--advantages Begin-->

        <div class="container">
            <!--container Begin-->

            <div class="same-height-row">
                <!--same-height-row Begin-->

                <div class="col-sm-4">
                    <!--col-sm-4 Begin-->

                    <div class="box same-height">
                        <!--box same-height Begin-->

                        <div class="icon">
                            <!--icon Begin-->

                            <i class="fa fa-heart"></i>

                        </div>
                        <!--icon Ending-->

                        <h3><a href="#">Latest Offers</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <!--box same-height Ending-->

                </div>
                <!--col-sm-4 Ending-->

                <div class="col-sm-4">
                    <!--col-sm-4 Begin-->

                    <div class="box same-height">
                        <!--box same-height Begin-->

                        <div class="icon">
                            <!--icon Begin-->

                            <i class="fa fa-tag"></i>

                        </div>
                        <!--icon Ending-->

                        <h3><a href="#">Best Price</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <!--box same-height Ending-->

                </div>
                <!--col-sm-4 Ending-->

                <div class="col-sm-4">
                    <!--col-sm-4 Begin-->

                    <div class="box same-height">
                        <!--box same-height Begin-->

                        <div class="icon">
                            <!--icon Begin-->

                            <i class="fa fa-thumbs-up"></i>

                        </div>
                        <!--icon Ending-->

                        <h3><a href="#">100% handmade </a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <!--box same-height Ending-->

                </div>
                <!--col-sm-4 Ending-->

            </div>
            <!--same-height-row Ending-->


        </div>
        <!--container Ending -->

    </div>
    <!--advantages Ending-->

    <div id="hot">
        <!--hot Begin-->
        <div class="box">
            <!--box Begin-->
            <div class="container">
                <!--container Begin-->

                <div class="col-md-12">
                    <!--col-md-12 Begin-->

                    <h2>

                        Latest Product Line

                    </h2>

                </div>
                <!--col-md-12 Begin-->

            </div>
            <!--container Ending-->
        </div>
        <!--box Ending-->

    </div>
    <!--hot Ending-->

    <div id="content" class="container">
        <!--content Begin-->

        <div class="row">
            <!--row Begin-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product1.jpg" alt="Product 1">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 01
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product2.jpg" alt="Product 2">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 02
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product1.jpg" alt="Product 1">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 03
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product2.jpg" alt="Product 2">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 02
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product1.jpg" alt="Product 1">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 01
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product2.jpg" alt="Product 2">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 02
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product1.jpg" alt="Product 1">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 03
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->

            <div class="col-sm-4 col-sm-6 single">
                <!--col-sm-4 col-sm-6 single Begin-->

                <div class="product">
                    <!--product Begin-->

                    <a href="details.php">

                        <img class="img-responsive" src="./admin_area/product_images/Product2.jpg" alt="Product 2">

                    </a>
                    <div class="text">
                        <!--text Begin-->

                        <h3>

                            <a href="details.php">
                                Item 02
                            </a>

                        </h3>
                        <p class="price"> Rs.850 </p>
                        <p class="button">

                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>


                    </div>
                    <!--text Ending-->

                </div>
                <!--product Ending-->

            </div>
            <!--col-sm-4 col-sm-6 single Ending-->
        </div>
        <!--row Ending-->

    </div>
    <!--content Ending-->


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>
