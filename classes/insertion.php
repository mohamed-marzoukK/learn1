<?php
require_once('Jouet.php');
$us=new Jouet();
$us->nom=$_POST['nom'];
$us->matiere=$_POST['matiere'];
$us->prix=$_POST['prix'];
$us->couleur=$_POST['couleur'];
$us->dateFabrication=$_POST['dateFabrication'];

$us->Insertion_jouet();
echo "Insertion effectuée"; 
$t_url = "http://localhost/Gestion_des_objets/index.php";


header("Location: " . $t_url);
?>