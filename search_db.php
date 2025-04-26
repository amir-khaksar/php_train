<?php

include("cdn.html");

$name = $_POST['name'];
$family = $_POST['family'];
$username = $_POST['username'];

$link = mysqli_connect("localhost", "root", "", "Users");

$result = mysqli_query($link, "SELECT * FROM users WHERE username='$username' AND name='$name' AND family='$family' ");

if (mysqli_num_rows($result) > 0) {
    echo"<a href='index.php' class='my-3 btn btn-success'>user found</a>";
} else {
    echo"<a href='index.php' class='my-3 btn btn-success'>user not found</a>";}


?>