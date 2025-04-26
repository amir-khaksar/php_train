<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include("cdn.html");
?>
<title>Document</title>
</head>

<body>
<?php
$id = $_GET["id"];
$link = mysqli_connect("localhost", "root", "", "Users");
$query = "SELECT * FROM users WHERE id=" . $id . "";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    $name = $row["name"];
    $family = $row["family"];
    $username = $row["username"];

    echo "<div class='container'>";

    echo "<form method='post' action='edit_user_db.php' enctype='multipart/form-data'>";
    echo "<input type='hidden' name='id' value='$id' />";

    echo "<label class='form-label'>image: </label>";
    echo "<input class='form-control' name='image' type='file'  />";
    echo "<br />";

    echo "<label class='form-label'>name: </label>";
    echo "<input class='form-control' name='name' type='text' value='$name' />";
    echo "<br />";

    echo "<label class='form-label'>family: </label>";
    echo "<input class='form-control' name='family' type='text' value='$family' />";
    echo "<br />";

    echo "<label class='form-label'>username: </label>";
    echo "<input class='form-control' name='username' type='text' value='$username' />";
    echo "<hr />";

    echo "<a class='btn btn-danger mx-1' href='index.php'>Cancel</a>";
    echo "<input class='btn btn-success mx-1' type='submit' value='Save' />";

    echo "</form>";

    echo "</div>";
} else {
    echo "<a href='index.php'>Invalid product id. click to back to list</a>";
}
?>
</body>

</html>