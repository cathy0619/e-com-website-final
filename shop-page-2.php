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
      <div class="sticky-top" style="margin-top: 80px">
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


        <div class="row">

<?php

                  $query = "SELECT * FROM `all_products` WHERE sale = 0 LIMIT 1,6";
                  $result = mysqli_query($dbconnection,$query);


                        while($row = mysqli_fetch_assoc($result)){
                          echo "  <div class='col-lg-4 col-md-6 mb-4'>
                                    <div class='card h-100'>
                                        <div class='hovereffect'>
                                            <a href='#''><img class='card-img-top' src='".$row["link"]."' alt=' width='275px' height='235px'></a>
                                            <div class='card-body'>
                                                <h4 class='card-title'>
                                                <a href='#'>".$row["name"]."</a>
                                                </h4>
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
    <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item active"><a class="page-link" href="shop-page-2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="shop-page-3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="shop-page-4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="shop-page-3.php">Next</a></li>
  </ul>
</nav>
</div>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>

</div>


<?php

include 'footer.php';

?>