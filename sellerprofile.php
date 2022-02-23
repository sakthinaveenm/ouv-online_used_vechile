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
    <title>Seller Dashboard | Ouv</title>
  </head>
  <body>
  <?php include "Navigationbar.php"?>
    <br><br><br>
    <div class="container">
      <!---->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="navbar-brand">
          <img src="images/Deafult-Profile-Pitcher.png" width="30" height="30" alt="">
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Delete Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <?php echo $productdisplay; ?>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container p-5">
        <form action="SellerProfile.php" method="post">
          <label for="selleruser">Seller Username</label> <input type="text" class="form-control form-group" name="selleruser" placeholder="User Name" value="<?php echo $_SESSION["Sellerusername"];?>"/>
          <label for="selleruserid">Seller ID</label>  
            <input type="text" class="form-control form-group" name="selleruserid" placeholder="Enter Whatsapp Number" value = "<?php echo $_SESSION["Sellerid"];?>" Disabled/>
          <label for="sellernewpwd">Enter New Password</label>  
            <input type="text" class="form-control form-group" name="sellernewpwd" placeholder="Enter New Password" />
          <label for="sellernewpwd2">Repeat New Password</label>  
            <input type="text" class="form-control form-group" name="sellernewpwd2" placeholder="Repeat New Password" />
            <br>
            <input type="button" value="Update Password" class="btn btn-primary">
          </form>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="container p-5">
          <form action="SellerDeleteAccount.php" method="POST">
          <input type="hidden" name="selleridgettingvalue" value="<?php echo $_SESSION["Sellerid"];?>">
            <input type="submit" value="Click to Delete Account Permanently" name="DeleteSellerAccount" class="btn btn-danger">
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="container p-5">
            <a href="malito:contact@ouv.com" class="btn btn-success">Click to Forward to MAil to Contact Ouv Admin</a>
          </div>
        </div>
      </div>
    <div class="container-fluid">
        <h3 class="text-center">Published Product That not Purchased</h3>
        <br><br>
        <?php 
          echo $seller_not_published_No_product_display;
        ?>
        <?php echo $seller_not_published_products_available_tab_content; ?>
    </div>
    <div class="container">
        <h3 class="text-center">Published Product Thats Purchased</h3>
        <?php 
          echo $seller_purchased_No_product_display;
        ?> <?php echo $seller_purchased_products_available_tab_content; ?>
        </div>
        <div class="container">
          <h3 class="text-center">Product publisher</h3>
          <form action="SellerProfile.php" method="POST">
          <input type="hidden" class="form-control form-group" name="sellerid"  value= "<?php echo $_SESSION["Sellerid"];?>" />
          <input type="text" class="form-control form-group" name="productname" placeholder="Enter Product Name"/>
          <div class="form-group">
            <label for="exampleFormControlFile1">Upload Bike Pic 1</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vehiclephoto">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Upload Bike Pic 2</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vehiclephoto2">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Upload Bike Pic 3</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vehiclephoto3">
          </div>
          <input type="number" class="form-control form-group" name="productprice" placeholder="Enter Product Price"/>
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Product Condition</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="productcondition">
          <option selected value="Good">Good</option>
          <option value="Nice">Nice</option>
          <option value="Something to Changed">Something to Changed</option>
          <option value="Bad">Bad</option>
        </select>
          <div class="form-group">
            <label for="exampleFormControlFile1">Upload RC Book</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rcbook">
          </div>
          <div class="form-group">
            <label for="inputAddress">Enter Product Description</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Product is Good/Bad" name="productdescription">
          </div>
          <input type="text" class="form-control form-group" name="whnumber" placeholder="Enter Whatsapp Number"/>
          <input type="text" class="form-control form-group" name="phnenum" placeholder="Enter Phone Number"/> <input type="text" class="form-control form-group" name="mailids" placeholder="Enter Mail Id"/>
      <div class="form-group">
        <label for="inputAddress">Enter Location</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Eg : Pallavaram,Chennai" name="location">
      </div>
      <input type="submit" value="Publish" name="Publish" class="btn btn-primary">
      <input type="button" value="Click to see Live Demo" class="btn btn-primary">
    </form>
    </div>
    <div class="container">
      <br><br>
      <h3 class="text-center">Live Demo</h3>
       
    </div>
    </div>
    <div class="container-fluid">
      <p class="text-center"><a href="Logout.php" class="btn btn-primary">Click here to Log out</a></p>
    </div>
    <!--    Footer  -->
    <?php include "footer.php"?>   </body></html>