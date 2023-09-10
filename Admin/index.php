<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
<link rel="stylesheet" href="../style.css">
<style>
    .admin_image{
        width:100px;
        object-fit:contain;
    }
    .footer{
        position: absolute;
        bottom: 0;
    }
    </style>
     <!-- font awasume link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="../Images/Website/Farmer.jpeg" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                        <li class="nav-item">
                        <button class="btn btn-outline-light" type="submit">Logout</button>
                        </li>
                    </ul>
            </div>
        </nav>

        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">MANAGE DETAILS</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div>
                <a href="#"><img src="../Images/Homepage/farmer.png" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>    
            <div class="button text-center mx-auto">
                <button class="my-3 p-1"><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                <button class="my-3 p-1"><a href="" class="nav-link text-light bg-info my-1">View products</a></button>
                <button class="my-3 p-1"><a href="index.php?insert_catogories" class="nav-link text-light bg-info my-1">Insert Catogries</a></button>
                <button class="my-3 p-1"><a href="" class="nav-link text-light bg-info my-1">View Catogries</a></button>
                <button class="my-3 p-1"><a href="" class="nav-link text-light bg-info my-1">View Users</a></button>
                <button class="my-3 p-1"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                <button class="my-3 p-1"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
            </div>
        </div>
        </div>

        <!-- Fourth Child-->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_catogories'])){
                include("insert_catogories.php");
            }
            ?>
        </div>
         
        
        <!--last child-->
<div class="bg-info p-3 text-center footer">
    <P>All Rights Reserved-Designed by Sakthivel @2023</p>
    </div>
    </div>  
    


<!--bootstrap JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>