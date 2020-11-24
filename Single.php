<?php


final class Single
{
    private static  $instance;

    public static function getInstance(): Single
    {
        if(!self::$instance){
            self::$instance = new Staff();
        }
        return self::$instance;
    }

}
