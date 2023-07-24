<!-- produk.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    <link rel="stylesheet" href="css/obat.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Kami</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel dengan data obat dari database -->
                <?php foreach ($obat as $row): ?>
                <tr>
                    <td><?= $row['nama_obat']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td><?= $row['harga']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>
