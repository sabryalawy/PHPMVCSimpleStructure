<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author Alawi
 */
class DBConnection {

    private $localhostDB = "localhost";
    private $usernameDB = "root";
    private $passwordDB = "Sabry1998";
    private $dbName = "ommal";
    public static $db;

    public function __construct() {
        DBConnection::$db = new mysqli($this->localhostDB, $this->usernameDB, $this->passwordDB, $this->dbName);
        if (DBConnection::$db->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public static function getFromTableByName($table, $uneq) {
        if ($rez = DBConnection::$db->query("select * from $table where userName='$uneq'")) {
            return $rez->fetch_assoc();
        } else {
            echo 'needs to construct';
        }
    }

    public static function addForTable($table, $uneq) {
        
    }

}
