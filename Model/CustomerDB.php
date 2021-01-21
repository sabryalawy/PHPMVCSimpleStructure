<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerDB
 *
 * @author Alawi
 */
class CustomerDB {
    public static function getByNmae($param) {
        $data=new DBConnection();
        $rez= DBConnection::getFromTableByName("customer", "Sabrialawiii");
        print_r($rez);
    }
}
