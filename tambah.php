<!DOCTYPE html>
<html>
<head>
    <title>Tambah Obat</title>
</head>
<body>
    <h1>Tambah Obat Baru</h1>
    <form action="proses_tambah.php" method="POST">
        Nama: <input type="text" name="name"><br>
        Deskripsi: <textarea name="description"></textarea><br>
        Harga: <input type="text" name="price"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>