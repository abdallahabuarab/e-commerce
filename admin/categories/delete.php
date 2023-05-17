<?php
    include '..\..\includes\connect.php'; 

    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM categories WHERE id = $id ";
        $con->query($sql);

        
        header('Location: index.php');
        exit;
    }
    

   
    mysqli_close($con);
?>