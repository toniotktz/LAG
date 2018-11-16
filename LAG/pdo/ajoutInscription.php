<?php 
require_once "database.php";

function insertMember(){
    $bdd = new database();
    $bdd->connexion();
    $nom-> $_POST['nom'];
    $prenom-> $_POST['prenom'];
    $email-> $_POST['email'];
    $ville-> $_POST['ville'];
    $cp-> $_POST['cp'];
    $telephone-> $_POST['telephone'];
    $query = $bdd->getBdd()->prepare($bdd->addMember());
    $array =array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'ville'=>$ville,
        'cp'=>$cp,
        'telephone'=>$telephone
        );
    $query->execute($query);
}
if(isset($_POST['confirmer'])){
    insertMember();
    header('Location: ..\index.php');
}
?>