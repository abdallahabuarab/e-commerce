<?php
include '..\..\includes\connect.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $img = $_FILES['image'];
    
    if($img['error']){
        $_SESSION['err'] = "large image size";
        header("Location: /admin/categories/create_cat");
        die;
    }
    $img_name =  md5(time()) . ".jpg";



    move_uploaded_file($img["tmp_name"],  __DIR__ . "/../../images/". $img_name);
    $sql = "INSERT INTO categories (name, images) VALUES ('$name', '$img_name')";
    $result = $con->query($sql);



    header('Location: index.php');
    exit;
}


mysqli_close($con);
?>


<div class="container mt-4">
    <div class="card">
        <h3 class="card-header">Add New Category</h3>
        <div class="card-body">
            <form action="create_cat.php" method="post" enctype="multipart/form-data">
                <div class="form-group">

                    <input type="text" name="name" placeholder="Enter Category Name">
                </div>
                <div class="form-group">

                    <input type="file" class="form-control-file" name="image">
                </div>
                <input type="submit" name="submit">
            </form>
            <?php /*000
                if(array_key_exists('err',$_SESSION)){
                    echo $_SESSION['err'];
                    session_destroy();
                }
                */
            ?>
        </div>
    </div>
</div>