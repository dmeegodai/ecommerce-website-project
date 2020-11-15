<?php 
$active='Shopping cart';
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
                        Shoping Cart
                    </li>
                </ul>
                <!--breadcrumb Ending-->
            </div>
            <!--col-md-12 Ending-->
            
        <div id="cart" class="col-md-9"><!--col-md-9 Begin-->
            
            <div class="box"><!--box Begin-->
                
                <form action="cart.php" method="post" enctype="multipart/form-data"><!--form Begin-->
                    
                    <h1>Shopping Cart</h1>
                    
                    <?php
                    
                    $ip_add = getRealIpUser();
                    
                    $select_cart = "select *from cart where ip_add='$ip_add' ";
                    
                    $run_cart = mysqli_query($con,$select_cart);
                    
                    $count = mysqli_num_rows($run_cart);
                    
                    
                    ?>
                    
                    
                    <p class="text-muted">You Currently have <?php echo $count; ?> item(s) in your cart</p>
                    
                    <div class="table-responsive"><!--table-responsive Begin-->
                        
                    <table class="table"><!--table Begin-->
                        
                        <thead>
                            
                            <tr>
                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th>Unite Price </th>
                                <th colspan="1">Delete</th>
                                <th colspan="2">Sub-Total</th> 
                            </tr>
                            
                        </thead>
                        
                        <tbody><!--tbody Begin-->
                           
                           <?php  
                            
                            $total = 0;
                            
                            while($row_cart = mysqli_fetch_array($run_cart)){
                                
                                 $pro_id = $row_cart['p_id'];
                                 //$pro_size = $row_cart['size'];
                                 $pro_qty = $row_cart['qty'];
                                
                                 $get_products = "select * from product where product_id='$pro_id'";
                                 
                                 $run_products = mysqli_query($con,$get_products);
                                
                                 while($row_products = mysqli_fetch_array($run_products)){
                                     
                                 
                                  $product_title = $row_products['product_title'];
                                  $product_img1 = $row_products['product_img1'];
                                  $only_price = $row_products['product_price'];   
                                  $sub_total = $row_products['product_price']*$pro_qty;
                                  
                                  $total += $sub_total; 
                                
                            ?>
                            
                            <tr><!--tr Begin-->
                               
                                <td>
                                    
                                    <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 1">
                                    
                                </td> 
                                 <td>
                                     
                                     
                                    <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a>
                                    
                                 </td>
                                 
                                 <td>
                                     
                                     <?php echo $pro_qty; ?>
                                     
                                 </td>
                                 
                                 <td>
                                     
                                     <?php echo $only_price; ?>
                                                                          
                                 </td>
                                 
                                 <td>
                                     
                                     <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                     
                                 </td>
                                 
                                 <td>
                                     
                                     Rs.<?php echo $sub_total; ?>
                                     
                                 </td>
                                 
                            
                            </tr><!--tr Ending-->
                            
                            <?php }  } ?>
                            
                        </tbody><!--tbody Ending-->
                           
                        

                        
                        <tfoot><!--tfoot Begin-->
                            
                            <tr><!--tfoot Begin-->
                                
                                <th colspan="5">Total</th>
                                <th colspan="2">Rs.<?php echo $total; ?></th>
                                
                                
                            </tr><!--tfoot Finish-->
                            
                            
                        </tfoot><!--tfoot Ending-->
                        
                    </table><!--table Ending-->
                        
                    </div><!--table-responsive Ending-->
                    
                    
                    <div class="box-footer"><!--box-foote Begin-->
                        
                        <div class="pull-left"><!--pull-left Begin-->
                        
                        <a href="shop.php" class="btn btn-default"><!--pbtn-btn-defualt Begin-->
                            
                            <i class="fa fa-chevron-left"></i> Conitinue Shopping
                            
                        </a><!--pbtn-btn-defualt Ending-->
                        </div><!--pull-left Ending-->
                        
                    <div class="pull-right"><!--pull-right Begin-->
                        
                        <button type="submit" name ="update" value="Update Cart" class="btn btn-default"><!--pbtn-btn-defualt Begin-->
                            
                            <i class="fa fa-refresh"></i> Update Cart
                            
                        </button><!--pbtn-btn-defualt Ending-->
                        
                        <a href="checkout.php" class="btn btn-primary">
                            
                            Proceed Checkout <i class="fa fa-chevron-right"></i>
                        </a>
                        
                        </div><!--pull-right Ending-->
                        
                    </div><!--box-foote Ending-->
                    
                </form><!--form Ending-->
                
            </div><!--box Ending-->
            
            <?php
            
            function update_cart(){
                
                global $con;
                
                if(isset($_POST['update'])){
                    
                    foreach($_POST['remove'] as $remove_id){
                        
                        $delete_product = "delete from cart where p_id='$remove_id'";
                        
                        $run_delete = mysqli_query($con, $delete_product);
                        
                        if($run_delete){
                        
                            echo "<script>window.open('cart.php','_self')</script>";
                            
                            
                        }
                        
                    }
                    
                }
                
            }
            
            echo $up_cart = update_cart();
            
            ?>
            
            <div id="row same-heigh-row"><!--row same-heigh-row Begin-->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Begin-->
                        <div class="box same-height headline"><!--box same-height headline Begin-->
                            <h3 class="text-center">Products that you may be like </h3>
                        </div><!--box same-height headline Ending-->
                    </div><!--col-md-3 col-sm-6 Ending-->
                    
                    <?php 
                
                $get_products = "select * from product order by rand() LIMIT 0,3";
                
                $run_products = mysqli_query($con,$get_products);
                
                while($row_products=mysqli_fetch_array($run_products)){
                    
                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_price = $row_products['product_price'];
                    $pro_img1 = $row_products['product_img1'];
                    
                    echo "

                    <div class='col-md-3 col-sm-6 center-responsive'><!--col-md-3 col-sm-6 center-responsive Begin-->
                        <div class='product same-height'><!--product same-height Begin-->
                        <a href='details.php?pro_id=$pro_id'>
                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
                        </a>
                        
                        <div class='text'><!--text Begin-->
                            <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                            
                            <p class='price'>$pro_price</p>
                            
                        </div><!--text Begin-->
                        </div><!--product same-height Ending
                        -->
                    </div><!--col-md-3 col-sm-6 center-responsive Ending-->
                             
                    ";
                    
                    
                }
                
                
                ?>
                                      
                    
                </div><!--row same-heigh-row Ending-->
            
        </div><!--col-md-9 Ending-->

<div class="col-md-3"><!--col-md-3 Begin-->
    <div id="order-summary" class="box">
        
        <div class="box-header"><!--box-header Begin-->
            
            <h3>Order Summary</h3>
            
        </div><!--box-header Ending-->
        
        <p class="text-muted"> 
        
        Shipping cost will calculate on the final value of your order.  
        
        </p>
        
        <div class="table-responsive"><!--table-responsive Begin-->
            
            <table class="table"><!--table Begin-->
                
                <tbody><!--tbody Begin-->
                    
                    <tr>
                        
                        <td>Order Value</td>
                        <th>Rs.<?php echo $total; ?></th>
                        
                    </tr>
                    
                    <tr>
                         
                          <td>Shipping Charge</td>
                            <th>Free</th>
                        
                    </tr>
                    
                    <tr class="total">
                         
                          <td>Final value</td>
                            <th>Rs.<?php echo $total; ?></th>
                        
                    </tr>
                    
                    
                    
                </tbody><!--tbody Ending-->
                
            </table><!--table Ending-->
            
        </div><!--table-responsive Ending-->
    </div>
    
</div><!--col-md-3 Ending-->

</div><!--container Ending-->
</div><!--content Ending-->
    

    <?php 
    
    include("includes/footer.php");
    
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>


