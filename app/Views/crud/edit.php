<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/editan" method="POST">
            <div class="input">
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>">
            </div>
            <div class="input">
                <label for="nim">Nim yang baru</label>
                <input type="text" name="newNim" id="nim">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
            </div>
            <div class="input">
                <label for="nama">Nama yang baru</label>
                <input type="text" name="newNama" id="nama">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>">
            </div>
            <div class="input">
                <label for="prodi">Prodi yang baru</label>
                <input type="text" name="newProdi" id="prodi">
            </div>
            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas" value="<?= $edit['universitas']; ?>">
            </div>
            <div class="input">
                <label for="universitas">Universitas yang baru</label>
                <input type="text" name="newUniversitas" id="universitas">
            </div>
            <div class=" input">
                <label for="nomor_handphone">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= $edit['nomor_handphone']; ?>">
            </div>
            <div class=" input">
                <label for="nomor_handphone">Nomor Handphone yang baru</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>