<?php require "connection.php" ?>
<?php
$req = $bdd ->prepare('INSERT INTO inscription(Nom, Prenom, Email, Ville, CP, Telephone) VALUES(:nom, :prenom, :email, :ville, :cp, :tel)');
$req->execute(array(
    'nom' => $nom,
    'prenom'=> $prenom,
    'email'=> $email,
    'ville'=> $ville,
    'cp'=> $cp,
    'tel'=>$tel
    ));
?>