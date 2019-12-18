<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

  <link rel="icon" type="image/png" href="img/black-cat.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	
	<title>Lazy Cat Creations</title>

 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<header id="header">
	<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-expand-lg">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php"><img src="img/black-cat.png" style="margin-right: 5px"><b>Lazy Cat </b>Creations</small> </center></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" target="_blank" >
            <!-- <i class="material-icons">account_circle</i> --><img src="img/account_circle.svg" height="20px" width="20px">
            </a>
           <div class="dropdown-menu dropdown-with-icons">
             <form action="action_page.php" method="post">
              <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
       </div>
         <div class="container" style="background-color:#f1f1f1">
         <button type="button" class="cancelbtn">Cancel</button><br>
           <span class="psw"> <a href="#">Forgot password?</a></span>
       </div>
       </form>
      </div>
  </li>


          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="#" target="_blank">
             <!--  <i class="material-icons">shopping_cart</i> --><img src="img/shopping_cart.svg" height="20px" width="20px">
            </a>
          </li>
          
          <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" target="_blank">
              <!-- <i class="material-icons">menu</i> --><img src="img/menu.svg" height="20px" width="20px">
           </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CATEGORIES</h6>
            <a class="dropdown-item" href="shop-categories-forhim.php">Gifts for Him</a>
            <a class="dropdown-item" href="shop-categories-forher.php">Gifts for Her</a>
            <a class="dropdown-item" href="shop-categories-couple.php">Couple Accessories</a>
            <a class="dropdown-item" href="shop-categories-rosarybracelets.php">Rosary Bracelets</a>
            <a class="dropdown-item" href="shop-categories-birthstones.php">Birthstones</a>
            <a class="dropdown-item" href="shop-categories-onsale.php">On Sale</a>
          </div>
        </li>
            </ul>

            <form class="form-inline ml-auto">
                <div class="form-group no-border">
                  <input type="text" class="form-control" placeholder="I'm shopping for...">
                </div>
                <button type="submit" class="btn btn-white btn-just-icon btn-round" style="border-radius: 5px">
                    <i class="material-icons">search</i>
                </button>
            </form>

    </div>
</nav>
</header><!-- /header -->