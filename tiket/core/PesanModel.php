<?php
class PesanModel {
    protected $controller = 'Cdashboard'; 
    protected $method = 'index'; 
    protected $params = [];
    
    public function __construct() {
        $url =$this->URL();
        if(!empty($url) && file_exists('../tiket/controler/' . $url[0]. '.php')){
            $this->controller = $url[0];
            unset($url[0]);
            
        }
        require_once '../tiket/controler/' . $this->controller . '.php';
        $this->controller = new $this ->controller;
        // var_dump($url);

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)){

            $this->params = array_values($url);
            var_dump($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function URL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            var_dump($url);
            return $url;
        }
        return null;
    }
}
