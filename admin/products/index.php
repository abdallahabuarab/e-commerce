<?php
include '..\..\includes\connect.php';



$sql = "select
            p.*,
            c.id cat_id,
            c.name cat_name
            from products as p inner join categories as c on (p.category_id = c.id)";
$result = $con->query($sql);
//
?>

<h1>products</h1>
<div>

    <a class="float-end " href="create.php">
        <div class="btn btn-primary">
            Create products
        </div>
    </a>
</div>
<table class="table table-striped">
    <tr>

        <th>Name</th>
        <th>image</th>
        <th>description</th>
        <th>price</th>
        <th>category name</th>
        <th>Action</th>
    </tr>
    <?php


    while ($row = $result->fetch_assoc()) { ?>
        <tr>

            <td><?= $row['name'] ?></td>
            <p> </p>
            <td><img width="100" src="/images/<?= $row['images'] ?>"></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['price'] ?></td>
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