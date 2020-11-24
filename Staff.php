<?php

include_once 'Employe.php';
include_once 'Independant.php';
include_once 'EmployeFactory.php';
include_once  'observer/Observer.php';

class Staff
{
    private static  $instance;

    public $employees;
    protected $observers = [];
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
        $this->notify();notify('add', $employee);
    }

    public function attach($observers){
        if (is_array($observers)){
            foreach ( $observers as $observer){
                if (!$observer instanceof  ObserverInterface) {
                    throw new Exception();
                }
                $this->attach($observer);
            }
            return ;
        }
        $this->observers[] = $observers;
    }

    public  function  deleteEmployee($employees)
    {
        unset($this->observers[$employees]) ;
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->handle();
        }
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




