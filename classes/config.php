<?php
class connexion
{ 
public function CNXbase()
{
$dbc=new PDO("mysql:host=localhost;dbname=magasin",'root',''); 
return $dbc;
} 
}
?>