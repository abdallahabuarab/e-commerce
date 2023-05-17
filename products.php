<!DOCTYPE html>
<html lang="en">
// test from gitgub number 2
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Product Page</title>
</head>

<body>
<?php
    include '.\includes\connect.php';

    // test from local version 2

    $sql = "SELECT * FROM products";
    $result = $con->query($sql);
    ?>
    <div class="container">
        <h1 class="text-center mt-5">Products</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <?php
                  while($row=$result->fetch_assoc()){?>
                    <div class="col-md-4 mb-2">
                    <div class="card">
                <img src="/images/<?=$row['images']?>" alt="Product 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$row['name']?></h5>
                    <p class="card-text"><?=$row['description']?></p>
                    <p class="card-text"><?=$row['price']?></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>

                    </div>
                </div>
            </div>
            <?php
                  }
                  
                  ?>
               
                    </div>
                </div>
            </div>
            <!--
            <div class="col-md-4">
                <div class="card">
                    <img src="product2.jpg" alt="Product 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2</p>
                        <p class="card-text">Price: $29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="product3.jpg" alt="Product 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description of Product 3</p>
                        <p class="card-text">Price: $39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
