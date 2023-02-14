<?php

    //include dulu file koneksi
    include "koneksi.php";

    //memulai session website
    session_start();
    
    //ambil dulu data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select *from info_pengguna where username='".$username."' and password='".$password."'";
    $data = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($data);

    if($cek>0)
    {
        $baris = mysqli_fetch_array($data);
        $_SESSION['id_pengguna'] = $baris['id_pengguna'];
        $_SESSION['username'] = $baris['username'];
        $_SESSION['password'] = $baris['password'];
        $_SESSION['nama_lengkap'] = $baris['nama_lengkap'];
        header("Location:order.php");
    }
    else
    {
        header("Location:login.html");
    }
    

    //test
    //echo $username;
    //echo "<br/>";
    //echo $password;
    //echo $query;

?>