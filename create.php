<?php include 'db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Enter name" required>
    <input type="email" name="email" placeholder="Enter email" required>
    <button type="submit" name="submit">Save</button>
</form>