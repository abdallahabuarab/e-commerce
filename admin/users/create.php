<?php
    include '..\..\includes\connect.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $sql_dup = "SELECT * FROM users WHERE email = '$email'";
        $result_dup=$con->query($sql_dup);
        if(mysqli_num_rows($result_dup)>0){
            echo "Error: Email already exists";
        }
        else{
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result=$con->query($sql);
        

        
        header('Location: index.php');
        exit;
        }
    }

    
    mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD System - Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form method="post" action="create.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="create" value="Create">
    </form>
</body>
</html>
