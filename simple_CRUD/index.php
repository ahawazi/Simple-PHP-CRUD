<?php

require 'users.php';
$users = getUsers();

include 'partials/header.php';
?>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td><?php echo $user['website'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
                    <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>