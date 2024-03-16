<?php

class Pendaftaran_model {
    private $table = 'pendaftaran';
    private $db ;

    public function __construct()
    {
        $this->db = new Database;
    }
 
    public function getAllPendaftaran()
    {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
    }

    public function getPendaftaranById($no_pendaftaran)
{
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_pendaftaran=:no_pendaftaran');
    $this->db->bind(':no_pendaftaran', $no_pendaftaran);
    return $this->db->resultSingle();
}

public function hapusDataPendaftaran($no_pendaftaran)
{
    $query = "DELETE FROM pendaftaran WHERE no_pendaftaran = :no_pendaftaran";
    $this->db->query($query);
    $this->db->bind('no_pendaftaran', $no_pendaftaran);

    $this->db->execute();

    return $this->db->rowCount();

}

public function tambah($data)
{
    $query = "INSERT INTO pendaftaran 
                VALUES ('',:tanggal_daftar, :nama, :tempat_lahir, :tanggal_lahir, 
                        :jenis_kelamin, :agama, :asal_sekolah, :alamat)";

    $this->db->query($query);
    
    $this->db->bind('tanggal_daftar', $data['tanggal_daftar']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('tempat_lahir', $data['tempat_lahir']);
    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('agama', $data['agama']);
    $this->db->bind('asal_sekolah', $data['asal_sekolah']);
    $this->db->bind('alamat', $data['alamat']);
    


    $this->db->execute();

    return $this->db->rowCount();
}

public function prosesubah($data)
{
    $query = "UPDATE pendaftaran SET
                tanggal_daftar = :tanggal_daftar, 
                nama = :nama, 
                tempat_lahir = :tempat_lahir,
                tanggal_lahir = :tanggal_lahir, 
                jenis_kelamin = :jenis_kelamin,
                agama = :agama, 
                asal_sekolah = :asal_sekolah, 
                alamat = :alamat
                WHERE no_pendaftaran = :no_pendaftaran";

    $this->db->query($query);
    
    $this->db->bind('tanggal_daftar', $data['tanggal_daftar']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('tempat_lahir', $data['tempat_lahir']);
    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('agama', $data['agama']);
    $this->db->bind('asal_sekolah', $data['asal_sekolah']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('no_pendaftaran', $data['no_pendaftaran']);


    $this->db->execute();

    return $this->db->rowCount();
}
public function ubah($no_pendaftaran)
{
    $this->db->query("SELECT * FROM pendaftaran WHERE no_pendaftaran =:no_pendaftaran");
    $this->db->bind('no_pendaftaran', $no_pendaftaran);
    return $this->db->resultAll();
}


public function cariDataPendaftaran()
{
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM pendaftaran WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind(':keyword', "%$keyword%");
    return $this->db->resultAll();
}

}
