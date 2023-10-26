<?php
/*Exercice 1-Afficher dans une page Web la date et l’heure du jour. Le format désiré est le suivant :
Nous sommes le : 06 october  2023
Il est 19:30*/
$heure= 'il est: 19h30' ;
$date= 'Nous sommes le: 6 Octobre 2023';
echo $date.'<br>'.$heure.'<br>';//TEXTE qui ne change pas
echo date('D,d,M,Y H:i:s').'<br>';//date actuel
/*Exercice 2- Lisez les valeurs des variables du script de l’exercice 2 à l’aide du tableau.*/
$nom='Rachid';
$age='32ans';
$adresse='Mantes la Ville';
print_r(array(//créer un tableau
    "Nom" => $nom,
    "Age" => $age,
    "Adresse" => $adresse
));
var_dump(array(// lecture du type de donné, nombre
    "Nom" => $nom,
    "Age" => $age,
    "Adresse" => $adresse
));
/*Exercice 3-Rédigez une expression conditionnelle pour tester si un nombre est à la fois
un multiple de 3 et de 5.*/
$num = '345'; // Nombre à tester
if ($num % 3 == 0 && $num % 5 == 0) {
    echo '<br>'."Le nombre est un multiple de 3 et de 5.";
  }else{
    echo '<br>'."Le nombre n'est pas un multiple de 3 et de 5.";
  }

/*Exercice 4-Écrivez une expression conditionnelle utilisant les variables $age et $sexe dans une instruction
if pour sélectionner une personne de sexe féminin dont l’âge est compris entre 21 et 40 ans et afficher 
un message de bienvenue approprié.*/
$age= '45';
$sexe= 'féminin';
if ($sexe=='féminin'&&$age <= 21){
   echo '<br>'."Bienvenue Mademoisel";
}elseif($sexe=='féminin'&&$age >= 40)
{echo '<br>'."Bienvenue Madame";
}
/*Exercice5-Écrivez un script qui prend une entrée de chaîne de l'utilisateur et détermine
s'il s'agit d'un palindrome (un mot ou une phrase qui se lit de la même manière vers l'arrière 
que vers l'avant)*/
$input = strtolower(str_replace(' ', '', $_POST['input'])); // Récupére l'entrée et suppression des espaces et mise en minuscules
$reverse = strrev($input); // Inverse

if ($input == $reverse) { // Vérifie
    echo "C'est un palindrome !";
} else {
    echo "Ce n'est pas un palindrome.";
}
/*Exercice 6-Modifier le code ci-dessous pour calculer la moyenne des notes.
<?php
  $note_maths = 15;
  $note_francais = 12;
  $note_histoire_geo = 9;
  $moyenne = 0;
  echo 'La moyenne est de '.$moyenne.' / 20.';
?>*/
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_francais+$note_maths+$note_histoire_geo)/3;
echo'<br>'.'La moyenne est de '.$moyenne.' / 20.';
/*Exercice 7-Déclarer une variable $age qui contient la valeur de type integer de votre choix. 
Réaliser une condition pour afficher si la personne est mineure ou majeure.*/
$age = 25;
if ($age < 18) {
    echo "La personne est mineure.";
} else {
    echo'<br>'."La personne est majeure.";
}
/*------------------------------------------------------------------------Exercice 8=Exercice 3*/

/*Exercice 9-Créez un script utilisant une boucle for pour additionner tous les entiers compris 
entre 0 et 30 et afficher la somme.*/
for($n=0;$n<=30; $n++){
    echo '<br>'.'<h1></h1>'.$n ;
}
//----------------------------------------------------------------------------------------------Correction
$sum = 0;
for($n=0 ;$n<=30;$n++){
 global $sum;
    $sum+=$n;
   
}
echo '<br>' .'the sum of  number betwen 0 and 30 is : ' .$sum ;
//------------------------------------------------------------------------Créer un switch d'un feu tricolore
$color='orange';
switch($color){
    case 'red':
        echo '<br>' .'Arretez vous!';
        break;
    case 'orange':
        echo '<br>' .'Ralentir!';
        break;
    case 'green':
        echo '<br>' .'Vous pouvez passer';
        break;
    default :
        echo '<br>'.'ATTENTION!'; 
}
//----------Formulaire---------


?>