<!DOCTYPE html>
<html lang="fa" dir="rtl">

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
    <form method="post" action="delete_user_db.php">
        <?php
        $id = $_GET["id"];
        echo "<input name='id' type='hidden' value=\"$id\" />";
        ?>

        <div class="mb-3">
            <div class="alert alert-danger" role="alert">
               ? Should the selected item be deleted
            </div>
        </div>
        <div class="mb-3">
            <a href="index.php" class="btn btn-success">No</a>
            <input class="btn btn-danger" type="submit" value='Yes, Delete' />
        </div>

    </form>
</div>
</body>

</html>