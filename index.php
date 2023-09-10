<?php
include('include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!--bootstarp CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <!-- font awasume link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid ">
    <img src="./Images/Website/Farmer.jpeg" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price : 100/-</a>
        </li>
    </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- second child-->
<nav class="navbar navbar-expand-lg bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">welcome Guest</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">LOGIN</a>
    </li>
    </ul>
</nav>

<!--third child-->
<div class="bg-light">
    <h3 class="text-center">FOOD STORE</h3>
    <p class="text-center">THE WORLD's VALUABLE IS FOOD</p>
</div>

<!--fourth child-->
<div class="row">
    <div class="col-md-10">
        <!-- products-->
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Fruits/Apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Vegetables/Carrot.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Crops/Coffee.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Crops/Coffee.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Fruits/Bananas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./Images/Crops/Rice.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View  more</a>
  </div>
</div>
            </div>
        </div>

    </div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav item bg-info">
                <a href="#" class="nav-link text-light">TYPE OF PRODUCTS</a>
            </li>
            <?php
            $select_cat="select * from catogories";
            $result_cat=mysqli_query($con,$select_cat);
            //$row_cat=mysqli_fetch_assoc($result_cat);
            while($row_cat=mysqli_fetch_assoc($result_cat)){
              $cat_title=$row_cat['categories_title'];
              $cat_id=$row_cat['categories_id'];
              echo"<li class='nav item '>
              <a href='#' class='nav-link text-light'>$cat_title</a>
          </li> ";
            }
            ?>
        </ul>
        
    </div>
</div>
<!--last child-->
<div class="bg-info p-3 text-center">
    <P>All Rights Reserved-Designed by Sakthivel @2023</p>
    </div>
<!--Bootstrap  JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>