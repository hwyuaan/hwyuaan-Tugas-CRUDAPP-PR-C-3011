<?php

class Chomepage extends Controller {
    public function index(){
       $this -> view('homepage/index');
        // echo 'sukses';
    }
    // public function view($template){
    //     include($template . '.php');
    // }
}