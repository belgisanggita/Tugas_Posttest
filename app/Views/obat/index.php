<!DOCTYPE html>
<html>
<head>
    <title>Daftar Obat</title>
    <link rel="stylesheet" href="assets/css/obat.css">
</head>
<body>
    <h2>Daftar Obat</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($obat as $o): ?>
            <tr>
                <td><?= $o['id']; ?></td>
                <td><?= $o['nama_obat']; ?></td>
                <td><?= $o['jumlah']; ?></td>
                <td><?= $o['harga']; ?></td>
                <td>
                    <a href="<?= base_url('obat/edit/' . $o['id']); ?>">Edit</a> |
                    <a href="<?= base_url('obat/delete/' . $o['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data obat ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Tambah Obat Baru</h2>
    <form action="<?= base_url('obat/simpan'); ?>" method="POST">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" name="nama_obat" required><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" step="0.01" required><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>
