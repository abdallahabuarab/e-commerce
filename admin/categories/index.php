
<html>
<head>
    <title></title>
<!--   Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <?php
    include '..\..\includes\connect.php';



    $sql = "SELECT * FROM categories";
    $result = $con->query($sql);
    ?>
    
    <h1>Categories</h1>
    <div>

            <a class="float-end " href="create_cat.php">
                <div class="btn btn-primary">
                    Create categories
                </div>
            </a>
    </div>
    <table class="table table-striped">
        <tr>
        
            <th>Name</th>
            <th>images</th>
            <th>Action</th>
        </tr>
        <?php


        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                
                <td><?= $row['name'] ?></td>
                <td><img width="100" src="/images/<?= $row['images']?>"></td>
                
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
   
