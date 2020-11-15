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
        </div><!--col-md-3 Ending-->
        
        <div class="col-md-9"><!--col-md-9 begin-->
        
        
        <?php
            
            if(!isset($_SESSION['customer_email'])){
                
                include("customer/customer_login.php");
                
            }else{
                
                include("payment_option.php");
            }
            
            ?>
            
            </div><!--col-md-9 Ending-->

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


