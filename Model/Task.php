<?php
class Task
{
    public $id;
    public $pricePerM;
    public $location;
    public $totalPrice;
    public $Cid;
    public $discription;
    public $postDate;

    public function __construct()
    {
        $this->id=0;
        $this->pricePerM="";
        $this->location="";
        $this->totalPricce="";
        $this->Cid=0;
        $this->discription="";
    }
}
