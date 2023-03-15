<?php
$koneksi = mysqli_connect ("localhost","root","","f55121087");
//cek status koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal:".mysqli_connect_error();
}
?>