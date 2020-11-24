<?php

include_once 'Independant.php';
include_once 'Facture.php';

class FactureBuilder
{
    public $label;
    public $date = false;
    public $amount = false;

    public function __construct(){}

    public function addLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function addDate($date)
    {
    $this->date = $date;
    return $this;
    }

    public function addAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public  function  build(): Facture
    {
        return  new Facture($this);
    }

}
