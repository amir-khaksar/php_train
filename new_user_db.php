<?php
$link = mysqli_connect("localhost", "root", "", "Users");

$name = $_POST['name'];
$family = $_POST['family'];
$username = $_POST['username'];

$imageName = $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];

$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

$uniqueName = uniqid() . '.' . $imageExtension;

$uploadPath = $uploadDir . $uniqueName;

move_uploaded_file($imageTmp, $uploadPath);

$query = "INSERT INTO users (name, family, username, image) VALUES ('$name', '$family', '$username', '$uploadPath')";
mysqli_query($link, $query);

header("Location: index.php");
exit;
?>
