<?php

require_once 'classes/Jouet.php';
$us=new Jouet();
$us->Supprimer_jouet($_GET['id']);
echo "Suppression effectuée"; 
$t_url = "http://localhost/Gestion_des_objets/index.php";


header("Location: " . $t_url);
?>