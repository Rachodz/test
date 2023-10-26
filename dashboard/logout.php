<?php
//Destruction de la session
require 'config.php';
session_destroy();
header('location:index.html');
?>