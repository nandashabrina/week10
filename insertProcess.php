<?php
    include "myconnection.php";

    $name = $_GET["myname"];
    $address = $_GET["myaddress"];

    $query = "INSERT INTO student(name,address)
            VALUE('$name', '$address' )";
    
    if(isset($_GET['photo'])){
        $namaFoto = $_FILES['file']['name'];

        $path = $_FILES['file']['tmp_name'];

        move_uploaded_file($namaFoto, 'images/'.$path);
        mysqli_query("INSERT INTO photo VALUES('namaFoto')");
    }

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>