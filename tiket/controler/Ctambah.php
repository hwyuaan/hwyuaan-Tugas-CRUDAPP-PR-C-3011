<?php

require_once '../tiket/core/database.php';
require_once '../tiket/models/user_model.php';
require_once '../tiket/route/route.php';

class Ctambah extends Controller
{   
    public function index(){
 
       $this -> view('formpesan/index');
       exit();
    }

    public function tambah() {
        //var_dump ($_POST);
       if ($this->model('tambahdata')->tambahdatapesan($_POST)>0){
        header('Location: ' . BASEURL . 'dashboard/');
       }
    
    }
}
?>