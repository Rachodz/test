<?php
require('config.php');
$email = $_POST['email'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$mdp = $_POST['mdp'];
$numero = $_POST['numero'];
$sexe =$_POST['gender'];
$adresse=$_POST['adresse'];
try {
$sql="INSERT INTO  users (`name`,`firstname`,`age`,`email`,`adresse`,`password`,`numero`,sexe) VALUES ('$name','$firstname','$email','$adresse',$age,'$mdp',$numero,'$sexe')";
$conn->exec($sql);
    echo 'successflly inserd';
} catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
    ?>