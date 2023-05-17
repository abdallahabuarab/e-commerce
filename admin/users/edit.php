<?php
include('..\..\includes\connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * from users where id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
} else {
    echo "err";
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $sql2 = " UPDATE users SET name = '$name' , email='$email' where id ='$id' ";
    $res = $con->query($sql2);
    if ($res) {
        header('Location: index.php');
    }
    echo mysqli_error($con);
    exit;
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
    <form method="post" >
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>">
        <br>
        <label>Email:</label>
        <input type="text" name="email" value="<?= $row['email']; ?>">
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>