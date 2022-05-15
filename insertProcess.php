<?php
    include "myconnection.php";

    $target_path = "directory/";

    $target_path = $target_path . basename(
        $_FILES['foto']['name']);

    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_path)){
        $foto = $target_path;
    }

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];

    $query = "INSERT INTO student(name,address,foto)
            VALUE('$name', '$address', '$foto')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>