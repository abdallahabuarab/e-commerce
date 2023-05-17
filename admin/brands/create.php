<?php

session_start();
include '..\..\includes\connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST['name'];
    $cat_id = $_POST['cat_id'];


    $sql = "INSERT INTO brands (name, category_id) VALUES 
    ('$name', '$cat_id')";
    $result = $con->query($sql);



    mysqli_close($con);
    header('Location: index.php');
    exit;
}

$res = $con->query("SELECT * FROM categories");



?>


<div class="container mt-4">
    <div class="card">
        <h3 class="card-header">Add New brand</h3>
        <div class="card-body">
            <form action="create.php" method="post" enctype="multipart/form-data">
                <div class="form-group">

                    <input type="text" name="name" placeholder="Enter brand Name">
                
                   
                    <select name="cat_id">
                        <?php

                        while($row = $res->fetch_assoc()){?>
                            <option value="<?=$row['id']?>" ><?=$row['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
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