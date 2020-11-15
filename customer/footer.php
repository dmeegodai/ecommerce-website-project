<div id="footer">
    <!--#footer Begin-->
    <div class="container">
        <!--container Begin-->
        <div class="row">
            <!--row Begin-->
            <div class="col-sm-6 col-md-3">
                <!--col-sm-6 col-md-3 Begin-->
                <h4>Pages</h4>
                <ul>
                    <!--ul  Begin-->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                </ul>
                <!--ul  Ending-->

                <hr>

                <h4>User Section</h4>
                <ul>
                    <!--ul  Begin-->
                          <?php 
                            
                            if(!isset($_SESSION['customer_email'])){
                                
                                echo"<a href='checkout.php'>Login</a>";
        
                            }else{
                                
                                 echo"<a href='my_account.php?my_orders'>My Account</a>";
                                
                            }
                            
                            ?>
                   
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                <!--ul  Ending-->

                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <!--col-sm-6 col-md-3 Ending-->

            <div class="com-sm-6 col-md-3">
                <!--col-sm-6 col-md-3 Begin-->

                <h4>Hot Items</h4>
                <ul>
                    <!--ul  Begin-->
                    <?php
                     
                    $get_p_cats = "select * from product_categories";
                    
                    $run_p_cats = mysqli_query($con, $get_p_cats);
                    
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id']; 
                        
                         $p_cat_title = $row_p_cats['p_cat_title']; 
                        
                        echo "
                        
                        <li>
                        
                        <a href='shop.php?p_cat=$p_cat_id'>
                        
                        $p_cat_title
                        
                        
                        </a> 
                        
                        </li>
                        
                        
                        
                        ";
                        
                    }
                    
                    
                    ?>
                </ul>
                <!--ul  Ending-->

                <hr class="hidden-md hidden-lg">

            </div>
            <!--col-sm-6 col-md-3 Ending-->

            <div class="com-sm-6 col-md-3">
                <!--col-sm-6 col-md-3 Begin-->

                <h4>Find Us</h4>

                <p>
                    <!--Para Begin-->
                    <strong>Nikkie's Craft Store</strong>
                    <br />Wewa Junction
                    <br />Kandana
                    <br />Western Province
                    <br />Sri Lanka
                    <br />0094766436110
                </p>
                <!--Para Ending-->

                <a href="contact.php">Contact Us</a>

                <hr class="hidden-md hidden-lg">

            </div>
            <!--col-sm-6 col-md-3 Ending-->

            <div class="com-sm-6 col-md-3">
                <!--col-sm-6 col-md-3 Begining-->

                <h4>Latest News</h4>

                <p class="text-muted">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.

                </p>
                <form action="get" method="post">
                    <!--form Begining-->
                    <div class="input-group">
                        <!--input-group Begining-->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn">
                            <!--input-group-btn Begining-->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span>
                        <!--input-group-btn Ending-->

                    </div>
                    <!--input-group Ending-->
                </form>
                <!--form Ending-->

                <hr>

                <h4>Find Us On</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>

            </div>
            <!--col-sm-6 col-md-3 Ending-->

        </div>
        <!--row Ending-->
    </div>
    <!--container Ending-->
</div>
<!--#footer Ending-->

<div id="copyright">
    <!--#copyright Begin-->
    <div class="container">
        <!--container Begin-->
        <div class="col-md-6">
            <!--col-md-6 Begin-->

            <p class="pull-left">&copy; 2020 Nikkie's Crafts </p>

        </div>
        <!--col-md-6 Ending-->
    </div>
    <!--container Ending-->
</div>
<!--copyright Ending-->
