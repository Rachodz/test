<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'successflly connected';
} catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
