<?php
class Jouet {
    private $nom;
    private $matiere;
    private $prix;
    private $couleur;
    private $dateFabrication;

    public function __construct() {

    }

    public function __get($attribut) {
        return $this->$attribut;
    }

    public function __set($attribut, $valeur) {
        $this->$attribut = $valeur;
    }

    public function modifier_prix($nouveauPrix) {
        $this->prix = $nouveauPrix;
    }

    public function categorie() {
        switch ($this->couleur) {
            case 'bleu':
                return 'Bébés';
            case 'vert':
                return 'Enfants';
            case 'rouge':
                return 'Adolescents';
            case 'noir':
                return 'Adultes';
            default:
                return 'Non spécifié';
        }
    }

    public function afficher_proprietes() {
        echo "Nom: {$this->nom}<br>";
        echo "Matière: {$this->matiere}<br>";
        echo "Prix: {$this->prix} dinars<br>";
        echo "Couleur: {$this->couleur}<br>";
        echo "Date de fabrication: {$this->dateFabrication}<br>";
        echo "Public cible: {$this->categorie()}<br>";
    }
    function  Insertion_jouet()
{
require_once('config.php');

$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="insert into jouet values
('', '$this->nom','$this->matiere','$this->prix','$this->couleur','$this->dateFabrication')";
$pdo->exec($req) or print_r($pdo->errorInfo());
}


function Consulter_jouet()
{
require_once('config.php');

$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM jouet";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 
return $res; 
}

function Modifier_jouet($id)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE jouet SET nom= '$this->nom' , 
matiere='$this->matiere',prix='$this->prix',couleur='$this->couleur',dateFabrication='$this->dateFabrication' WHERE id='$id' ";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function Supprimer_jouet($id)
{
require_once('config.php');

$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="DELETE FROM jouet WHERE id='$id'"; 
$pdo->exec($req) or print_r($pdo->errorInfo());
}
function listuser_id($id)
{
require_once('config.php');

$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM Jouet where id='$id'";
$res=$pdo->query($req);
$row=$res->fetch() or print_r($pdo->errorInfo());
return $row;
}
}
?>

