<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Anggota</title>
	<link rel="stylesheet" type="text/css" href="style_tambah.css">
</head>
<body>

	<div class="container">
		<h1>Form Tambah Anggota</h1>

		<form action="tambah.php" method="POST">
			<label for="Nama_MK">Nama_MK:</label>
			<input type="text" id="Nama_MK" name="Nama_MK" placeholder="Masukkan Nama_MK" required>

			<label for="Kode_MK">Kode_MK:</label>
			<input type="text" id="Kode_MK" name="Kode_MK" placeholder="Masukkan Kode_MK" required>

			<label for="SKS">SKS:</label>
			<input type="text" id="SKS" name="SKS" placeholder="SKS" required>

			<label for="Semester">SEMESTER:</label>
			<textarea id="Semester" name="Semester" placeholder="Semester" required></textarea>

			<label for="Dosen_Pengampuh"">Dosen_Pengampuh":</label>
			<input type="Dosen_Pengampuh"" id="Dosen_Pengampuh"" name="Dosen_Pengampuh"" placeholder="Dosen_Pengampuh" required>

			<button type="submit">Tambah</button>
		</form>
	</div>

</body>
</html>
