



<?php 
/*
    $x=-2; 
    $y=11;
   
    if($x>1){
      echo'<h1> x>1</h1>';
    }
    else{
      echo'<h1> x<1 </h1>';
    }
    
   function testphp(){
    global $x,$y;
     $S=0;
  
 
    $S++;

    print('<br>'.$x);
  }
testphp();
testphp();

$age=3;
$time=date(HisM);
if($age<12){
echo'<h1>Modèle enfant</h1>'.$time ;}
elseif($age>12){
echo'<h1>Modèle adulte</h1>'.$time ;}
*/

$nom='rachid';
$ffloat= 2.34;
$iint=23;
$text='Bonjour et Bienvenue';

echo 'resultat var dump'.var_dump($nom).'<br>';
echo 'resultat var dump float'.var_dump($ffloat).'<br>';
echo 'resultat var dump int'.var_dump($iint).'<br>';
echo 'longueur Nom:' .strlen($nom).'<br>';
echo 'nombres de mots'.str_word_count($text).'<br>' ;

/*function long(){
global $nom ;

if(strlen($nom) ==0){
  echo 'Vérifier votre nom';
}
elseif(strlen($nom)>15){
  echo 'Nom trop long';
}
else(strlen($nom)<15){
  echo 'Nom OK'.$nom  ;
}
}
long()*/
for($n=4;$n<=12; $n++){
  echo '<h1></h1>'.$n ;
}

 
?>