<?php

class pendaftaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Calon Mahasiswa';
        $data['pendaftaran'] = $this->model('Pendaftaran_model')->getAllPendaftaran();
        $this->view('templates/header', $data);
        $this->view('pendaftaran/index', $data);
        $this->view('templates/footer');

    }

    public function detail($no_pendaftaran)
    {
        $data['judul'] = 'Detail Pendaftaran';
        $data['pendaftaran'] = $this->model('Pendaftaran_model')->getPendaftaranById($no_pendaftaran);
        $this->view('templates/header', $data);
        $this->view('pendaftaran/detail', $data);
        $this->view('templates/footer');

    }
    public function fromtambah()
    {
        $data['judul'] = 'Tambah Data  Pendaftaran';
       
        $this->view('templates/header', $data);
        $this->view('pendaftaran/tambah_data', $data);
        $this->view('templates/footer');
       
    }

    public function tambah()
    {
        if( $this->model('Pendaftaran_model')->tambah($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Pendaftaran');
            exit;
        }
    }

    public function hapus($no_pendaftaran)
    {
        if( $this->model('Pendaftaran_model')->hapusDataPendaftaran($no_pendaftaran) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pendaftaran');
            exit;
        }else{
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pendaftaran');
            exit;
        }
    }

  
public function cari()
{
    $data['judul'] = 'Daftar pendaftaran';
    $data['pendaftaran'] = $this->model('Pendaftaran_model')->cariDataPendaftaran();
    $this->view('templates/header', $data);
    $this->view('pendaftaran/index', $data);
    $this->view('templates/footer');

}

public function fromubah($no_pendaftaran)
    {
        $data['judul'] = 'Ubah Data Pendaftaran';
        $data['ubahdata'] = $this->model('Pendaftaran_model')->ubah($no_pendaftaran);
        $this->view('templates/header', $data);
        $this->view('pendaftaran/ubah_data', $data);
        $this->view('templates/footer');
     
    }
    
    public function prosesubah()
{
    if( $this->model('Pendaftaran_model')->prosesubah($_POST) > 0 ){
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/Pendaftaran');
        exit;
    }
}
}
