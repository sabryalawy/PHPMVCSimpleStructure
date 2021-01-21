<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Alawi
 */
class Customer{
    public $id;
    public $userName;
    public $fName;
    public $lName;
    public $password;
    public $phoneNum;
    public $gender;
    public $loginStatus;
    public $lastLogin;
    public $email;
    
    public function __construct()
    {
        $this->id="";
        $this->userName="";
        $this->fName="";
        $this->lName="";
        $this->password="";
        $this->phoneNum="";
        $this->gender="";
        $this->loginStatus="";
        $this->lastLogin="";
        $this->email="";
    }
}