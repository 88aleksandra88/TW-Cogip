<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// namespace Becode\Cogip\Model; don't forget / for PDO !

class Connection
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', 'root'); 
        echo 'connection success';
        return $db;
    }
}