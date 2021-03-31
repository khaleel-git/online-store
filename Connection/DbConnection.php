<?php

// class DbConnection {
//     private $host = "localhost";
//     private $user = "root";
//     private $password = "";
//     private $tableName = "online forum ";

//     protected function connect(){
//         $dsn = 'mysql:host=' . $this->host. ';tableName='. $this->tableName;
//         $pdo = new PDO($dsn, $this->user,  $this->password);
//         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         return $pdo;
//     }


// }

$host = "localhost";
$user = "root";
$password = "";
$dbName = "online forum";

$connection = mysqli_connect($host, $user, $password, $dbName);
    if (!$connection) {
        die("connection failed " . mysqli_connect_error());
    }
    echo("coonection ok");