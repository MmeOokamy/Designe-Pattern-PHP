<?php

Class Facture
{
    private $date;
    public $amount;
    private $label;

    public function __construct(FactureBuilder $factureBuilder)
    {
        $this->date = $factureBuilder->date;
        $this->amount = $factureBuilder->amount;
        $this->label = $factureBuilder->label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    public function isSame(Facture  $factureComp)
    {

    }

}

