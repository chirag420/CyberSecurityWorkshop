<?php 
    // Development Connection
     //$host = '127.0.0.1';
     //$db = 'registration';
     //$user = 'root';
     //$pass = '';
     //$charset = 'utf8mb4';

     // Remote Database Connection
     $host = 'remotemysql.com';
     $db = 'LBMXew99E4';
     $user = 'LBMXew99E4';
     $pass = 'cGSbmPMN3V';
     $charset = 'utf8mb4';

    //Remote Database Connection
    //$host = 'mysql';
    //$host = 'mysql';
    //$db = 'NC1HPsPMvA';
    //$user = 'NC1HPsPMvA';
    //$pass = 'rqUDdNcsXH';
    //$charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
   
    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
       throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("administer","password0");
?>
