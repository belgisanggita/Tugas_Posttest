<!DOCTYPE html>
<html>
<head>
    <title>Edit Obat</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/edit_obat.css'); ?>">
</head>
<body>
    <h2>Edit Obat</h2>
    <form action="<?= base_url('obat/update'); ?>" method="POST">
        <input type="hidden" name="id" value="<?= $obat['id']; ?>">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" name="nama_obat" value="<?= $obat['nama_obat']; ?>" required><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" value="<?= $obat['jumlah']; ?>" required><br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" step="0.01" value="<?= $obat['harga']; ?>" required><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
