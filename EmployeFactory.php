<?php

include_once 'Employe.php';
include_once 'Independant.php';
include_once 'Staff.php';


class EmployeFactory
{
    public static function CreateEmployee($poste, $params = [])
    {

        switch ($poste){
            case 'Salesman':
                $created = new Salesman(...$params);
                break;
            case 'Representant':
                $created = new Representant(...$params);
                break;
            case 'Producer':
                $created =  new Producer(...$params);
                break;
            case 'Wharehouseman':
                $created =  new Wharehouseman(...$params);
                break;
            case 'ProducerWithRisk':
                $created =  new ProducerWithRisk(...$params);
                break;
            case 'WharehousemanWithRisk':
                $created =  new WharehousemanWithRisk(...$params);
                break;
            case 'Independant':
                $created =  new Independant(...$params);
                break;
            default:
                throw new Exception("je ne connais pas ce poste");
        }
        return $created;
    }
}