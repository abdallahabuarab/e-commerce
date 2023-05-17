<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <img src=".\images\logo.png" alt="" class="logo">
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
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- second child-->
        <nav class="navbar navbar-expand-lg bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                </li>
            </ul>
        </nav>
        <!-- third child -->
        <div class="bg light">
            <h2 class="text-center">Sustain</h2>
            <p class="text-center">for a store that sells eco-friendly products</p>
        </div>
        <!-- fourth child -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                   
                        <?php
                    include '.\includes\connect.php';
                            $sql = "SELECT * FROM categories";
                            $result = $con->query($sql);
                            while ($row = $result->fetch_assoc()) { ?>
                             <div class="col-md-4 mb-2">
                        <div class="card">
                        <img  src="/images/<?= $row['images']?>" class="card-img-top">
                            <div class="card-body" >
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                                <a href="#" class="btn btn-info">View Products</a>
                                
                            </div>
                        </div>
                       
                    </div>
                    <?php
                            }
                            ?>
                </div>
            </div>
           
        </div>
        
        </body>

</html>
                    <!--
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src=".\images\1e.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Electronics</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src=".\images\1g.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Toys and games</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=".\images\b3" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Beauty and personal care</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src=".\images\f2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Food and beverage</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src=".\images\bo1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Books and media</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src=".\images\s1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Office and school supplies</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">View products</a>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
            </div>
           
        </div>
        <div class="bg-info p-3 text-center">
            <p>Designed by Abdallah Abuarab-2023</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>