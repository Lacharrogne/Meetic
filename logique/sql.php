<?php
    define("DBHOST", "localhost");
    define("DBUSER", "lacharrogne");
    define("DBPASS", "Asce0610");
    define("DBNAME", "meetic");

    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    try{
        $db = new PDO($dsn, DBUSER, DBPASS);
    }catch(PDOException $e){
        die($e -> getMessage());
    };
?>