<?php
$id = $_POST['id'];
$name = $_POST['name'];
$family = $_POST['family'];

$link = mysqli_connect("localhost", "root", "", "Users");

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $query = "UPDATE users SET name='$name', family='$family', image='$target_file' WHERE id='$id'";
    mysqli_query($link, $query);
} else {
    $query = "UPDATE users SET name='$name', family='$family' WHERE id='$id'";
    mysqli_query($link, $query);
}

header("Location: index.php");
exit();
?>
