<?php

    include 'db.php';
    include 'header.php';

?>


        <section>
            <!-- Page Content -->
            <div class="container-fluid">
                <div class="main main-raised">    
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-3">

                                <div class="card">
                                    <div class="card-header card-header-text card-header-danger">
                                        <div class="card-text">
                                        <h4 class="card-title"><center>About Us</center></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    Lazy Cat Creations is a shop where you can find carefully crafted handmade items with cute and unique design. Each item is created with the customer in mind so you can be sure about the quality of each piece.
                                    </div>
                                </div>
                            <br>
                            <!--Flash sale start -->
                                <div class="sticky-top">
                                    <br><br>
                                    <div class="sale animated bounce">
                                        <h3 style="display: inline-flex; margin-right: 20px; font-weight: 500;" >FLASH SALE!!!</h3><br>
                                        <small>Ending in</small>
                                        <div class="timer" style="display: inline-flex;">
                                        <p id="demo"></p>
                                        </div>
                                    </div>
                                </div>
                            <!--Flash sale end -->
                            </div>
                            <!---div About end-->

                            <!-- mid column start-->
                            <div class="col-lg-9">
                                <div class="d-flex flex-column align-items-center ">

                                    <!-- Start Carousel Card -->
                                    <div class="carousel col-md-6 mr-auto ml-auto" style="margin-bottom: 30px">
                                        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="hovereffect2">
                                                        <img class="d-block img-fluid" src="img/couple.jpg" alt="Couple Bracelet">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <a href="#"><h2><p>SHOP NOW!</p></h2></a>
                                                            <h5><b> Couple Bracelets </b></h5>
                                                            <h6>Feel connected even when you're far apart...</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="hovereffect2">
                                                        <img class="d-block img-fluid" src="img/women.jpg" alt="Women's Accessories">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <a href="#"><h2><p>SHOP NOW!</p></h2></a>
                                                            <h5><b> Women's Accessories </b></h5>
                                                            <h6>Flaunt your style!</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="hovereffect2">
                                                        <img class="d-block img-fluid" src="img/men.jpg" alt="Men's Accessories">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <a href="#"><h2><p>SHOP NOW!</p></h2></a>
                                                            <h5><b> Men's Accessories </b></h5>
                                                            <h6>Who says men can't accessorize?</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                <!---div Carousel end-->

                                <div class="row">

                                    <?php

                                        $query = "SELECT * FROM `all_products` WHERE sale = 1";
                                        $result = mysqli_query($dbconnection,$query);


                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "
                                                <div class='col-lg-4 col-md-6 mb-4'>
                                                    <div class='card h-100'>
                                                        <div class='hovereffect'>
                                                        <a href='#''><img class='card-img-top' src='".$row["link"]."' alt=' width='275px' height='235px'></a>
                                                            <div class='card-body'>
                                                                <h4 class='card-title'><a href='#'>".$row["name"]."</a></h4>
                                                                <h5 style='display:inline-flex'><img src='img/sale-tag.png' style='width:20px;height:20px;'> ".$row["sale_price"]." &nbsp <strike><small>".$row["price"]."</small></strike></h5>
                                                                <p class='card-text'>".$row["desc_short"]."</p>
                                                            </div>
                                                            <div class='card-footer'>
                                                                <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                        }

                                    ?>

                                    <?php

                                        $query = "SELECT * FROM `all_products` WHERE sale = 0 LIMIT 1";
                                        $result = mysqli_query($dbconnection,$query);


                                        while($row = mysqli_fetch_assoc($result)){
                                        echo "  
                                            <div class='col-lg-4 col-md-6 mb-4'>
                                                <div class='card h-100'>
                                                    <div class='hovereffect'>
                                                        <a href='#''><img class='card-img-top' src='".$row["link"]."' alt=' width='275px' height='235px'></a>
                                                        <div class='card-body'>
                                                            <h4 class='card-title'><a href='#'>".$row["name"]."</a></h4>
                                                            <h5>".$row["price"]."</h5>
                                                            <p class='card-text'>".$row["desc_short"]."</p>
                                                        </div>
                                                        <div class='card-footer'>
                                                            <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                                        }

                                    ?>

                                </div>
                                <!-- /.row -->

                                <br>
                                    <div class="page-nav">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="index.php">1</a></li>
                                                <li class="page-item"><a class="page-link" href="shop-page-2.php">2</a></li>
                                                <li class="page-item"><a class="page-link" href="shop-page-3.php">3</a></li>
                                                <li class="page-item"><a class="page-link" href="shop-page-4.php">4</a></li>
                                                <li class="page-item"><a class="page-link" href="shop-page-2.php">Next</a></li>
                                            </ul>
                                    </nav>
                                    </div>
                                </div>
                            </div>
                        <!-- /.col-lg -->
                        </div>
                    <!-- /.row -->
                    </div>
                <!-- /.container -->
                </div>
            </div>
        </section>

            <?php

            include 'footer.php';

            ?>

    </body>
</html>