<?php
    $user = 'root';
    $pass = '';
    $database = 'aromatic_data_base';
    $host = 'localhost';

    try{
        $conn = new PDO("mysql:host=".$host.";dbname=".$database, $user, $pass);
        /* die("Conectado"); */
    }
    catch (PDOException $e){
        exit("Error: " . $e->getMessage());
    }
?>