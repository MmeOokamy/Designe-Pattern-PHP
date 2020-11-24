<?php

abstract class Employe
{
    Public $nom;
    Public $prenom;
    Public $age;
    Public $date;


public function __Construct($nom, $prenom, $age, $date)
{
    $this->nom =$nom;
    $this->prenom =$prenom;
    $this->age = $age;
    $this->date =$date;
}

    abstract function getSalary();

    /**
     * @return string
     */
    public function getNom(): string
    {
        return "Employé Salarié: '$this->nom'" ;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

}


class Salesman extends Employe
{

    private $ca;

    public function __Construct( $nom, $prenom, $age, $date, $ca)
    {
        parent::__construct( $nom, $prenom, $age, $date);
        $this->ca = $ca;

    }


    function getSalary()
    {
        return ($this->ca *0.2) + 400;
    }
}

class Representant extends Employe
{
    private $ca;
    public function __Construct($nom, $prenom, $age, $date, $ca)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->ca = $ca;

    }

    function getSalary()
    {
        return ($this->ca *0.2) + 800;
    }
}

class Producer extends Employe
{

    private $nbUnits;

    public function __Construct($nom, $prenom, $age, $date, $nbUnits)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->nbUnits = $nbUnits;

    }

    function getSalary()
    {
        return $this->nbUnits *5;
    }
}

class Wharehouseman extends Employe
{

    private $nbHours;

    public function __Construct($nom, $prenom, $age, $date, $nbHours)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->nbHours = $nbHours;

    }

    function getSalary()
    {
        return $this->nbHours * 65;
    }
}

class ProducerWithRisk extends Producer
{

    private $nbUnits;


    function getSalary()
    {
        return parent::getSalary() + 200;
    }
}

class WharehousemanWithRisk extends Wharehouseman
{
    private $nbUnits;

    function getSalary()
    {
        return parent::getSalary() + 200;
    }
}
