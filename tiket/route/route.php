<?php 

$routes = [];

$routes['GET']['/'] = 'Cdashboard@index';
$routes['GET']['/formpesan'] = 'Ctambah@index';
$routes['POST']['/formpesan/tambah'] = 'Ctambah@tambah';
$routes['GET']['/formhapus'] = 'Chapus@index';
$routes['GET']['/formhapus/hapus'] = 'Chapus@index';
// $routes['GET']['/portofolioupdate/{id}'] = 'PortofolioController@formupdate';
// $routes['POST']['/createporto'] = 'PortofolioController@create';
// $routes['POST']['/updateporto/{id}'] = 'PortofolioController@update';
// $routes['GET']['/deleteporto/{id}'] = 'PortofolioController@delete';
?>