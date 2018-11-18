<?php

require_once __DIR__."/../modules/bdd_util.php"; //__DIR__ permet de récuperer le path


/**
 * Fonction qui insert le materiel commandé,
 * l'utilisateur qui l'a commande,
 * les dates de retrait et de depot du materiel
 * dans la base de donnée
 * @param $commander :
 */
function insertArticle($article) {
    //Connexion a la base de donnees
    $bdd = connectDBS();
    //La requete

    /*$query = "INSERT INTO  ()
              VALUES ()";*/

    //Prepare la requete
    /*$statement = $bdd->prepare($query);*/
    /*$statement->bindParam(':Cdateretrait', $commander["Cdateretrait"]);*/
    /*$statement->execute();*/
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

// --------------------------------------------------------------------------------------------------------------------

function validerCommande($commande) {

    $bdd = connectDBS();

    $query = "UPDATE `commande` SET `Cvalidation` = 'valide'
    WHERE `commande`.`Cid` = (:commande)";

    $statement = $bdd->prepare($query);
    // $statement->bindParam(':user', $user);

    $statement->bindParam(':commande', $commande);
    $statement->execute();
    //Execute la requete
    //Fermeture du statement
    $statement->closeCursor();
    //on ferme la connexion !
    $bdd = NULL;
    //renvoie le resultat ok=true, false sinon



}

// --------------------------------------------------------------------------------------------------------------------
?>