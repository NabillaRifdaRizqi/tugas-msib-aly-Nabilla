<?php

class About extends Controller {
    public function index($nama = 'Nabilla', $pekerjaan = 'mahasiswa', $umur = 20) 
    {
        // Mengirimkan data ke view
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur; 
        $data['judul'] = 'About me';
        
        $this->view('templates/header', $data );
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() 
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
