<?php

$status = session_status();
if($status == PHP_SESSION_NONE){
//Si non active
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
//Si session non valide
}else
if($status == PHP_SESSION_ACTIVE){
//Destruction et redémarrage d'une nouvelle
    session_destroy();
    session_start();
}
//Donnée serveur
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

//Connection DB
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
