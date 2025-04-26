<?php

include("cdn.html");

$id = $_POST["id"];

$link = mysqli_connect("localhost", "root", "", "Users");
$query = "DELETE FROM users WHERE id=$id";

$result = mysqli_query($link, $query);

echo"<a href='index.php' class='my-3 btn btn-success'>product removed successfully!</a>";

?>