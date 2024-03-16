<div class ="container">
<form action="<?=BASEURL?>/Pendaftaran/prosesubah" method="POST" class="mx-auto" style="width: 50%; margin-left: 2cm;">
    <h3 class="text-center">Ubah Data Pendaftaran</h3>
    <?php foreach ($data['ubahdata'] as $ubah): ?>
        <input type="hidden" value="<?= $ubah['no_pendaftaran']?>" name="no_pendaftaran">
        <div class="form-group">
            <label for="tanggal_daftar">Tanggal Daftar:</label>
            <input type="date" class="form-control" value="<?= $ubah['tanggal_daftar']?>" name="tanggal_daftar">
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" value="<?= $ubah['nama']?>" name="nama">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" value="<?= $ubah['tempat_lahir']?>" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" value="<?= $ubah['tanggal_lahir']?>" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select class="form-control" name="jenis_kelamin">
                <option value="<?= $ubah['jenis_kelamin']?>"><?= $ubah['jenis_kelamin']?></option>
                <option value="laki-laki">Laki - laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <input type="text" class="form-control" value="<?= $ubah['agama']?>" name="agama">
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal sekolah:</label>
            <input type="text" class="form-control" value="<?= $ubah['asal_sekolah']?>" name="asal_sekolah">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" value="<?= $ubah['alamat']?>" name="alamat">
        </div>
    <?php endforeach; ?>
    <button type="submit" class="btn btn-primary mx-auto d-block">Ubah Data</button>
</form>
