<?php
include('../includes/connect.php');
if(isset($_POST['submit_brand'])){
  $brand_name=$_POST['brand_name'];
  $select_query="select * from brands where name = '$brand_name'";
  $result_select=mysqli_query($con,$select_query);
  
  $number=mysqli_num_rows($result_select);
  //can be used to get the number of rows in a result set
  if($number>0){
    echo"<script>alert('this brand is present inside the database')</script>";
  }
  else{
  $insert_query="INSERT into brands(name) values ('$brand_name')";
  $result_insert=mysqli_query($con,$insert_query);
  if($result_insert){
    echo"<script>alert('brand has been inserted successfully')</script>";
  }
}
}
?>
<h3 class="text-center">INSERT BRAND</h3>
<form action=""method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info "><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control"name="brand_name" placeholder="Insert brand"  aria-describedby="addon-wrapping">

</div>
<div class="input-group w-10 mb-2">
<input type="submit" class=" bg-info"name="submit_brand" value="Insert">

</div>
</form>