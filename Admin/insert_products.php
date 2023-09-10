<?php 
include('../include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin</title>
    <!--bootstarp CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <!-- font awasume link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3 ">
        <h1 class="text-center">Insert Products</h1>
        <!-- form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="prodcut title" class="form-label">product title</label>
                <input type="text" name="product_title" id="prodcut title" class="form-control" placeholder="Enter the prodcut title" autocomplete="off" required>
            </div>
            <!--product discription-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product Description" class="form-label">product Description</label>
                <input type="text" name="product_Description" id="product Description" class="form-control" placeholder="Enter the prodcut Description" autocomplete="off" required>
            </div>
            <!--product keyword-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product keyword" class="form-label">product keyword</label>
                <input type="text" name="product_keyword" id="product keyword" class="form-control" placeholder="Enter the prodcut keyword" autocomplete="off" required>
            </div>

            <!--catogories-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product categories" id="" class="product categories">
                    <option value="">Select the category </option>
                    <?php 
                    $select_query="select * from catogories";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['$result_query'];
                        $category_id=$row['$result_query'];
                        echo"<option value=''>$category_title</option>";
                    }

                    ?>


                    <!--<option value="">fruits</option>
                    <option value="">vegtables</option>
                    <option value="">icecream</option>
                    <option value="">crops</option>
                    <option value="">food</option>-->
                </select>
            </div>

            <!--Image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product Image" class="form-label">product Image</label>
                <input type="file" name="product Image" id="product Image" class="form-control" required>
            </div>

            <!--product price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product price" class="form-label">product price</label>
                <input type="text" name="product price" id="product price" class="form-control" placeholder="Enter the prodcut price" autocomplete="off" required>
            </div>

            <!--submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert product">
            </div>
        </form>
    </div>
</body>
</html>