<!DOCTYPE html>
<html>
<head>
    <title>Edit Obat</title>
</head>
<body>
    <h1>Edit Obat</h1>
    <?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM drugs WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    ?>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        Deskripsi: <textarea name="description"><?php echo $row['description']; ?></textarea><br>
        Harga: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
