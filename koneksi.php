<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $nama_db = "infinite.imaji";

    $koneksi = mysqli_connect($server, $username, $password, $nama_db);

    // if(!$koneksi)
    // {
    //     echo "Database tidak terkoneksi";
    // }

    // else{
    //     echo "Koneksi berjalan";
    // }

?>