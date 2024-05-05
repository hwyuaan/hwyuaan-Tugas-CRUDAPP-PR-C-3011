<?php
require_once '../tiket/core/database.php';
require_once '../tiket/models/user_model.php';
require_once '../tiket/route/route.php';

class Cdashboard extends Controller{
    public function index(){
        $this -> view('dashboard/index');
    }

    public function tambah(){
        $this->view('formpesan/index');
        exit();
    }
    public function hapus($id){
        // if($this -> model('user_model')->hapusdatapesan($id)>0){
        //     Flasher ::('Location: ' . BASEURL . '/dashboard');
        // }

    }
}