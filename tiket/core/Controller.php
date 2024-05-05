<?php

class Controller{
    public function view ($view,$data =[]) 
    {
        require_once '../tiket/view/home/' . $view .'.php';

    }
    
    public function model($user_model){
        require_once '../tiket/models/'. $user_model .'.php';
        return new $user_model;
    }

    
    
    
    
}