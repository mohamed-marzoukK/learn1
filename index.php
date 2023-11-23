<?php    

require_once 'classes/Jouet.php';
require_once 'classes/Controles.php';
/*// 2. Créer deux objets de la classe Jouet
$jouet1 = new Jouet("Poupée Barbie", "plastique", 15, "vert");
$jouet2 = new Jouet("Echec Lumineux", "verre", 45, "noir");

// 2.1. Afficher les deux objets créés.
$jouet1->afficher_proprietes();
echo "\n";
$jouet2->afficher_proprietes();
echo "\n";

// 2.2. Modifier le prix du jouet "Echec Lumineux"
$jouet2->modifier_prix(30);

// 2.3. Afficher la matière du jouet "Poupée Barbie"
echo "Matière de Poupée Barbie: {$jouet1->matiere}<br>";

// 2.4. Ajouter la propriété date de fabrication
$jouet1->dateFabrication = '12/08/2009';
$jouet2->dateFabrication = '02/04/2010';

// 2.5. Afficher le public auquel le jouet "Echec Lumineux" est destiné.
echo "Public cible de Echec Lumineux: {$jouet2->categorie()}<br>";

// 3. Créer une classe appelée contrôles
$controles = new Controles();

// Vérifier les contrôles définis ci-dessus avec une instance appelée jouet01
$nom = 'jouet*O1';
$matiere = 'plastique';
$prix = '12gt';
$couleur = '';
$dateFabrication = '30/02/2009';

echo "Verifalph pour le nom: " . ($controles->Verifalph($nom) ? "Valide" : "Non valide") . "<br>";
echo "Verifnum pour le prix: " . ($controles->Verifnum($prix) ? "Valide" : "Non valide") . "<br>";
echo "Verifnul pour la couleur: " . ($controles->Verifnul($couleur) ? "Valide" : "Non valide") . "<br>";
echo "Verifdat pour la date de fabrication: " . ($controles->Verifdat($dateFabrication) ? "Valide" : "Non valide") . "<br>";
 */

require_once('classes/Jouet.php');
$us=new Jouet();
$res=$us->Consulter_jouet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<a href="classes/AjouetJouet.php" class="btn btn-primary">ajouterarticle</a>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Nom</th>
<th scope="col">matiere</th>
<th scope="col">prix</th>
<th scope="col">couleur</th>
<th scope="col">dateFabrication</th>
<th scope="col">Modifier</th>
<th scope="col">Supprimer</th>
</tr>
</thead>
<?php
foreach($res as $row)
{
echo "<tbody class='table-group-divider'>
<tr>
<th scope='row'>$row[0]</th>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
<td>$row[5]</td>
<td><a href ='modif.php?id=$row[0]  'class='btn btn-success'>Modifier</a></td>
<td><a href='sup.php?id=$row[0] 'class='btn btn-danger'>Supprimer</a></td> </tr></tbody>";
}
echo "</table>";
?>
</body>
</html>



