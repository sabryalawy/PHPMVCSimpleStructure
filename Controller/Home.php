<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Alawi
 */
class Home {
    public function __construct($method,$var="sabry") {
        
        $this->$method($var);
        echo 'not found';
    }
    
    function index($var){
//        echo $var;
    }
}
