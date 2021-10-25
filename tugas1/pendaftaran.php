<?php
include("config.php");

if(isset($_POST['daftar'])){

    $Nama = $_POST['Nama'];
    $Jurusan = $_POST['Jurusan'];
    $Alamat = $_POST['Alamat'];

    $sql = "INSERT INTO calon_siswa (Nama, Jurusan,Alamat) VALUE 
    ('$Nama','$Jurusan','$Alamat')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: index.php?status=sukses');

    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses Dilarang....");
}
?>