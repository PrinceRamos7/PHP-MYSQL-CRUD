<?php
    require './config.php';

    //Add
    if(isset($_POST['add_btn'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $sql = "INSERT INTO test(name,age,address) VALUES ('$name','$age','$address')";
        $add = mysqli_query($conn, $sql);

        if($add){
            ?>
                <script>
                    alert("Information Added Successfully");
                    window.location.href="show.php";
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("Failed to add, Please try Again!");
                    window.location.href="add.php";
                </script>
            <?php
        }
    }    


    //Edit
        if(isset($_POST['edit_btn'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $sql = "UPDATE test SET name='$name', age='$age', address='$address' WHERE id='$id'";
        $edit = mysqli_query($conn, $sql);

        if($edit){
            ?>
                <script>
                    alert("Information Edited Successfully");
                    window.location.href="show.php";
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("Failed to edit, Please try Again!");
                    window.location.href="show.php";
                </script>
            <?php
        }
    }    

    //Delete
        if(isset($_GET['delete_id'])){
            $id = $_GET['delete_id'];

            $sql = "DELETE FROM test WHERE id='$id'";
            $delete = mysqli_query($conn, $sql);

            if($delete){
            ?>
                <script>
                    alert("Information Deleted Successfully");
                    window.location.href="show.php";
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("Failed to delete, Please try Again!");
                    window.location.href="show.php";
                </script>
            <?php
        }

        }


?>