<?php

class detachEmployee
{
    public function handle(Employe $employe)
    {
        echo'Byebye'. $employe->nom . PHP_EOL;
    }


}

class addEmployee
{
    public function handle(Employe $employe)
    {
        echo'Employe Ajouter!' . PHP_EOL . ' Bienvenue chez nous' . $employe->nom  . PHP_EOL;
    }
}