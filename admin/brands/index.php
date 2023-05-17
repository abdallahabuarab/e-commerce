<html>
<head>
    <title></title>
<!--   Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <?php
    include '..\..\includes\connect.php';



    $sql = "select 
    b.*,
    c.id cat_id,
    c.name cat_name 
    from brands as b left join categories as c on (b.category_id =c.id)";

    $result = $con->query($sql);
    
    ?>
    
    <h1>brands</h1>
    <div>

            <a class="float-end " href="create.php">
                <div class="btn btn-primary">
                    Create brand
                </div>
            </a>
    </div>
    <table class="table table-striped">
        <tr>
        
            <th>Name</th>
            <th>category name</th>
            <th>Action</th>
            
        </tr>
        <?php


        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                
                <td><?= $row['name'] ?></td>
                <td><?= $row['cat_name'] ?></td>
                
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