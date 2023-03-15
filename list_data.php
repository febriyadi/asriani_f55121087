<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <input type="text" id="search" placeholder="Cari Nama_MK">

    <table border="1" width = "100%" align = "center" id="MK-table">
        <tr>
            <td>id</td>
            <td>Nama_MK</td>
            <td>Kode_MK</td>
            <td>SKS</td>
            <td>SEMESTER</td>
            <td>Dosen_Pengampuh</td>

            <td class="1"><a href="tambah_data.php">Tambah</a></td>
            
        </tr>
        <?php
        include "koneksi.php";
        $datanya = mysqli_query($koneksi, "SELECT * FROM MK") or die();
        $nomor = 1;
        while ($data = mysqli_fetch_array($datanya)){
        ?>
        <tr>
            <td><?=$nomor;?></td>
            <td><?=$data['Nama_MK']?></td>
            <td><?=$data['Kode_MK']?></td>
            <td><?=$data['SKS']?></td>
            <td><?=$data['Semester']?></td>
            <td><?=$data['Dosen_Pengampuh']?></td>
            <td>
                    
            <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            <td class=""><a href="form_edit.php">Edit</a></td>
                    </td>
                    </tr>
</form>

        <?php $nomor++; }?>
        
    </table>
    

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Function to highlight table row on click
        $(document).ready(function(){
            $("#anggota-table tbody tr").click(function(){
                $(this).addClass('selected').siblings().removeClass('selected');
            });

            
            // Function for search
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#anggota-table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>
