<?php

if(!isset($_SESSION['admin_email'])){

    
    echo "<script>window.open('login.php','_self')</script>";
    
    
}else{

?>

<?php

    if(isset($_GET['user_profile'])){
        
        $edit_user = $_GET['user_profile'];
        
        $get_user = "select * from admins where admin_id = '$edit_user'";
        
        $run_user = mysqli_query($con, $get_user);
        
        $row_user = mysqli_fetch_array($run_user);
        
        $user_id = $row_user['admin_id'];
        
        $user_name = $row_user['admin_name'];
        
        $user_pass = $row_user['admin_pass'];
        
        $user_email = $row_user['admin_email'];
        
        $user_country = $row_user['admin_country'];
        
        $user_about= $row_user['admin_about'];
        
        $user_contact= $row_user['admin_contact'];
        
        $user_job= $row_user['admin_job'];
        
        
    }

?>


    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->

            <ol class="breadcrumb">
                <!-- breadcrumb Begin -->


                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Edit Admin

                </li>

            </ol><!-- breadcrumb Ending -->

        </div><!-- col-lg-12 Ending -->


    </div><!-- row Ending -->


    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->

            <div class="panel panel-default">
                <!-- panel Begin -->

                <div class="panel-heading">
                    <!--  panel heading Begin -->

                    <h3 class="panel-title">
                        <!--  panel-title Begin -->

                        <i class="fa fa-money fa-fw"></i> Edite User

                    </h3><!--  panel-title Ending -->

                </div><!--  panel heading Ending -->

                <div class="panel-body">
                    <!--  panel body Begin -->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <!--  form-horizontal Begin -->

                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Username</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                                <input value="<?php echo $user_name; ?>" name="admin_name" type="text" class="form-control" required>

                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->

                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Email</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                               
                                <input value="<?php echo $user_email; ?>" name="admin_email" type="text" class="form-control" required>

                                
                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->

                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Password</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                               <input value="<?php echo $user_pass; ?>" name="admin_pass" type="text" class="form-control" required>


                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->
                   
                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Country</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                                <input value="<?php echo $user_country; ?>" name="admin_country" type="text" class="form-control">

                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->

             
                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Contact</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                               <input value="<?php echo $user_contact; ?>" name="admin_contact" type="text" class="form-control" required>

                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->
                        
                                   <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">Job</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                               <input value="<?php echo $user_job; ?>" name="admin_job" type="text" class="form-control" required>

                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->
                        
                                   <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label">About</label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->
                                 <textarea value="<?php echo $user_about; ?>" name="admin_about"  class="form-control" rows="3"></textarea>

                         </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->


                        <div class="form-group">
                            <!--  form-group begin -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <!--  col-md-6 Begin -->

                                <input name="update" value="Update User" type="submit" class="btn btn-primary form-control">

                            </div><!--  col-md-6 ending -->

                        </div><!--  form-group Ending -->

                    </form><!--  form-horizontal Begin -->


                </div><!--  panel body Ending -->

            </div><!-- panel Ending -->


        </div><!-- col-lg-12 Ending -->
    </div><!-- row Ending -->


 
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        })

    </script>


<?php 

if(isset($_POST['update'])){
    
    $user_name = $_POST['admin_name'];
    $user_email= $_POST['admin_email'];
    $user_pass = $_POST['admin_pass'];
    $user_country = $_POST['admin_country'];
    $user_contact = $_POST['admin_contact'];
    $user_job = $_POST['admin_job'];
    $user_about = $_POST['admin_about'];
      
    $update_user = "update admins set admin_name='$admin_name', admin_email='$user_email',admin_pass='$user_pass', admin_country='$user_country', admin_contact='$user_contact', admin_job='$user_job', admin_about ='$user_about' where admin_id = '$user_id' ";
    
    $run_user = mysqli_query($con,$update_user);
    
    if($run_user){
        
        echo "<script>alert('Admin has been updated sucessfully')</script>";
        echo "<script>window.open('login.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>

<?php }?>
