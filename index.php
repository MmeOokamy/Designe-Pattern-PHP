<?php
include_once 'Employe.php';
include_once 'Independant.php';
include_once 'Staff.php';
include_once 'EmployeFactory.php';
include_once 'FactureBuilder.php';
include_once 'Iterator/FactureIterator.php';



$factureBuilder = new FactureBuilder();

$listFacture1 = [
    $factureBuilder
    ->addDate('2020-10-03')
    ->addAmount(1500)
    ->addLabel('Facture 1')
    ->build(),
    $factureBuilder
    ->addDate('2020-10-04')
    ->addAmount(4500)
    ->addLabel('Facture 2')
    ->build(),
    $factureBuilder
    ->addDate('2020-10-05')
    ->addAmount(3500)
    ->addLabel('Facture 3')
    ->build(),
];

$listFacture2 = [
    $factureBuilder
        ->addDate('2020-10-03')
        ->addAmount(1550)
        ->addLabel('Facture 1')
        ->build(),
    $factureBuilder
        ->addDate('2020-10-04')
        ->addAmount(4800)
        ->addLabel('Facture 2')
        ->build(),
    $factureBuilder
        ->addDate('2020-10-05')
        ->addAmount(6500)
        ->addLabel('Facture 3')
        ->build(),
];

$myEmployees = Staff::getInstance();
$myEmployees->add(EmployeFactory::CreateEmployee("Salesman", [ "Pierre", "Paul", 54, "2010", 45000]));
$myEmployees->add(EmployeFactory::CreateEmployee("Salesman", ["Pierre", "Business", 45, "1995", 30000]));
$myEmployees->add(EmployeFactory::CreateEmployee("Representant", ["Léon", "Ventout", 25, "2001", 20000]));
$myEmployees->add(EmployeFactory::CreateEmployee("Producer", ["Yves", "Ahalouest", 28, "1998", 1000]));
$myEmployees->add(EmployeFactory::CreateEmployee("Wharehouseman", ["Jeanne", "Stoktout", 32, "1998", 45]));
$myEmployees->add(EmployeFactory::CreateEmployee("ProducerWithRisk", ["Jean", "Flippe", 28, "2000", 1000]));
$myEmployees->add(EmployeFactory::CreateEmployee("Independant", ["Jean", "Flippe", 28, "2000", 1000, $listFacture1]));
$myEmployees->add(EmployeFactory::CreateEmployee("WharehousemanWithRisk", ["Al", "Abordage", 30, "2001", 45]));
$myEmployees->add(EmployeFactory::CreateEmployee("Independant", ["Al", "Abordage", 30, "2001", 45, $listFacture2]));

$myEmployees->displaySalaries();

$myEmployees->displayAverageSalary();
