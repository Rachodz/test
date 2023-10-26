<?php
//récuperation de email et mot de passe et comparaison
session_start();
require('config.php');
$query= $conn->prepare("SELECT*FROM personn WHERE email = ?");
$query->execute([$_POST['email']]);
$users=$query->fetch();
$mdp=$_POST['mdp'];
if ($users&&($mdp==$users['mdp'])){
    echo 'AUTH OK';
    header("location: dashboard\index.php");
}
else{
    echo "<script>alert(AUTH NOK)</script>";
    
}
{session_start();
    $_SESSION['email']=$user['email'];
    $_SESSION['mdp']=$user['mdp'];}


?>