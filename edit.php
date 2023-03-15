<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $Nama_MK = $_POST['Nama_MK'];
    $Kode_MK = $_POST['Kode_MK'];
    $SKS = $_POST['SKS'];
    $Semester = $_POST['Semester'];
    $Dosen_Pengampuh = $_POST['Dosen_pengampuh'];

    $query = "UPDATE MK SET Nama_MK='$Nama_MK', Kode_MK='$Kode_MK', SKS='$SKS', Semester='$Semester', Dosen_Pengampuh='$Dosen_Pengampuh' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header('Location: index.php');
    }else{
        echo "Data gagal diupdate";
    }
}else{
    $id = $_GET['id'];
    $query = "SELECT * FROM MK WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}
?>