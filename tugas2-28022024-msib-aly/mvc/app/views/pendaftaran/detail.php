<div class="container mt-5">

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['pendaftaran']['no_pendaftaran']; ?></h5>
        <p class="card-text"><?= $data['pendaftaran']['tanggal_daftar']; ?></p>
        <h5 class="card-title"><?= $data['pendaftaran']['nama']; ?></h5>
        <p class="card-text"><?= $data['pendaftaran']['tempat_lahir']; ?></p>
        <p class="card-text"><?= $data['pendaftaran']['tanggal_lahir']; ?></p>
        <p class="card-text"><?= $data['pendaftaran']['jenis_kelamin']; ?></p>
        <p class="card-text"><?= $data['pendaftaran']['agama']; ?></p>
        <p class="card-text"><?= $data['pendaftaran']['asal_sekolah']; ?></p>
        <p class="card-text"><?= $data['pendaftaran']['alamat']; ?></p>

        <a href="<?= BASEURL; ?>/pendaftaran" class="card-link">Kembali</a>

    </div>
    </div>



</div>