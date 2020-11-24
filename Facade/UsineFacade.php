<?php

include_once 'Usine.php';

class UsineFacade
{
    protected $usine;

    public function __construct(Usine $usineConstruct)
    {
        $this->usine = $usineConstruct;
    }

    public function iWantBigUsine()
    {
        $this->usine->fondationUsine();
        $this->usine->dalleEnBeton();
        $this->usine->structureUsine();
        $this->usine->murUsine();
        $this->usine->electriciteEtPlomberie();
        $this->usine->goUsine();

    }
}