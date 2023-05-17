<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body><!--
    <div class="container">
    <div class="card">
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">name </label>
    <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
    <label  class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input name="password" type="password" class="form-control">
  </div>
  
  <input type="submit" name ="submit"class="form-control" value="create" >
</div>
</div>
</form> -->
    <?php
    include '..\..\includes\connect.php';



    $sql = "SELECT * FROM users";
    $result = $con->query($sql);
    ?>
    <h1>Users</h1>
    <div>

            <a class="float-end m-2" href="create.php">
                <div class="btn btn-primary">
                    Create User
                </div>
            </a>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php


        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($con);
    ?>


</body>

</html>









<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container-fluid p-0 m-0">
<--fist child
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <div class="container-fluid ">
        <img src="..\images\logo.png" class="logo">
        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome guest</a>
                </li>
            </ul>
        </nav>
    </div>
</nav>
<--second child->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
<-- third child->

<div class="row">
    <div class="bg light">
        <h5>admin name</h5>
    </div>
    <div class="col-md-12 bg-secondary p-2">
        <div class="button text-center">
            <-- button*10>a.nav-link.text-light.bg-info.my-1->
         
            <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert categories</a></button>
            <button><a href="#" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="index.php?insert_product" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Category</a></button>
            <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
            <button><a href="#" class="nav-link text-light bg-info my-1">View Brand</a> </button>
            <button><a href="#" class="nav-link text-light bg-info my-1">All orders</a></button>
            <button><a href="#" class="nav-link text-light bg-info my-1">All payment</a></button>
            <button><a href="#" class="nav-link text-light bg-info my-1">list users</a></button>
            <button><a href="#" class="nav-link text-light bg-info my-1">logout</a></button>
        </div>
    </div>
</div>
<--fourth child->
<div class="container">
/* 
if(isset($_GET['insert_product'])){
    require('insert_product.php');
}
if(isset($_GET['insert_brands'])){
    require('insert_brand.php');
}
if(isset($_GET['insert_categories'])){
    require('insert_cat.php');
}

?>
</div>
<div class="bg-info p-3 text-center footer">
            <p>Designed by Abdallah Abuarab-2023</p>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
</body>
</html>