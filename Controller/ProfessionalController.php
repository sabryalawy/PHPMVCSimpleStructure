<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfessionalController
 *
 * @author Alawi
 */
class ProfessionalController {

    public function __construct($method, $var) {
        call_user_func_array(["ProfessionalController", $method], $var);
    }


    public function index($param) {
        echo $param;
    }

}