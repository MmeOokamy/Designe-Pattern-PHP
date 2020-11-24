<?php

include_once 'Employe.php';
include_once 'Staff.php';
include_once 'EmployeFactory.php';
include_once 'FactureBuilder.php';
include_once 'Iterator/FactureIterator.php';

class Independant extends Employe
{
    private $numSIREN;
    public FactureIterator $factureList;
    private $counter;

    public function __Construct($nom, $prenom, $age, $date, $numSIREN, FactureIterator $factureList)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->numSIREN = $numSIREN;
        $this->factureList = $factureList;
    }

    public function addFactures($Facture)
    {
        $this->factureList[] = $Facture;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return "Employé Independant: '$this->nom'";
    }

    function getSalary()
    {
        $totalAmount = 0;
        foreach ($this->factureList as $Facture){

            if(strpos("Frais de déplacement -", $Facture->getLabel()) === 0)
            {
                $totalAmount += $Facture->amount;
            }

        }
        return $totalAmount;
    }


    public function getFactureList()
    {
        return $this->factureList;
    }

}


