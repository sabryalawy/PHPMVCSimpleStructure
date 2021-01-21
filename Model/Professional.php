<?php

class Professional{
    public $id;
    public $userName;
    public $fName;
    public $lName;
    public $password;
    public $phoneNum;
    public $gender;
    public $loginStatus;
    public $lastLogin;
    public $profession;
    public $address;
    public $email;

    
    public function __construct()
    {
        $this->id=0;
        $this->userName="";
        $this->fName="";
        $this->lName="";
        $this->password="";
        $this->phoneNum="";
        $this->gender="";
        $this->loginStatus="";
        $this->lastLogin="";
        $this->lastLogin="";
        $this->profession="";
        $this->address="";
        $this->email="";
    }
}