<?php
include('../includes/connect.php');
if(isset($_POST['submit_cat'])){
  $cat_name=$_POST['cat_name'];
  $select_query="select * from categories where name = '$cat_name'";
  $result_select=mysqli_query($con,$select_query);
  
  $number=mysqli_num_rows($result_select);
  //can be used to get the number of rows in a result set
  if($number>0){
    echo"<script>alert('this category is present inside the database')</script>";
  }
  else{
  $insert_query="INSERT into categories(name) values ('$cat_name')";
  $result_insert=mysqli_query($con,$insert_query);
  if($result_insert){
    echo"<script>alert('category has been inserted successfully')</script>";
  }
}
}
?>
<h2 class="text-center">Insert Categories</h2>
<form action=""method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info "><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_name" placeholder="Insert category"  aria-describedby="addon-wrapping">

</div>
<div class="input-group w-10 mb-2">
<input type="submit" class=" bg-info border-0 p-2"name="submit_cat" value="Insert">

</div>
</form>