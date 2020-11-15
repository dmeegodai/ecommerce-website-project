<?php 
  $active='Home';
  include("includes/header.php");

?>

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

                <?php
                    
                    
                    $get_slides = "select * from slider LIMIT 0,1";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                         
                        <div class='item active'>
                        
                        <img src='.//admin_area/slides_images/$slide_image'>
                        
                        </div>
                        
                        ";
                        
                        
                    }
                          
                    $get_slides = "select * from slider LIMIT 1,3";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                         
                        <div class='item'>
                        
                        <img src='.//admin_area/slides_images/$slide_image'>
                        
                        </div>
                        
                        ";
                        
                        
                    }
                    
                    ?>


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

        <?php
            
            getPro();
            
            ?>

    </div>
    <!--row Ending-->

</div>
<!--content Ending-->

<?php 
    
    include("includes/footer.php");
    
    ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>
