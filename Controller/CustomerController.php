<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerController
 *
 * @author Alawi
 */
class CustomerController {

    public function __construct($method, $var) {
        call_user_func_array(["CustomerController", $method], $var);
    }
    
    public function getppp($param,$sss) {
        echo $param." ".$sss;
    }
    
    public function getByName() {
        CustomerDB::getByNmae("Sabrialawiii");
    }

}
