<style>
 .my-table thead td{
  vertical-align : middle;
 }

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <h3>Data Pendaftar</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-left">
            <a href="<?= BASEURL; ?>/Pendaftaran/fromtambah" 
            class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="col-md-6 text-right">
            <form action="<?= BASEURL; ?>/pendaftaran/cari" method="post" class="form-inline">
                <div class="input-group ml-auto">
                    <input type="text" class="form-control" placeholder="Cari pendaftar..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-12">
            <?php if (!empty($data['pendaftaran'])) : ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <td rowspan="2" width="5%"> No</td>
                            <td rowspan="2">Nama</td>
                            <td rowspan="2">Asal Sekolah</td>
                            <td colspan="3" style="text-align:center;">Opsi</td>

                    </tr>
                    <tr>
                      <th>Hapus</th>
                      <th>Ubah</th>
                      <th>Detail</th>
                </thead>
                        
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($data['pendaftaran'] as $pendaftaran) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $pendaftaran['nama'] ?></td>
                                <td><?= $pendaftaran['asal_sekolah'] ?></td>
                               
                                <td><a href="<?= BASEURL; ?>/pendaftaran/hapus/<?= $pendaftaran['no_pendaftaran']; ?>" 
                                class="badge badge-danger" onclick="return confirm('Yakin hapus data?')"> 
                                <i class="fas fa-trash-alt"></i> 
                            </a></td>

                        <td><a href="<?= BASEURL; ?>/Pendaftaran/fromubah/<?= $pendaftaran['no_pendaftaran']; ?>" 
                                class="badge badge-warning">
                                <i class="fas fa-edit"></i> 
                            </a></td>

                        <td><a href="<?= BASEURL; ?>/pendaftaran/detail/<?= $pendaftaran['no_pendaftaran']; ?>" 
                                class="badge badge-primary">
                                <i class="fas fa-eye"></i> 
                            </a></td>

                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Tidak ada data pendaftar</p>
            <?php endif; ?>
        </div>
    </div>
</div>

