<div class="panel panel-default sidebar-menu">
    <!--panel panel-default sidebar-menu Begin -->

    <div class="panel-heading"><!--panel-heading Begin -->


    <?php 
        
      $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
            
        }else{
            
            echo "
            
            <h3 class='panel_title' align='center'>
            
            $customer_name
            
            </h3>
            
            ";
            
        }

        ?>
  
   
   
    </div><!--panel-heading Ending -->

     <div class="panel-body"> <!--panel-body Begin -->
     
     <nav class="nav-pills nav-stacked nav"><!--nav-stacked-nav" Begin -->
         
         <li class="<?php if(isset($_GET['my_orders'])){echo"active";} ?>">
             
             <a href="my_account.php?my_orders">
                 
                 <i class="fa fa-list"></i> My orders
                 
             </a>
             
         </li>
          <li class="<?php if(isset($_GET['cash_on_delivery'])){echo"active";} ?>">
             
             <a href="my_account.php?cash_on_delivery">
                 
                 <i class="fa fa-shopping-bag"></i> Cash On Delivery 
                 
             </a>
             
         </li>
               
                <li class="<?php if(isset($_GET['edit_account'])){echo"active";} ?>">
             
             <a href="my_account.php?edit_account">
                 
                 <i class="fa fa-pencil"></i> Edit Account
                 
             </a>
             
         </li>
         
          <li class="<?php if(isset($_GET['change_pass'])){echo"active";} ?>">
             
             <a href="my_account.php?change_pass">
                 
                 <i class="fa fa-user"></i> Change Password 
                 
             </a>
             
         </li>
         
          <li class="<?php if(isset($_GET['delete_account'])){echo"active";} ?>">
             
             <a href="my_account.php?delete_account">
                 
                 <i class="fa fa-trash-o"></i> Delete Account
                 
             </a>
             
         </li>
            <li> 
             <a href="logout.php">
                 
                 <i class="fa fa-sign-out"></i> Log out  
                 
             </a>
             
         </li> 
         
     </nav><!--nav-stacked-nav" Ending -->
     
     </div><!--panel-body Ending-->

</div>
<!--panel panel-default sidebar-menu Ending -->
