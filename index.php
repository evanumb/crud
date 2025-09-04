<?php include 'db.php'; ?>

<a href="create.php">Add New User</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Created</th><th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>