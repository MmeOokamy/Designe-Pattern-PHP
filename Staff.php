<?php

include_once 'Employe.php';
include_once 'Independant.php';
include_once 'EmployeFactory.php';
include_once  'observer/Observer.php';

class Staff
{
    private static  $instance;
    private static $observers = [];
    protected $employees;
    protected $counter;



    public static function getInstance(): Staff
    {
        if(!self::$instance){
            self::$observers['add'] = new addEmployee();
            self::$observers['remove'] = new detachEmployee();
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct(){}

    public function add($employee)
    {
        $this->employees[] = $employee;
        self::notify('add', $employee);
    }

    public  function  deleteEmployee(Employe $toRemove)
    {
        $this->employees = array_filter($this->employees, function (Employe $employe) use ($toRemove){
            return $employe->isSame($toRemove);
        });
    self::notify('remove', $toRemove);
    }

    public function notify($poste, $instance)
    {
        self::$observers[$poste]->handle($instance);
    }

    public function displaySalaries()
    {
        foreach ($this->employees as $employee){
            echo $employee->getSalary() . PHP_EOL;
        }
    }

    public function displayAverageSalary()
    {
        $total = 0;
        foreach ($this->employees as $employee){
            $total += $employee->getSalary();
        }
        echo $total / count($this->employees) . PHP_EOL;
    }



}




