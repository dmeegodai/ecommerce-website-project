<?php 
$active='Contact Us';
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
                        Contact Us
                    </li>
                </ul>
                <!--breadcrumb Ending-->
            </div>
            <!--col-md-12 Ending-->
            <div class="col-md-3"><!--col-md-3 Begin-->       

                <?php 
    
    include("includes/sidebar.php");
    
    ?>

            </div>
            <!--col-md-3 Ending-->
            
                        
                <div class="col-md-9"><!--col-md-9 Begin-->
                
                <div class="box"><!--box Begin-->
                    
                    <div class="box-header"><!--box-header Begin-->
                        
                        <center>
                            
                            <h2>Contact Us</h2>
                            <p class="tetx-muted">
                                
                                If you have any question on our products, please free to contact us. 
                                
                            </p>
                        </center>
                        
                        <form action="contact.php" method=""post><!--form Begin-->
                            
                            <div class="form-group">
                                <label>Name</label>
                                
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Subject</label>
                                
                                <input type="text" class="form-control" name="subject" required>
                            </div>
                            
                               <div class="form-group">
                                <label>Message</label>
                                
                                <textarea name="message"  class="form-control"></textarea>
                            </div>
                          <text class="text-center">
                              
                            <button type="submit" name="submit" class="btn btn-primary">
                            
                            <i class="fa fa-user-md"></i> Send Message
                            
                            </button>
                          </text>
                            
                        </form><!--form Ending-->
                        
                        <?php
                        
                        if(isset($_POST['submit'])){
                            
                            /// Admin receives message with this ///
                            
                            $sender_name = $_POST['name'];
                            
                            $sender_email = $_POST['email'];
                            
                            $sender_subject = $_POST['subject'];
                            
                            $sender_message = $_POST['message'];   
                            
                            $receiver_email = "thanudilan071@gmail.com";
                            
                            mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                            
                            ///Auto reply to sender///
                            
                            $email = $_POST['email'];
                            
                            $subject = "Greetings from Nikkie's Craft Store";
                            
                            $msg ="Thank you for your message. Our agent will contact you soon.";
                            
                            $from ="Nikkie's Craft Store";
                            
                            mail($email,$subject,$msg,$from);
                            
                            echo "<h2 align='center' > Your message has sent sucessfully </h2>";
                                                        
                        }
                        
                        ?>
                        
                    </div><!--box-header Ending-->
                </div><!--box Ending-->
                
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
