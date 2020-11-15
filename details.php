 
 <?php 
$active='Shop';
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
                        Shop
                    </li>
                    
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                        
                    </li>
                    
                    <li> <?php echo $pro_title; ?> </li>
                    
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
                 
                <div id="productMain" class="row">
                    <!--row Begin-->
                    <div class="col-sm-6">
                        <!--col-md-6 Begin-->
                        <div id="mainImage">
                            <!--mainImage Begin-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!--carousel slide Begin-->
                                <ol class="carousel-indicators">
                                    <!--carousel-indicator Begin-->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!--carousel-indicator Ending-->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product view 1.1"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product view 1.2"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product view 1.3"></center>
                                    </div>
                                </div>
                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <!--left carousel-control Begin-->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <!--left carousel-control Ending-->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <!--right carousel-control Begin-->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--right carousel-control Ending-->
                            </div>
                            <!--carousel slide Ending-->
                        </div>
                        <!--mainImage Ending-->
                    </div>
                    <!--col-md-6 Ending-->

                    <div class="col-sm-6">
                        <!--col-md-6 Begin-->
                        <div class="box">
                            <h1 class="text-center"><?php echo $pro_title; ?></h1>
                            
                            <?php add_cart(); ?>
                            
                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Quantity</label>

                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>

                                <p class="price">Rs.<?php echo $pro_price; ?></p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                            </form>

                        </div>
                        <!--row Begin-->

                        <div class="row" id="thumbs">
                            <!--row Ending-->

                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 1" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 2" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!--col-md-6 Ending-->
                    </div>

                </div>
                
                <div class="box" id="details"><!--box Begin-->
                   <h4>Product Details </h4>
                   <p>
                      
                      <?php echo $pro_desc; ?>
                       
                   </p>
                    <hr>
                </div><!--box Ending-->
                
                <div id="row same-heigh-row"><!--row same-heigh-row Begin-->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Begin-->
                        <div class="box same-height headline"><!--box same-height headline Begin-->
                            <h3 class="text-center">Products that you may be like </h3>
                        </div><!--box same-height headline Ending-->
                    </div><!--col-md-3 col-sm-6 Ending-->
                    
                    <?php
                    
                        $get_products =  "select * from product order by rand() LIMIT 0,3";
                    
                        $run_products = mysqli_query($con,$get_products);
                    
                          while($row_products=mysqli_fetch_array($run_products)){
                              
                               $pro_id = $row_products['product_id'];
                              
                                $pro_title= $row_products['product_title'];
                              
                                $pro_img1 = $row_products['product_img1'];
                              
                               $pro_price = $row_products['product_price'];
                              
                              echo "
                              
                              <div class='col-md-3 col-sm-6 center-responsive'>
                                
                                <div class= 'product same-height'>
                                
                                <a href ='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                    
                                </a>
                                
                                 <div class='text'>
                                 
                                 <h3> <a href='details.php?pro_id=$pro_id'> $pro_title</a> </h3>
                                 
                                 <p class='price'>Rs.$pro_price </p>
                                 
                                 </div>
                                
                                </div>
                                
                                </div>
                              ";
                              
                          }  
                        
                    
                    
                    ?>
                 
                    
                </div><!--row same-heigh-row Ending-->
            </div>
            <!--col-md-9 Ending -->

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
