
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
                
                <?php 
                
                if(!isset($_GET['p_cat'])){ 
                    
                     if(!isset($_GET['cat'])){
                
                echo "
                
                <div class='box'>
                    <!--box Begin-->
                    <h1>Shop</h1>
                    <p>
                        Ex nam quidam intellegebat. Omnis homero perfecto per te, sit clita noster ne. Nec falli iudico ex.
                        Ex nam quidam intellegebat. Omnis homero perfecto per te, sit clita noster ne. Nec falli iudico ex.
                    </p>
                </div>
                <!--box ending-->
                
                ";
                     }
                         
                }
                    
                ?>

                <div class="row">
                    <!--row Begin-->
                    
                     <?php
                    
                     if(!isset($_GET['p_cat'])){ 
                    
                     if(!isset($_GET['cat'])){
                         
                         $per_page=6;
                         
                         if(isset($_GET['page'])){
                             
                             $page = $_GET['page'];
                             
                         }else{
                                
                                 $page=1;
                             
                         }
                               
                             $start_from = ($page-1) * $per_page;
                             
                             $get_products =  "select * from product order by 1 DESC LIMIT $start_from,$per_page";
                             
                             $run_products =  mysqli_query($con,$get_products);
                             
                             while($row_products=mysqli_fetch_array($run_products)){
                                 
                                    $pro_id = $row_products['product_id'];
        
                                    $pro_title = $row_products['product_title'];
        
                                    $pro_price = $row_products['product_price'];
            
                                    $pro_img1 = $row_products['product_img1'];
                                 
                                    echo "
                                    
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                    <div class='product'>
                                    
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                              
                                    </a> 
                                    
                                    <div class='text'>
                                    
                                    <h3>
                                    
                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                    
                                    
                                    </h3>
                                    
                                    <p class='price'>
                                    
                                     Rs.$pro_price
                                    
                                    </p>
                                    
                                    <p class='buttons'>
                                    
                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                    
                                    View Details
                                    
                                    </a>
                                    
                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                    
                                   <i class='fa fa-shopping-cart'></i> Add To Cart
                                    
                                    </a>
                                    
                                    </p>
    
                                    </div>
                            
                                    </div>
                                    </div>
                                    
                                    "; 
                             
                         }
                        
                   ?>
                   
                </div>
                <!--row Ending-->
                     <center>
                         <ul class="pagination"><!--pagination Begin-->
                            
                            <?php
                         
                        $query = "select * from product";
                         
                         $result = mysqli_query($con,$query);
                         
                         $total_records = mysqli_num_rows($result);
                         
                         $total_pages = ceil($total_records / $per_page);
                         
                         echo "
                         
                         <li>
                         
                          <a href='shop.php?page=1'> ".'First Page'."  </a> 
                         
                         </li>
                           
                         
                         ";
                         
                         for($i=1; $i<=$total_pages;  $i++){
                             
                                  echo "
                         
                         <li>
                         
                          <a href='shop.php?page=".$i."'> ".$i." </a> 
                         
                         </li>
                         ";
       
                         };
                                  echo "
                         
                         <li>
                         
                          <a href='shop.php?page=$total_pages'> ".'Last Page'."  </a> 
                         
                         </li>
                           
                         
                         ";
                             
                             
                     }
                        
                     }
                             
                             ?>
                            
                         </ul><!--pagination Endingh-->
                     </center>
                     
                    <div class="row"><!--row Begin-->
                        
                        <?php 
                        
                        getpcatpro(); 
                        
                        getcatpro();
                        
                        
                        ?>
                        
                    </div><!--row finish-->
                     
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
