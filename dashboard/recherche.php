<?php

// Connexion à la base de données
require('config.php');

// Requête SQL pour récupérer les élèves
$requete = "SELECT * FROM personn WHERE fonction = 'eleve' AND fonction = 'prof'";
$resultat = $conn->query($requete);

// Affichage des résultats
while($eleve = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo "Nom : " . $eleve['name'] . "<br>";
    echo "Prénom : " . $eleve['firstname'] . "<br>";

    // Autres informations sur l'élève...
    echo "<br>";
}

// Fermeture de la connexion à la base de données
$connexion = null;
?>