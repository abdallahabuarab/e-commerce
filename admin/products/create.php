<?php

session_start();
include '..\..\includes\connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $img = $_FILES['image'];
    $img_name =  md5(time()) . ".jpg";



    move_uploaded_file($img["tmp_name"],  __DIR__ . "/../../images/". $img_name);


    $sql = "INSERT INTO products (name,images,description,price,category_id) VALUES 
    ('$name','$img_name','$description','$price', '$category_id')";
    $result = $con->query($sql);



    mysqli_close($con);
    header('Location: index.php');
    exit;
}

$res = $con->query("SELECT * FROM categories");



?>


<div class="container mt-4">
    <div class="card">
        <h3 class="card-header">Add New products</h3>
        <div class="card-body">
            <form action="create.php" method="post" enctype="multipart/form-data">
                <div class="form-group">

                    <input type="text" name="name" placeholder="Enter product Name">
                
                    <input type="text" name="description" placeholder="Enter product description">
                    <input type="text" name="price" placeholder="Enter product price">
                    <select name="category_id">
                        <?php
                        while($row = $res->fetch_assoc()){?>
                            <option value="<?=$row['id']?>" ><?=$row['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">

                    <input type="file" class="form-control-file" name="image">
                </div>
                <input type="submit" name="submit">
            </form>
            <?php /*
                if(array_key_exists('err',$_SESSION)){
                    echo $_SESSION['err'];
                    session_destroy();
                }
            */?>
        </div>
    </div>
</div>