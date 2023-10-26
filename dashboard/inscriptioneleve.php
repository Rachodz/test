<?php
require('config.php');
//Récupération input formulaire 
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$niveau = $_POST['niveau'];
$fonction = $_POST['fonction'];
$mdp = $_POST['mdp'];
$photo = $_POST['photo'];

//inserer photo DB
$photo = $imageData = file_get_contents('path/to/image.jpg');
$binaryData = base64_encode($imageData);
$stmt = $mysqli->prepare("INSERT INTO personn (`name`,`firstname`,`numero`,`email`,`adresse`,`niveau`,`fonction`,`mdp`,`photo`) VALUES 
('$name','$firstname','$numero','$email','$adresse','$niveau','$fonction','$mdp','$photo')");
   $stmt->bind_param("s", $binaryData);
   $stmt->execute();

//insérer DB
try {
$sql="INSERT INTO  personn (`name`,`firstname`,`numero`,`email`,`adresse`,`niveau`,`fonction`,`mdp`,`photo`) VALUES 
('$name','$firstname','$numero','$email','$adresse','$niveau','$fonction','$mdp','$photo')";
$conn->exec($sql);
// fermeture auto après enregistrement
echo '<script>self.close();</script>';
} catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
?>