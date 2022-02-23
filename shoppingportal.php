<!DOCTYPE html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Main Page</title>
  </head> <body>
  <!--Navigaton-->
  <nav class="navbar navbar-expand-lg navigation-display fixed-top">
    <a class="navbar-brand h1" href="#">OUV - Shopping </a>
    <button class="navbar-toggler menu-dis" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "><p class="menu-dis">&darr;</p></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active h6" href="#" id="navbardrop" data-toggle="dropdown">
        <?php echo $row["username"] ?>
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="customerprofile.php">Profile</a>
        <a class="dropdown-item" href="index.php">Logout</a>
      </div>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!---->
  <br><br><br>
  <h3 class="text-dark text-center">Products Available</h3>
  <br><br>
  <div class="container">
  <?php include 'ProductsAvailable.php' ?>
      <?php echo $No_product_display ?>
      <?php echo $products_available_tab_content ?>
  <br>
  </div>
<!--Footer-->
<a name="contact"></a>
<?php include 'footer.php' ?>
</div>
</body>
</html>