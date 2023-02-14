<?php

    //include dulu file koneksi
    include "koneksi.php";

    //memulai session website
    session_start();
    
    //ambil dulu data dari form login
    $fname = $_POST['fname'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    echo $fname;
    echo $hp;
    echo $alamat;

    $query = "INSERT INTO `tbl_order`(`id_order`, `nama_order`, `phone_order`, `address`) VALUES ('','$fname','$hp','$alamat)";
    $data = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($data);

    if($cek>0)
    {
        header("Location:payment.php");
    }
    else
    {
        header("Location:order.php");
    }

    // $query = "select *from info_pengguna where username='".$username."' and password='".$password."'";
    // $data = mysqli_query($koneksi, $query);

    // $cek = mysqli_num_rows($data);

    // if($cek>0)
    // {
    //     $baris = mysqli_fetch_array($data);
    //     $_SESSION['id_pengguna'] = $baris['id_pengguna'];
    //     $_SESSION['username'] = $baris['username'];
    //     $_SESSION['password'] = $baris['password'];
    //     $_SESSION['nama_lengkap'] = $baris['nama_lengkap'];
    //     header("Location:dashboard.php");
    // }
    // else
    // {
    //     header("Location:login.html");
    // }
    

    //test
    //echo $username;
    //echo "<br/>";
    //echo $password;
    //echo $query;

?>