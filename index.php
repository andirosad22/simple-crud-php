<!DOCTYPE html>
<html>
<head>
    <title>Pengelolaan Obat</title>
</head>
<body>
    <h1>Daftar Obat</h1>
    <a href="tambah.php">Tambah Obat</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM drugs";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data obat.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
