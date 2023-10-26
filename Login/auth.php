<?php
session_start();
require('config.php');
$query= $conn->prepare("SELECT*FROM users WHERE email = ?");
$query->execute([$_POST['email']]);
$users=$query->fetch();
$mdp=$_POST['mdp'];
if ($users&&($mdp==$users['mdp'])){
    echo 'AUTH OK';
    header("location:./home.html");
}
else{
    echo "<script>alert(AUTH NOK)</script>";
    header("location:./inscription.html");
}
{session_start();
    $_SESSION['email']=$user['email'];
    $_SESSION['mdp']=$user['mdp'];}


?>