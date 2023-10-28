<?php
class core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        // print_r($this-> getURL());
        $url = $this-> getURL();

        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
            $this->currentController = ucwords($url[0]);
            

            unset($url[0]);

            require_once '../app/controllers/'.$this->currentController.'.php';

            $this->currentController = new $this->currentController;
        
            if(isset($url[1])) {
                if(method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];

                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
    }

    // public function getURL() {
    //     if (isset($_GET['url'])) {
    //         $url = rtrim($_GET['url'], '/');
    //         $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
    //         $url = explode('/', $url);

    //         return $url;
    //     } 

    //}

    public function getURL() {
        if (isset($_GET['url'])) {
            $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
    
            // Check if the URL is valid after sanitization
            if ($url !== false) {
                $url = rtrim($url, '/');
                $url = explode('/', $url);
                return $url;
            } else {
                // Handle invalid URL - Log, throw an error, or handle as appropriate
                // Returning null as an example
                return null;
            }
        } else {
            // Handle when 'url' parameter is not set
            // Returning null, change as needed
            return null;
        }
    }
    
}

