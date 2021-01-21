<?php

class App {

    private $controller = "Home";
    private $method = "Index";
    private $var;

    public function __construct($path) {

        $this->URLdisction($path);
        //if the controller not found it will be redirct to home controller
        if ($this->checkClass($this->controller)) {
            
            if ($this->checkMethod($this->controller, $this->method)) {
                new $this->controller($this->method, $this->var);
            } else {
                echo 'not method finded in controller '.$this->controller;
            }
            
        } else {
            new Home($this->method, $this->var);
        }

        
    }

    public function checkClass($control) {

        if (class_exists($control)) {
            return TRUE;
        }
        return FALSE;
    }

    public function checkMethod($object, $method) {
        if (method_exists($object, $method))
            return TRUE;
        return FALSE;
    }

    public function URLdisction($url) {
        //get the controller
        (isset($url[0])) ? $this->controller = $url[0] : $this->controller = "Home";

        //get the method
        (isset($url[1])) ? $this->method = $url[1] : $this->method = "index";

        $this->var = array_slice($url, 2);
    }

}
