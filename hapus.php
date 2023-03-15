<?php
include "koneksi.php";

$id = $_GET['id'];
$result = false;

if (!empty($id)) {
  // Query untuk menghapus data berdasarkan id
  $result = mysqli_query($koneksi, "DELETE FROM MK WHERE id = '$id'");
}

if ($result) {
  // Jika query berhasil, redirect ke halaman utama
  header("Location: list_data.php");
  exit();
} else {
  // Jika query gagal, tampilkan pesan error
  echo "Data gagal dihapus.";
}
?>
