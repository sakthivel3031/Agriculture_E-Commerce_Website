<?php
include('../include/connect.php');
if(isset($_POST['Insert_Cat'])){
  $categories_title=$_POST['cat_title'];

  //select data
  $select_data="select * from catogories where categories_title='$categories_title'";
  $result_Select=mysqli_query($con,$select_data);
  $number=mysqli_num_rows($result_Select);
  if($number>0){
    echo"<script> alert ('This Categories is already  present')</script>";
  }else{
  $insert_query="insert into catogories(categories_title) values ('$categories_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
  echo "<script> alert ('Categories has been inserted successfully')</script>";
  }}
}
?>

<h2 class="text-center">Insert Categories</h2>


<form action="" method="post" class="mb-2">
<div class="input-group mb-3 w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-recepit"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert catogories" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 w-10 mb-2 m-auto">
  <input type="submit" class="bg-info" name="Insert_Cat" value="Insert Catogories" class="bg-info border-0 p-3 my-3">
</div>
</form>