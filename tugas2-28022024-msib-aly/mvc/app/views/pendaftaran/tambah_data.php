<div class ="container">
<form action="<?=BASEURL?>/Pendaftaran/tambah" method="post" class="mx-auto" style="width: 50%; margin-left: 2cm;">
    <h3 class="text-center">Tambah Data Pendaftaran</h3>
        <div class="form-group">
            <label for="tanggal_daftar">Tanggal Daftar:</label>
            <input type="date" class="form-control"  name="tanggal_daftar">
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control"  name="tanggal_lahir">
        </div>
        <div class="form-group">
    <label>Jenis Kelamin:</label>
    <select class="form-control" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>

        <div class="form-group">
            <label for="agama">Agama:</label>
            <input type="text" class="form-control"  name="agama">
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal sekolah:</label>
            <input type="text" class="form-control"  name="asal_sekolah">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" name="alamat">
        </div>
   
    <button type="submit" class="btn btn-primary mx-auto d-block">Tambah Data</button>
</form>
