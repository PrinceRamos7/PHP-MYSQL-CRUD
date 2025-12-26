<?php
    require './config.php';

    $sql = "SELECT * FROM test";
    $query = mysqli_query($conn, $sql);

    //Search 
    if(isset($_GET['search'])){
        $search = '%' . $_GET['search'] . '%';

            $sql = "SELECT * FROM test WHERE name LIKE ? OR age LIKE ?";
            $query = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param($query, 'ss',  $search, $search);
            mysqli_stmt_execute($query);
            $result = mysqli_stmt_get_result($query);
    }
    else{
        $sql = "SELECT * FROM test";
        $result = mysqli_query($conn, $sql);
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="icon" href="Favicon.jpg">
</head>
<body>
    <div>
        <div>
        <button><a href="add.php">Add</a></button> 
        <form action="show.php" method="GET">
        <input type="text" name="search" placeholder="Search" value="<?php echo $_GET['search'] ?? '';?>">
        </form>
        </div>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while ($info = mysqli_fetch_assoc($result)) {                             ?>
                                <tr>
                                    <td><?=  $info['id'] ?></td>
                                    <td><?=  $info['name'] ?></td>
                                    <td><?=  $info['age'] ?></td>
                                    <td><?=  $info['address'] ?></td>
                                    <td>
                                        <button><a href="edit.php?edit_id=<?php echo $info['id'] ?>">Edit</a></button>
                                        <button><a href="code.php?delete_id=<?php echo $info['id']?>">Delete</a></button>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>
