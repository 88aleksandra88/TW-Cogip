<?php

function getListCompanies(){
    $host = "mysql:host=mysqldb;dbname=cogip;charset=utf8";
    $user = "root";
    $pwd="root";
    try{
        $db = new PDO($host, $user, $pwd);
    }catch(Exception $e){
        echo 'Connection failed: ' . $e->getMessage();
    }

    $res =  $db->query('SELECT * FROM companies');

    return $res;
}

?>