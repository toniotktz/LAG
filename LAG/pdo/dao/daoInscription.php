<?php
require_once __DIR__."/../modules/bdd_util.php";

function insertInscription($inscription) {
    //Connexion a la base de donnees
    $bdd = connectDBS();
    //La requete

    $query = "INSERT INTO  inscription(nom,prenom,email,telephone,ville,cp)
    VALUES (:nom,:prenom,:email,:telephone,:ville,:cp)";

    //Prepare la requete
    $statement = $bdd->prepare($query);
    $statement->bindParam('nom', $inscription["nom"]);
    $statement->bindParam('prenom', $inscription["prenom"]);
    $statement->bindParam('email', $inscription["email"]);
    $statement->bindParam('ville', $inscription["ville"]);
    $statement->bindParam('cp', $inscription["cp"]);
    $statement->bindParam('telephone', $inscription["telephone"]);
    $statement->execute();
    //Execute la requete
    $res = $statement->fetch(PDO::FETCH_ASSOC);
    //on test si update est bien passe
    if ($res && $statement->rowCount() > 0) {
        $retour = true;
    }
    //Fermeture du statement
    $statement->closeCursor();
    //on ferme la connexion !
    $bdd = NULL;
    //renvoie le resultat ok=true, false sinon
    return $retour;
}