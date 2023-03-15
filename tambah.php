<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Nama_MK = $_POST["Nama_MK"];
    $Kode_MK = $_POST["Kode_MK"];
    $SKS= $_POST["SKS"];
    $Semester = $_POST["Semester"];
    $Dosen_Pengampuh = $_POST["Dosen_Pengampuh"];


    $query = "INSERT INTO MK (Nama_MK, Kode_MK, SKS, Semester, Dosen_Pengampuh) VALUES ('$Nama_MK', '$Kode_MK', '$SKS', '$Semester', '$Dosen_Pengampuh')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: list_data.php");
        exit();
    } else {
        echo "Data gagal ditambahkan.";
    }
}
?>
