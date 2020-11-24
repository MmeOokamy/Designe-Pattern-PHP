<?php

interface ObserverInterface
{
    public function  handle();
}


class detachEmployee implements ObserverInterface
{
    public function handle()
    {
        echo'Byebye Employee' . PHP_EOL;
    }


}

class addEmployee implements  ObserverInterface
{
    public function handle()
    {
        echo'Employe Ajouter' . PHP_EOL;
    }
}