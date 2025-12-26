<?php
    require './config.php';

    $id = $_GET['edit_id'];
    $sql = "SELECT * FROM test WHERE id='$id'";
    $display = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($display);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="icon" href="Favicon.png">
</head>
<body>
    <div class="edit_content">
                <form action="code.php" method="POST">
        <div>
            <input type="hidden" name="id" value="<?= $info['id'] ?>">
        </div>
        <div id="Title">
            <h2>Edit</h2>
        </div>
        <div>
            <label>Name:</label> <br>
            <input type="text" name="name"  value="<?= $info['name'] ?>">
        </div>

        <div>
            <label>Age:</label> <br>
            <input type="number" name="age" value="<?= $info['age'] ?>">
        </div>

        <div>
            <label>Address:</label> <br>
            <input type="text" name="address" value="<?= $info['address'] ?>">
        </div>

        <div>
            <button type="submit" name="edit_btn">Submit</button>
            <button><a href="show.php">Cancel</a></button>
        </div>
    </form>

    </div>
</body>
</html>








