<!DOCTYPE html>
<html>
<head>
    <title>Tambah Obat</title>
</head>
<body>
    <h2>Tambah Obat Baru</h2>
    <form action="<?= base_url('obat/simpan'); ?>" method="POST">
        <label for="nama_obat">Nama Obat:</label>
        <input type="text" name="nama_obat" required><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br>
        <label for="harga">Harga:</label>
       
