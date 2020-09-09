<?php

// class Connection {
//     private $host;
//     private $port;
//     private $db_name;
//     private $db_username;
//     private $db_user_password;
//     private $db_connection;

//     public function __construct($host, $port, $db_name, $db_username, $db_user_password) {
//         $this->host = $host;
//         $this->port = $port;
//         $this->db_name = $db_name;
//         $this->db_username = $db_username;
//         $this->db_user_password = $db_user_password;
//         $this->dbConnect();
//     }

//     private function dbConnect() {
//         if ($this->db_connection == null) {
//             try {
//                 $this->db_connection = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name . ';charset=utf8', '' . $this->db_username . '', '' . $this->db_user_password . '');
//                 $this->db_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // :: call to static variable
//                 echo 'connection sucess ';
//             }
//             catch (PDOException $e) {
//                 die('Erreur : '.$e->getMessage());
//             }
//         }
//         return $this->db_connection;
//     }
// }

// $dbcon = new Connection('localhost', '8889', 'cogip', 'root', 'root');
// var_dump($dbcon->dbConnect());
// // $res =  $dbcon->dbConnect->query('SELECT * FROM companies');
// // var_dump($res);
try {
    $dbcon = new PDO("mysql:host=localhost;dbname=cogip;port=8889","root","root");
    echo'connection success';
} catch (exception $e){
    echo'Connection failed' . $e->getMessage();
}
