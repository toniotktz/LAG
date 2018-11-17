<?php
$serveur ='localhost';
$login ='root';
$mdp ='';
$nom_bdd='lag';

try
{
    $conn = new PDO('mysql:host='.$serveur.';dbname='.$nom_bdd.'', $login, $mdp);

}
catch (Exception $e)
{
    exit('Erreur : ' . $e->getMessage());
}
?>