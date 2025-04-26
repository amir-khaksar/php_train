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
    <form action="search_db.php" method="post" enctype="multipart/form-data">

        <h2>enter information for search</h2>

        <div class="my-3">
            <label class="form-lable">Name:</label>
            <input class="form-control" name="name"  type="text" />
        </div>
        <div class="mb-3">
            <label class="form-lable">family:</label>
            <input class="form-control"  name="family" type="text" />
        </div>
        <div class="mb-3">
            <label class="form-lable">username:</label>
            <input class="form-control" name="username"  type="text" />
        </div>
        <div class="mb-3">
            <a class="btn btn-warning" href="index.php">Cancel</a>
            <input class="btn btn-info" type="submit" value="Save" />
        </div>
    </form>
</div>
</body>
</html>