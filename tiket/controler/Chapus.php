<?php

require_once '../tiket/core/database.php';
require_once '../tiket/models/user_model.php';
require_once '../tiket/route/route.php';

class Chapus extends Controller
{   
    public function index($id) {
        // Load model
        $this->loadModel('Tambahdata');

        // Panggil method hapus data dari model
        $this->Tambahdata->hapusdatapesan($id);

        // Redirect kembali ke halaman dashboard atau halaman lain yang diinginkan
        header('Location: ' . BASEURL . 'dashboard');
        exit();
    }
}
?>