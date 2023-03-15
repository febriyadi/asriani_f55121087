<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $datanya = mysqli_query($koneksi, "SELECT * FROM MK WHERE id=$id");
    if(mysqli_num_rows($datanya) > 0){
        $data = mysqli_fetch_array($datanya);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Anggota</title>
    <link rel="stylesheet" type="text/css" href="style_tambah.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Anggota</h1>
        <form action="edit.php" method="POST">
            <div class="form-group">
                <label for="Nama_mk">Nama MK</label>
                <input type="text" name="Nama_mk" class="form-control" value="<?= $data['Nama_MK'] ?>">
            </div>
            <div class="form-group">
                <label for="Kode_MK">Kode MK</label>
                <input type="text" name="Kode_MK" class="form-control" value="<?= $data['Kode_MK'] ?>">
            </div>
            <div class="form-group">
                <label for="SKS">SKS</label>
                <input type="text" name="SKS" class="form-control" value="<?= $data['SKS'] ?>">
            </div>
            <div class="form-group">
                <label for="Semester">Semester</label>
                <input type="text" name="Semester" class="form-control" value="<?= $data['Semester'] ?>">
            </div>
            <div class="form-group">
                <label for="Dosen_Pengampuh">Dosen Pengampuh</label>
                <input type="text" name="Dosen_Pengampuh" class="form-control" value="<?= $data['Dosen_Pengampuh'] ?>">
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
</body>
</html>
<?php
        } else {
            echo "ID tidak ditemukan.";
        }
    } else {
        echo "ID tidak ditemukan.";
    }
?>
