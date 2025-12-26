<?php
    require './config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="icon" href="Favicon.jpg">

</head>
<body>
    <form action="code.php" method="POST">
        <div>
            <label>Name:</label> <br>
            <input type="text" name="name">
        </div>

        <div>
            <label>Age:</label> <br>
            <input type="number" name="age">
        </div>

        <div>
            <label>Address:</label> <br>
            <input type="text" name="address">
        </div>

        <div>
            <button type="submit" name="add_btn">Submit</button>
            <button><a href="show.php">Cancel</a></button>
        </div>
    </form>
</body>
</html>