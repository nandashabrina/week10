<?php
    include "myconnection.php";

    $id = $_GET["id"];
    $query = "SELECT FROM student WHERE id=$id";

    $target_path = "directory/";

    $target_path = $target_path . basename(
        $_FILES['foto']['name']);

        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)){
            $simpan = mysqli_query($connect, "INSERT INTO foto VALUES ('name')");
            echo "";
        }else{
            echo "There was an error uploading the file, please try again!";
        }

    mysqli_close($connect);
?>