<?php
include('..\..\includes\connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * from categories where id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
} else {
    echo mysqli_error($con);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = addslashes($_POST['name']);
    $img = $_FILES['image'];
    $img_name =  md5(time()) . ".jpg";
    move_uploaded_file($img["tmp_name"],  __DIR__ . "/../../images/" . $img_name);

    $sql2 = " UPDATE categories SET name = '$name' , images ='$img_name' where id ='$id' ";
    $res = $con->query($sql2);
    if ($res) {
        header('Location: index.php');
    }
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <h1>Edit User</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>">
        <br>
        <label>image</label>
        <input type="file" name="image" value="<?= $row['images']; ?>">
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>