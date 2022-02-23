<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>ouvs | Entrance Page</title>
    <style>
        .backgroundColor{
            background-color: #91c7b1;
        }
    </style>
  </head>
  <body>
<!--Navigation-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navigation-display">
        <div class="container-fluid">
          <a class="navbar-brand h1 navigation-display" href="index.php">OUV - Shopping </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Seller
              </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sellerSignIn.php">Seller Sign in</a>
          <a class="dropdown-item" href="sellerSignUP.php">Create Seller Account</a>
        </div>
      </li>
              <!---->
              <li class="nav-item">
                <a class="nav-link active" href="#contact">Contact us</a>
              </li>
            </ul>
          </div>      
        </div>
    </nav>
<br><br>
<div class="container-fluid navigation-display">
    <div class="row flex-row navigation-display">
        <div class="d-flex justify-content-start navigation-display">
            <img class="img-overlay" src="images/car.png" width = "100%" height="100%">
          </div>
<!--Sign in-->
<div class="d-flex mp-7 justify-content-end">
    <!--Sig in-->
    <div class="container">
      <form class="form-signin navigation-display" action="main.php" method="POST">
          <br>       
          <h2 class="form-signin-heading">Please login</h2>
          <input type="text" class="form-control form-group" name="username" placeholder="Email Address" required="" autofocus="" />
          <input type="password" class="form-control form-group" name="password" placeholder="Password" required=""/>      
         
          <button class="btn btn-lg btn-primary btn-block form-group" type="submit">Login</button><p class="text-center">Don't have an account <a href="signUP.html" data-toggle="modal" data-target="#exampleModalCenter">Create One</a></p>   
        </form>
      </div>
    <!---->
    <!--Sign up-->
    <!-- Button trigger modal -->
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"id="exampleModalLongTitle">Create Account</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form class="form-signin" action="customersignup.php" method="POST">
  <input type="text" class="form-control form-group" name="email" placeholder="Email Address" required="" autofocus="" />
  <input type="text" class="form-control form-group" name="username" placeholder="Enter Username " required="" autofocus="" />
  <input type="password"class="form-control form-group" name="password" placeholder="Password" required=""/>      
  <input type="password" class="form-control form-group" name="password2" placeholder="Re-Enter Password" required=""/>  
  <button class="btn btn-lg btn-primary btn-block form-group" type="submit">Create Account</button>
  <p class="text-center"><a href="index.php">Back to LogIn</a></p>   
</form>
</div>
</div>
</div>
</div>
<!---->
</div>
</div>
</div>
</div>
<!---->
<br>
<?php if(isset($_GET['logout']))
{echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>You are Logout</strong>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
  }
?>
<?php if(isset($_GET['deleteselleraccount']))
  {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Your Seller Account Has Been Deleted</strong>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
  }
?><?php if(isset($_GET['loginwrong']))
{
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>The Entered Username Or PAssword is Wrong</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  </div>";
}
?>
<?php if(isset($_GET['dologin']))
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  Dologin
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  </div>";}
  ?>
  <h3 class="text-dark text-center">Purchased Products</h3>
  <br><br>
  <?php include "purchasedProduct.php" ?>
  <div class="container">
  <?php echo $No_product_display ?>
  <?php echo $purchased_product_tab_content ?>
  </div>
  <br><br><br><br><br><br><br><br><br>
  <a name="contact"></a>
  <?php include "footer.php" ?>
  </body>
  </html>