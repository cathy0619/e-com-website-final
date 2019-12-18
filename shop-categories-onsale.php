<?php

include 'header.php';
include 'db.php';

?>


<section>

    <!-- Page Content -->

<div class="container-fluid">
<div class="main main-raised"> 

<H4><strong>SHOP/ CATEGORIES/ GIFTS FOR HIM</strong></H4>

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

  <div class="gallery" style="padding-left: 50px">
  <div class="row">

  <?php
    $query = "SELECT * FROM `all_products` WHERE sale = 1";

    
    $result = mysqli_query($dbconnection,$query);

    while($row = mysqli_fetch_assoc($result)){
      echo "<div class='col-sm-3'>
              <div class = 'card' style='width: 14rem;'>
              <img src='".$row["link"]."' height='224px' width='224px' class='card-img-top'>
                <div class='card-body' style='padding:1rem;'>
                  <h5><img src='img/sale-tag.png' style='width:20px;height:20px;'> ".$row["sale_price"]." &nbsp <strike><small>".$row["price"]."</small></strike></h5>
                  <h6 class='card-title'>".$row["name"]."</h6>
                  <p class='card-text'></p>
                  <center><a href='#' class='btn btn-primary' style='padding: 6px 4px; background-color: #E74C3C; border-color: #E74C3C'>Add to Cart</a></center>
                </div>
              </div>
            </div>";
    }

  ?>
</div>
</div>
</div>
</div>
</section>

<?php

include 'footer.php';

?>

</body>
</html>