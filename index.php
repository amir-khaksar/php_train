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
<div class="container">
    <a class="btn btn-primary mt-4" href="new_user.php">Add New User</a>
    <br />
    <table class="table table-hover mt-2">
        <tr>
            <td>image</td>
            <td>name</td>
            <td>family</td>
            <td>username</td>
            <td>Manage</td>
        </tr>

        <?php
        $link = mysqli_connect("localhost", "root", "", "Users");
        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row["name"];
            $family = $row["family"];
            $username = $row["username"];
            $image = $row["image"];

            echo "<tr>";

            echo "<td>";
            if (!empty($image)) {
                echo "<img src='$image' style='width: 50px; height: 50px; object-fit: cover; border-radius: 100%;'>";
            } else {
                echo "<img src='uploads/default.jpg' style='width: 80px; height: 80px; object-fit: cover; border-radius: 10px;'>";
            }

            echo "<td>$name</td>";

            echo "<td>$family</td>";

            echo "<td>$username</td>";

            echo "<td>";
            echo "<a class='btn btn-primary mx-1' href='edit_user.php?id=$id'>edit</a>";
            echo "<a class='btn btn-danger mx-1' href='delete_user.php?id=$id'>delete</a>";
            echo "</td>";

            echo "<tr/>";
        }
        ?>
    </table>
</div>


</body>

</html>