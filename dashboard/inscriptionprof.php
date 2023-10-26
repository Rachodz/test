<?php
require('config.php');
// récupère donnée formulaire
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$niveau = $_POST['niveau'];
$fonction = $_POST['fonction'];
$mdp = $_POST['mdp'];
$photo = $_POST['photo'];
//insertionDB
try {
$sql="INSERT INTO  personn (`name`,`firstname`,`numero`,`email`,`adresse`,`niveau`,`fonction`,`mdp`,`photo`) VALUES 
('$name','$firstname','$numero','$email','$adresse','$niveau','$fonction','$mdp','$photo')";
$conn->exec($sql);
//fermeture auto
echo '<script>self.close();</script>';
} catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}    
?>